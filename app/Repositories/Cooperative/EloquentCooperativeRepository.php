<?php
namespace App\Repositories\Cooperative;

use App\Repositories\Cooperative\CooperativeContract;
use App\Cooperative; 

class EloquentCooperativeRepository implements CooperativeContract
{
	public function create($request) {
	    $cooperative = new Cooperative();
	    $this->cooperativeProperties($cooperative, $request);
	    $cooperative->save();
	    return $cooperative;
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
	
	private function cooperativeProperties($cooperative, $request) {
	    $cooperative->name = $request->name;
	    $cooperative->username = ;
	    $cooperative->password = ;
	}
}
