<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\News\NewsContract;
class NewsController extends Controller
{
	protected $repo;
	public function __construct(NewsContract $newsContract) {
		$this->repo = $newsContract;
	}
    
    
    public function index()
    {
        $news = $this->repo->findAll();
        return view('news.index')->with('news', $news);
    }
   
   
    public function create()
    {
        return view('news.create');
    }
    
    
    public function store(Request $request)
    {
       $this->validate($request, [
    	'title' => 'required',
    	'content' => 'required',
	]);

	$news = $this->repo->create($request);
	if ($news->id) {
		return redirect()->back()
			->with('success', 'News successfully Created');
	} else {
		return back()
			->withInput()
			->with('error', 'Could not create news. Try again!');
		}  
    }
    
    public function edit(Request $request, $id)
    {
		$this->validate($request, [
	    	'title' => 'required',
	    	'content' => 'required',
		]);	
		
		$news = $this->repo->edit($id, $request);
		if ($news->id) {
			return redirect()->back()
				->with('success', 'News successfully updated');
		} else {
			return back()
				->withInput()
				->with('error', 'Could not update news. Try again!');
			}
    }
    
    public function discard($id)
    {
        $news = $this->discard($id);
        if($news){
        	return back()->with('success', 'News deleted successfully');
        }else{
        	return back()->with('error', 'News not deleted, Try again!!!');
        }
    }
    
    public function moreNews($newsId){
        $news = $this->repo->findById($newsId);
        return view('news.more')->with('news', $news);
    }
}
