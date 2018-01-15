@extends('home.master')

@section('content')
  <div class="container-fluid">
  	<div class="row">
    	<div class="col-md-8">
    		<div class="card">
            @if(count($news) < 1)
                <div>There are no news yet!!!</div>
            @else
			@foreach($news as $news)
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
		
					<p>{{substr($news->content, 0)}}</p>
	
					<a href="{{route('more_news', $news->id)}}" target="_blank">
						<i class="fa fa-plus"></i>
						<span>Read More</span>
					</a>
					 
				</div>
			</div><br/>
			@endforeach
		    @endif
		</div> 
		</div>
	</div>
 </div>

@endsection

