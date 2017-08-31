<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\GeneralConfig;

use Auth;
use Validator;
use Mail;
use DB;

class GeneralConfigController extends Controller
{

    public function index()
    {
        $getConfig = GeneralConfig::first();

        return view('backend.generalConfig.index', compact('getConfig'));
    }

    public function store(Request $request)
    {
        $message = [
          'email_to.required'  => 'This field is required.',
          'email_to.email'  => 'Format email not valid.',
          'email_cc.email'  => 'Format email not valid.',
        ];

        $validator = Validator::make($request->all(), [
          'email_to' => 'required|email',
          'email_cc' => 'nullable|email',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('config.index')->withErrors($validator)->withInput();
        }

        $update = GeneralConfig::find($request->id);
        $update->email_to = $request->email_to;
        $update->email_cc = $request->email_cc;
        $update->update();

        $data_to = array(['email' => $request->email_to]);
        $data_cc = array(['email' => $request->email_cc]);

        return redirect()->route('config.index')->with('berhasil', 'Email has been registered as Inbox Email');

    }
}
