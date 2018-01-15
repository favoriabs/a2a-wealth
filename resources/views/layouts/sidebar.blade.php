<div class="sidebar" data-color="dark-green" data-image="assets/img/full-screen-image-3.jpg">
        
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    
    <div class="logo">
        <a href="#" class="logo-text">
            A2A WEALTH
        </a>
    </div>
	<div class="logo logo-mini">
		<a href="#" class="logo-text">
			Ct
		</a>
	</div>

	<div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="../assets/img/A2A.png" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    @if(session('currentUser') == null)
                        <script>
                            window.location.href = '{{route("logout")}}'; //using a named route
                        </script>
                    @else
                        {{ session('currentUser')->first_name }} {{ session('currentUser')->last_name }}
                    @endif
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="{{route('settings')}}">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
        @if(session('currentUserRole') == 'superadmin')
			<ul class="nav">
                <li class="@yield('superadmin_active')">
                    <a href="{{ route('superadmin_dash') }}">
                        <i class="pe-7s-browser"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="@yield('create_company_active')">
                    <a href="{{ route('create_company') }}">
                        <i class="pe-7s-id"></i>
                        <p>Create Company</p>
                    </a>
                </li>
                
                <li class="@yield('create_agent_active')">
                    <a href="{{ route('create_agent') }}">
                        <i class="pe-7s-folder"></i>
                        <p>Create Agent</p>
                    </a>
                </li>
                
                 <li class="@yield('create_news')">
                    <a href="{{ route('create_news') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Create News</p>
                    </a>
                </li>

            </ul>
		@endif
		
		<!--@if(session('currentUserRole') == 'cooperative_admin')
			<ul class="nav">
                <li class="@yield('dashboard_active')">
                    <a href="{{ route('cooperative_index') }}">
                        <i class="pe-7s-browser"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
    
                <li class="@yield('create_active')">
                    <a href="{{ route('create_farmer') }}">
                        <i class="pe-7s-users"></i>
                        <p>Create Farmer</p>
                    </a>
                </li>
                
            </ul>
		@endif-->
		
		@if(session('currentUserRole') == 'farmer')
			<ul class="nav">
			    <li class="@yield('farmer_dashboard_active')">
                    <a href="{{ route('farmer_dashboard') }}">
                        <i class="pe-7s-browser"></i>
                        <p>Farmer Dashboard</p>
                    </a>
                </li>
			    <li class="@yield('registration_active')">
                    <a href="{{ route('farmer_registration') }}">
                        <i class="pe-7s-notebook"></i>
                        <p>Farmer Registration</p>
                    </a>
                </li>
                
                <li class="@yield('product_active')">
                    <a href="{{ route('create_product') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Add Products</p>
                    </a>
                </li>
            </ul>
		@endif
		
		@if(session('currentUserRole') == 'company')
			<ul class="nav">
			    <li class="@yield('dashboard_active')">
                    <a href="#">
                        <i class="pe-7s-notebook"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li class="@yield('register_company_active')">
                    <a href="{{ route('register_company') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Register Company</p>
                    </a>
                </li>
            </ul>
		@endif
		
		@if(session('currentUserRole') == 'agent_admin')
			<ul class="nav">
			    <li>
                    <a href="#">
                        <i class="pe-7s-notebook"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li class="@yield('create_farmer_active')">
                    <a href="{{ route('create_farmer') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Register Farmer</p>
                    </a>
                </li>
            </ul>
		@endif
	</div>
</div>