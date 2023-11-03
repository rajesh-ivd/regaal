<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('backend.login');
    }

    public function loginCheck(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $target = $request->input('target');
    
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            
            session()->flash('error', 'Login failed. Please check your credentials.');

            return response()->json([
                'status' => 'failed',
                'msg' => 'Validation error',
                'errors' => $validator->errors(),
            ]);
        }
    
        if ($target == 'admin') {
            $password = strtolower($password);
            if ($email == 'admin@gmail.com' && $password == 'regaal') {
                session()->flash('success', 'Login successful!');

                return response()->json([
                    'status' => 'success',
                    'message' => 'Admin login successful',
                ]);
            } else {
                session()->flash('error', 'Wrong Email or Password!');

                return response()->json([
                    'status' => 'failed',
                    'msg' => 'Wrong Email or Password!',
                ]);
            }
        } else {
         }
    }
}
