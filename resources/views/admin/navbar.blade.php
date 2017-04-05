<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="{{route('superadmin_dash')}}">
						<i class="pe-7s-plus"></i>
						<p>All Agents</p>
					</a>
				</li>
		
			</ul>
			
			<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="{{route('all_companies')}}">
						<i class="pe-7s-plus"></i>
						<p>All Companies</p>
					</a>
				</li>
		
			</ul>
			
			<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="{{route('all_farmers')}}">
						<i class="pe-7s-plus"></i>
						<p>All Farmers</p>
					</a>
				</li>
		
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-with-icons">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-list"></i>
						<p class="hidden-md hidden-lg">
							More
							<b class="caret"></b>
						</p>
					</a>
						<li>
							<a href="{{ route('logout') }}" class="text-danger">
								<i class="pe-7s-close-circle"></i>
								Log out
							</a>
						</li>
				</li>
			</ul>
		</div>
	</div>
</nav>