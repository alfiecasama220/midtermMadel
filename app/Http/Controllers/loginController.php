<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if($validator->passes()) {
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

            return redirect()->intended(route('login'))->with('success', 'Your data has been added');
            
        }
    }

    public function loginPost(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => ' required'
        ]);

        if($validator->passes()) {
            
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->intended(route('dashboard.index'));
            }  else {
                return redirect()->back()->with('error', 'Invalid Username or Password'); 
            }
            
        } else {
            return redirect()->back()->with('error', 'Database error'); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect()->intended(route('login'))->with('success', 'Logged out');
    }
}
