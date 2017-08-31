<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use Validator;
use App\Models\Inbox;
use App\Models\GeneralConfig;

class ContactController extends Controller
{
    function index() {
	    return view('frontend.contact-page.index');
	}
	function store(request $request){

		// block email and black list message
		// if(!str_contains($request->email, ['gmail', 'yahoo', 'ymail', 'hotmail'])){
        // }
        // if(str_contains($request->pesan, ['href', 'http', 'https', 'porn', 'pocker'])){
        // }
		// dd($Request);

        $message = [
          'name.required' 	=> 'required',
          'name.min' 		=> 'to short',
          'email.required'  => 'required',
          'email.email'  	=> 'invalid email',
          'message.required'=> 'required',
          'message.min' 	=> 'to short',
          'g-recaptcha-response.required'  => 'required',
        ];

        $validator = Validator::make($request->all(), [
          'name' 	=> 'required|min:3',
          'email' 	=> 'required|email',
          'message' => 'required|min:10',
          'g-recaptcha-response' => 'required',
        ], $message);

        if($validator->fails())
        {
          return redirect()
          	->route('frontend.contact')
          	->withErrors($validator)
          	->withInput()
          	->with('autofocus', true)
          	->with('info', 'infalid input...')
          	->with('alert', 'alert-danger');
        }

        DB::transaction(function() use($request){
          $save = new Inbox;
          $save->name = $request->name;
          $save->email = $request->email;
          $save->messages = $request->message;
          $save->save();

          $getSendTo = GeneralConfig::first();

          try {
            Mail::send('frontend.contact-page.mail', ['request' => $request], function($message) use ($request, $getSendTo) {
              $message->from('administrator@juiceunited.com', 'Administrator')
                      ->to($getSendTo->email_to);
              if ($getSendTo->email_cc != null) {
                      $message->cc($getSendTo->email_cc);
              }
                      $message->subject('New Inbox From : '.$request->email);
            });
          } catch (\Exception $e) {
            // dd($e);
          }
        });

        return redirect()
        	->route('frontend.contact')
        	->with('autofocus', true)
        	->with('info', 'Data has been Submited')
        	->with('alert', 'alert-success');
	}
}
