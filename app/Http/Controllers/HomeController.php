<?php

namespace App\Http\Controllers;
use App\Repositories\Product\ProductContract;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    protected $productRepo;
    public function __construct(ProductContract $prodContract){
        $this->productRepo = $prodContract;
    }
    public function index(){
        return view ('home.index');
    }
    
    public function getProducts(){
        $products = $this->productRepo->findAll();
        $users = DB::table('users')->get();
        return view('home.products')->with('products', $products)->with('users', $users);
    }
    
    public function getAboutUs(){
        return view ('home.aboutus');
    }
}
