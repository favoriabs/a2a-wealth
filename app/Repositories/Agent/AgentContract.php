<?php
namespace App\Repositories\Agent;
interface AgentContract
{
	public function create($request);
	public function edit($request, $agentId);
	public function findById($agentId);
	public function findAll();
	public function remove($agentId);
	public function findFarmers();
}
