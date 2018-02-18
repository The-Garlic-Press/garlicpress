<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagingController extends Controller
{
    public function show(Request $request)
    {
      if($request->hasCookie('demo') && $request->cookie('demo') === config('app.staging_password')) {
        return redirect('/');
      }
      return view('auth.checkpoint');
    }

    public function check(Request $request)
    {
      $this->validate($request, [
        'password' => 'required',
        //'g-recaptcha-response' => 'required|recaptcha',
      ]);

      if($request->input('password') === config('app.staging_password')) {
        return redirect('/')->withCookie('demo', config('app.staging_password'), 999999);
      } else {
        return redirect()->back();
      }
    }
}
