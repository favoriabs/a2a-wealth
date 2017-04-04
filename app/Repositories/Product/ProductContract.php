<?php

namespace App\Repositories\Product;

interface ProductContract
{
	public function create($request);
	public function findAll();
	public function findById($productId);
	public function discard($productId);
}
