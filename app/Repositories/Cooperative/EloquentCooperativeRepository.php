<?php
namespace App\Repositories\Cooperative;

use App\Repositories\Cooperative\CooperativeContract;
use App\Repositories\Sms\SmsContract;
use App\Cooperative; 
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Log;
use DB;


class EloquentCooperativeRepository implements CooperativeContract
{
	protected $smsRepo;
	public function __construct(SmsContract $smsContract){
		$this->smsRepo = $smsContract;
	}
	public function create($request) {
		
		$user = Sentinel::getUser();
		$password = rand(10000, 99999);
		Log::info($password);
	    $farmerDetails = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'user_name' => $request->user_name,
            'password' => $password,
            'cooperative_id' => $user->id,
            
        ];
        
        
        $farmer = Sentinel::registerAndActivate($farmerDetails, true);
        $role = Sentinel::findRoleBySlug('farmer');
        $role->users()->attach($farmer);
        
        //send sms
        // $sms = $this->smsRepo->sendSms($farmer, $password);
        
        return $farmer;
	}
	
	public function edit($request, $cooperativeId) {
	    $cooperative = $this->findById($cooperativeId);
	    $this->cooperativeProperties($cooperative, $request);
	    $cooperative->save();
	    return $cooperative;
	}
	
	public function findById($cooperativeId) {
	    return Cooperative::find($cooperativeId);
	}
	
	public function findAll() {
	    return Cooperative::all();
	}
	
	public function remove($cooperativeId) {
	    $cooperative = $this->findById($cooperativeId);
	    return $cooperative->delete();
	}
	
	public function findFarmers(){
		$cooperative = Sentinel::getUser();
		$users = DB::table('users')->where('cooperative_id', $cooperative->id)->get();
		return $users;
	}	

}
