<?php
namespace App\Repositories\Agent;
use App\Repositories\Agent\AgentContract;
use App\Repositories\Admin\AdminContract;
use App\Repositories\Sms\SmsContract;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Log;
use DB;
use App\Agent;
use App\Farmer;

class EloquentAgentRepository implements AgentContract
{
	protected $smsRepo;
	protected $adminRepo;
	
	public function __construct(SmsContract $smsContract, AdminContract $adminContract){
		$this->smsRepo = $smsContract;
		$this->adminRepo = $adminContract;
	}
	public function create($request) {
		
		$user = Sentinel::getUser();
		$password = $this->adminRepo->generatePassword(10);
		Log::info($password);
	    $farmerDetails = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'user_name' => $request->user_name,
            'password' => $password,
            'agent_id' => $user->id,
            
        ];
        
        
        $farmer = Sentinel::registerAndActivate($farmerDetails, true);
        $role = Sentinel::findRoleBySlug('farmer');
        $role->users()->attach($farmer);
        
        //send sms
        // $sms = $this->smsRepo->sendSms($farmer, $password);
        Log::info($farmer->user_name); Log::info($farmer->phone_number); 
        $sms = $this->smsRepo->send($farmer->user_name, $farmer->phone_number, $password);

        
        return $farmer;
	}
	
	public function edit($request, $agentId) {
	    $farmer = Sentinel::findById($agentId);
	    $farmer->first_name = $request->first_name;
	    $farmer->last_name = $request->last_name;
	    $farmer->user_name = $request->user_name;
	    $farmer->email = $request->email;
	    $farmer->phone_number = $request->phone_number;
	    $farmer->save();
	    return $farmer;
	}
	
	public function findById($agentId) {
	    return Agent::find($agentId);
	}
	
	public function findAll() {
	    return Agent::all();
	}
	
	public function remove($agentId) {
	    $farmer = Sentinel::findById($agentId);
		$farmer->delete();
		//delete on farmers table
		$farmer = Farmer::where('user_id', $agentId);
		if($farmer != null){
			$farmer->delete();
		}
	}
	
	public function findFarmers(){
		$agent = Sentinel::getUser();
		$users = DB::table('users')->where('agent_id', $agent->id)->get();
		return $users;
	}	
}
