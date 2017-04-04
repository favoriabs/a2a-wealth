<?php

namespace App\Repositories\Admin;

interface AdminContract
{
	public function create($request);
	public function createAgent($request);
	public function createCompany($request);
	public function findAll();
	public function findCooperatives();
	public function findCompanies();
	public function editCooperative($request, $id);
	public function editCompany($request, $id);
	public function remove($userId);
}
