<?php
namespace App\Repositories\Company;
interface CompanyContract
{
	public function create($request);
	public function edit($companyId, $request);
	public function findAll();
	public function findById($companyId);
	public function discard($companyId);
}
