<?php
namespace App\Repositories\News;
use App\Repositories\News\NewsContract;
use App\News;

class EloquentNewsRepository implements NewsContract
{
	public function create($request){
	    $news = new News;
	    $news->title = $request->title;
	    $news->content = $request->content;
	    
	    $destination = 'uploads/news';
        $extension = $request->file('picture')->getClientOriginalExtension();
        $fileName = rand(1111111, 9999999).'.'.$extension;
        $request->file('picture')->move($destination, $fileName);
	    $news->picture = '/'.$destination.'/'.$fileName;
	    $news->save();
	    return $news;
	}
	
	public function edit($newsId, $request){
	    $news = $this->findById($newsId);
	    $news->title = $request->title;
	    $news->content = $request->content;
	    $news->save();
	    return $news;
	}
	
	public function findById($id){
	    return News::find($id);
	}
	
	public function findAll(){
	    return News::all();
	}
	
	public function discard($newsId){
	    $news = $this->findById($newsId);
	    $news->delete();
	    return true;
	}
}
