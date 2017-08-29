<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\LogAccess;

use DB;
use Auth;
use Validator;
use Hash;
use Mail;
use Image;

class UsersController extends Controller
{


    public function index()
    {
        $getUsers = User::get();

        return view('backend.users.index', compact('getUsers'));
    }

    public function store(Request $request)
    {
        $message = [
          'email.required' => 'This field is required.',
          'email.unique'  => 'This email has already taken.',
          'name.required' => 'This field is required.',
        ];

        $validator = Validator::make($request->all(), [
          'email' => 'required|email|unique:amd_users',
          'name'  => 'required',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('user.index')->withErrors($validator)->withInput();
        }

        DB::transaction(function() use($request){

          $confirmation_code = str_random(30).time();

          $save = new User;
          $save->name = $request->name;
          $save->email = $request->email;
          $save->password = Hash::make('Ju1c3Un1t3D');
          $save->role_id = 1;
          $save->confirmed = 0;
          $save->confirmation_code = $confirmation_code;
          $save->login_count = 0;
          $save->active = 'Y';
          $save->save();

          $data = array([
                    'name' => $request->name,
                    'email' => $request->email,
                    'confirmation_code' => $confirmation_code
                  ]);


          try {
            Mail::send('backend.email.confirm', ['data' => $data], function($message) use ($data) {
              $message->from('administrator@juiceunited.com', 'Administrator')
                      ->to($data[0]['email'], $data[0]['name'])
                      ->subject('Activation Account Juiceunited');
            });
          } catch (\Exception $e) {

          }

        });


        return redirect()->route('user.index')->with('berhasil', 'User Successfully Created, Please check email for activation');

    }

    public function verify($confirmation_code)
    {
        $getUser = User::select('email','confirmation_code')->where('confirmation_code', $confirmation_code)->first();

        if(!$getUser){
          abort(404);
        }

        return view('backend.users.verify', compact('getUser'));
    }

    public function confirm(Request $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'confirmed'=>0]))
        {
            $user = Auth::User();
            $set = User::find(Auth::user()->id);
            $getCounter = $set->login_count;
            $set->confirmed = 1;
            $set->confirmation_code = null;
            $set->login_count = $getCounter+1;
            $set->save();


            return redirect()->route('user.edit')->with('firstLogin', 'Welcome. Change Your Password Please!');

        }
        else
        {
            return redirect()->route('user.verify', ['confirmation_code' => $request->confirmation_code])->with('failedLogin', 'Periksa Kembali Email atau Password Anda.')->withInput();
        }
    }

    public function edit()
    {
        $getUser = User::find(Auth::user()->id);

        return view('backend.users.edit', compact('getUser'));
    }


    public function update(Request $request)
    {
        $message = [
          'name.required' => 'This field is required.',
          'avatar.image' => 'Format not supported.',
          'avatar.max' => 'File size too big.',
          'avatar.dimensions' => 'Max file size 1500px X 1500px.',
        ];

        $validator = Validator::make($request->all(), [
          'avatar' => 'image|mimes:jpeg,bmp,png|max:1000|dimensions:max_width=1500,max_height=1500',
          'name' => 'required',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('user.edit')->withErrors($validator)->withInput();
        }


        DB::transaction(function() use($request){
          $image = $request->file('avatar');


          $save = User::find($request->id);
          $save->name = $request->name;

          if($image){
            $salt = str_random(4);
            $img_url = str_slug($request->name,'-').'-'.$salt.'.' . $image->getClientOriginalExtension();
            Image::make($image)->fit(350)->save('backend/images/profile/'. $img_url);

            $save->avatar = $img_url;
          }

          $save->update();

          $log = new LogAccess;
          $log->actor = Auth::user()->id;
          $log->action = 'Update own profile '.$request->name;
          $log->save();
        });

        return redirect()->route('user.edit')->with('berhasil', 'Profile Successfully Created');
    }

    public function changePassword(Request $request)
    {
        $messages = [
          'oldpass.required' => "Fill Old Password.",
          'newpass.required' => "Fill New Password.",
          'newpass.min' => "Min 8 char.",
          'newpass_confirmation.same' => "Password Did Not Match.",
          'newpass_confirmation.required' => "Fill This Field.",
        ];

        $validator = Validator::make($request->all(), [
          'oldpass' => 'required',
          'newpass' => 'required|min:8',
          'newpass_confirmation' => 'required|same:newpass'
        ], $messages);

        if ($validator->fails()) {
          return redirect()->route('user.edit')->withErrors($validator)->withInput();
        }

        $get = User::find($request->id);

        if(Hash::check($request->oldpass, $get->password))
        {
          $get->password = Hash::make($request->newpass);
          $get->save();

          return redirect()->route('user.edit')->with('berhasil', "Password Has Been Changed.");
        }
        else {
          return redirect()->route('user.edit')->with('erroroldpass', 'Password Did Not Match.');
        }
    }


}
