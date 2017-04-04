<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function getLogin() {
        return view('auth.login');
    }
    
    public function postLogin(Request $request) {
        
        $this->validate($request, [
           'username'  => 'required',
           'password' => 'required',
        ]);

        $credentials = [
            'user_name' => $request->username,
            'password' => $request->password,
        ];
        
        $user = Sentinel::authenticate($credentials);

        if(!Sentinel::authenticate($credentials)) {
            return redirect()->back()->withInput()->with('error', 'Your Login Credentials did not match');
        }else{
                
                Sentinel::login($user);
                session(['currentUser' => $user]);
                
            try {
                
                if (Sentinel::getUser()->inRole('superadmin')) {
                    session(['currentUserRole' => 'superadmin']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('superadmin_dash');
                    
                }
                else if (Sentinel::getUser()->inRole('agent_admin')) {
                    session(['currentUserRole' => 'agent_admin']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('agent_index');
                }
                else if (Sentinel::getUser()->inRole('cooperative_admin')) {
                    session(['currentUserRole' => 'cooperative_admin']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('cooperative_index');
                }
                else if (Sentinel::getUser()->inRole('farmer')) {
                    session(['currentUserRole' => 'farmer']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('farmer_dashboard');
                }else if (Sentinel::getUser()->inRole('company_admin')) {
                    session(['currentUserRole' => 'company']);
                    session(['currentUserId' => $user->id]);
                    return redirect()->route('company_dashboard');
                }
            } catch (BadMethodCallException $e) {
                return redirect()->route('login')
                        ->with('error', 'Your Session has expired. Please login again!');
            }
        }
    }
    
    public function logout() {
        try {
            Sentinel::logout(null, true);
            session()->flush();
            return redirect()->route('home');
        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            return redirect()->route('home');
        } catch (\ErrorException $e) {
            return redirect()->route('login')
                ->with('error', 'Session expired. Login again!');
        }
    }
    
    public function setting(){
        return view('layouts.settings');
    }
    public function changePassword(Request $request){
        $this->validate($request, [
                'old_password' => 'required',
                'new_password' => 'required',
            ]);
        
        $user = Sentinel::getUser();
        if(($request->old_password) != ($user->password)){
            return redirect()->back()->with('error', 'Your old Password does not match your password in our database. Try Again!');
        } else{
            $user->password =  Hash::make($request->new_password);
            $user->save();
        }
    }
}
