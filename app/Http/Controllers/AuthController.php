<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facases\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($user = Auth::user()){
            if($user->level == 'admin'){
                return redirect()->intended('admin/dashboard');
            }elseif ($user->level == 'nasabah'){
                return redirect()->intended('nasabah/dashboard');
            }
        }
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function proses_login(Request  $request){
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

            $kredesil = $request->only('username', 'password');

            if(Auth::attempt($kredesil)){
                $user = Auth::user();
                if($user->level == 'admin'){
                    return redirect()->intended('admin/dashboard');
                }elseif ($user->level == 'nasabah'){
                    return redirect()->intended('nasabah/dashboard');
                }
                return redirect()->intended('/');
            }
            return redirect ('login') -> withInput() -> withErrors(['login_gagal' => 'These credetial do not match our records']);
    }
    
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
