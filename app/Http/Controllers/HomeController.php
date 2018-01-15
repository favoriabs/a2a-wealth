<?php

namespace App\Http\Controllers;
use App\Repositories\Product\ProductContract;
use App\Repositories\News\NewsContract;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    protected $productRepo;
    protected $newsRepo;
    public function __construct(ProductContract $prodContract, NewsContract $newsContract){
        $this->productRepo = $prodContract;
        $this->newsRepo = $newsContract;
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
    
    public function getNewsUpdate(){
        $news = $this->newsRepo->findAll();
        return view('home.newsupdate')->with('news', $news);
    }
}
