<?php
namespace App\Repositories\Farmer;
interface FarmerContract
{
	public function create($request);
	public function edit($request, $farmerId);
	public function findById($farmerId);
	public function findAll();
	public function remove($farmerId);
}
