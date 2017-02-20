<?php
namespace App\Repositories\Cooperative;
interface CooperativeContract
{
	public function create($request);
	public function edit($request, $cooperativeId);
	public function findById($cooperativeId);
	public function findAll();
}
