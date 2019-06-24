<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;


class LoginController extends Controller
{
    
	public function getLogin()
	{
		return view('page.layout.login');
	}

	public function postLogin(Request $request)
	{
		
		$rules = [
			'email' => 'required|email',
			'password' => 'required|min:8'
		];

		$messages = [
			'email.required' => 'Email là trường bắt buộc',
			'email.email' => 'Email không đúng định dạng',
			'password.required' => 'Password là trường bắt buộc',
			'password.min' => 'Password phải ít nhất 8 ký tự'
		];

		$validator = Validator::make($request->all(), $rules, $messages);

		if($validator->fails())
		{
			return redirect()->back()->withErrors($validator)->withInput();
		}
		else
		{
			$email = $request->input('email');
			$password = $request->input('password');

			if( Auth::attempt(['email' => $email, 'password' => $password]) )
			{
				// dd('dang nhap thanh cong');
				return redirect()->intended('/home');
			}
			else
			{
				$errors = new MessageBag([ 'errorlogin' => 'Email hoặc Password không đúng!']);
				return redirect()->back()->withInput()->withErrors($errors);
			}
		}
	}

}
