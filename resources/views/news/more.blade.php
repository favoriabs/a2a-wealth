@extends('home.master')

@section('content')
    <div class="container-fluid">
  	<div class="row">
    	<div class="col-md-8">
    		<div class="card">
		    <div class="blog-post-item" style="margin:20px;">
			     
				<figure class="blog-item-small-image margin-bottom-20">
					<img class="img-responsive" src="{{$news->picture}}" alt="{{$news->title}}" width="50px" height="50px">
				</figure>
		
				<div class="blog-item-small-content">
		
					<h2><a href="#">{{$news->title}}</a></h2>
		
					<ul class="blog-post-info list-inline">
						<li>
							<a href="#">
								<i class="fa fa-clock-o"></i>
								<span class="font-lato">{{$news->created_at}}</span>
							</a>
						</li>
					</ul>
		
					<p>{{$news->content}}</p>
				</div>
			</div><br/>
		</div> 
		</div>
	</div>
 </div>
@endsection