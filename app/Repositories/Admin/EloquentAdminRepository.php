<?php

namespace App\Repositories\Admin;
use App\Repositories\Admin\AdminContract;
use App\Repositories\Sms\SmsContract;
use App\User;
use Sentinel;
use App\Cooperative;
use App\State;
use App\Lga;
use Illuminate\Support\Facades\Log;
use DB;
use App\Company;

class EloquentAdminRepository implements AdminContract
{
    protected $smsRepo;
	public function __construct(SmsContract $smsContract){
		$this->smsRepo = $smsContract;
	}
	
    public function create($request) {
        
         $password = $this->generatePassword(10);
         Log::info($password);
        $cooperativeDetails = [
            'user_name' => $request->user_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $password,
            
        ];
        
        $cooperative = Sentinel::registerAndActivate($cooperativeDetails, true);
        $role = Sentinel::findRoleBySlug('cooperative_admin');
        $role->users()->attach($cooperative);
        
        // $sms = $this->smsRepo->sendSms($cooperative, $password);
        
        $state = State::where('id', $request->state)->first();
        $lga = Lga::where('id', $request->lga)->first();
        $newCooperative = new Cooperative;
        $newCooperative->state = $state->name;
        $newCooperative->lga = $lga->name;
        $newCooperative->user_id = $cooperative->id;
        $newCooperative->save();
        return $cooperative;
    }
    
    public function createAgent($request){
        $password = $this->generatePassword(10);
         Log::info($password);
        $agentDetails = [
            'user_name' => $request->user_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            
        ];
        
        $agent = Sentinel::registerAndActivate($agentDetails, true);
        $role = Sentinel::findRoleBySlug('agent_admin');
        $role->users()->attach($agent);
        
        // $sms = $this->smsRepo->sendSms($agent, $password);
        $sms = $this->smsRepo->send($agent->user_name, $agent->phone_number, $password);
        return $agent;
    }
    
    public function createCompany($request){
        $password = $this->generatePassword(10);
         Log::info($password);
        $companyDetails = [
            'user_name' => $request->user_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => $password,
            'first_name' => $request->user_name,
            
        ];
        
        $company = Sentinel::registerAndActivate($companyDetails, true);
        $role = Sentinel::findRoleBySlug('company_admin');
        $role->users()->attach($company);
        
        // $sms = $this->smsRepo->sendSms($company, $password);
        $sms = $this->smsRepo->send($company->user_name, $company->phone_number, $password);
        return $company;
    }
    
    public function remove($userId) {
        $user = Sentinel::findById($userId);
        $user->delete();
        return true;
    }
    
    public function findAll() {
        return DB::table('users')->get();
    }
    
    public function editCooperative($request, $id){ 
        $cooperative = Sentinel::findById($id);
        $cooperative->user_name = $request->user_name;
        $cooperative->phone_number = $request->phone_number;
        $cooperative->email = $request->email;
        $cooperative->save();
        return $cooperative;
    }
    
    public function editCompany($request, $id){ 
        $company = Sentinel::findById($id);
        $company->user_name = $request->user_name;
        $company->phone_number = $request->phone_number;
        $company->email = $request->email;
        $company->save();
        return $company;
    }
    
    public function editAgent($request, $id){ 
        $agent = Sentinel::findById($id);
        $agent->user_name = $request->user_name;
        $agent->phone_number = $request->phone_number;
        $agent->email = $request->email;
        $agent->first_name = $request->first_name;
        $agent->last_name = $request->last_name;
        $agent->save();
        return $agent;
    }
    
    public function findCooperatives(){
        $role = DB::table('roles')->where('slug', 'cooperative_admin')->first();
        $roles = DB::table('role_users')->where('role_id', $role->id)->get();
        $cooperatives = [];
        foreach($roles as $role){
            $users = DB::table('users')->where('id', $role->user_id)->get();
            array_push($cooperatives, $users);
        }
        return $cooperatives;
    }
    
    public function findCompanies(){
        $role = DB::table('roles')->where('slug', 'company_admin')->first();
        $roles = DB::table('role_users')->where('role_id', $role->id)->get();
        $companies = [];
        foreach($roles as $role){
            $users = DB::table('users')->where('id', $role->user_id)->get();
            array_push($companies, $users);
        }
        return $companies;
    }
    
    public function findAgents(){
        $role = DB::table('roles')->where('slug', 'agent_admin')->first();
        $roles = DB::table('role_users')->where('role_id', $role->id)->get();
        $agents = [];
        foreach($roles as $role){
            $users = DB::table('users')->where('id', $role->user_id)->get();
            array_push($agents, $users);
        }
        return $agents;
    }
    
    public function generatePassword($length){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr( str_shuffle( $chars ), rand(0,70), $length );
        return $password;
    }

}
