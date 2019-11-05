<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    private function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    }

    public function login(Request $request) {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()
                        ->route('admin.login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        $authOk = Auth::guard('admin')->attempt($credentials, $request->remember);

        if ($authOk) {
            return redirect()->intended(route('admin.dashboard'));
        }
        
        return redirect()
            ->back()
            ->withInputs($request->only('email','remember'));
    }    

    public function index() {
        return view('auth.admin.login');
    }
}
