<?php
namespace App\Repositories\News;
interface NewsContract
{
	public function create($request);
	public function edit($newsId, $request);
	public function findById($newsId);
	public function findAll();
	public function discard($newsId);
}
