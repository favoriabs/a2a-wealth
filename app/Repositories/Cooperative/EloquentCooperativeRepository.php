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
	
// 	private function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds')
//     {
//     	$sets = array();
//     	if(strpos($available_sets, 'l') !== false)
//     		$sets[] = 'abcdefghjkmnpqrstuvwxyz';
//     	if(strpos($available_sets, 'u') !== false)
//     		$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
//     	if(strpos($available_sets, 'd') !== false)
//     		$sets[] = '23456789';
//     	if(strpos($available_sets, 's') !== false)
//     		$sets[] = '!@#$%&*?';
//     	$all = '';
//     	$password = '';
//     	foreach($sets as $set)
//     	{
//     		$password .= $set[array_rand(str_split($set))];
//     		$all .= $set;
//     	}
//     	$all = str_split($all);
//     	for($i = 0; $i < $length - count($sets); $i++)
//     		$password .= $all[array_rand($all)];
//     	$password = str_shuffle($password);
//     	if(!$add_dashes)
//     		return $password;
//     	$dash_len = floor(sqrt($length));
//     	$dash_str = '';
//     	while(strlen($password) > $dash_len)
//     	{
//     		$dash_str .= substr($password, 0, $dash_len) . '-';
//     		$password = substr($password, $dash_len);
//     	}
//     	$dash_str .= $password;
//     	return $dash_str;
//     	dd($dash_str);
//     }
}
