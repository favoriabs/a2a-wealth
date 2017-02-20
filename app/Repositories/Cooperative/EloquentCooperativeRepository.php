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
	public function edit($request, $cooperativeId);
	public function findById($cooperativeId);
	public function findAll();
	
	private function cooperativeProperties($cooperative, $request) {
	    $cooperative->name = $request->name;
	    $cooperative->username = ;
	    $cooperative->password = ;
	}
}
