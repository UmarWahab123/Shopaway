<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">    
	<div class="navbar-container d-flex content">        
		<div class="bookmark-wrapper d-flex align-items-center">            
			<ul class="nav navbar-nav d-xl-none">                
				<li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>            
			</ul>            
			<ul class="nav navbar-nav bookmark-icons">                
				<li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('admin/users')}}" data-toggle="tooltip" data-placement="top" title="Users"><i class="ficon" data-feather="users"></i></a></li>                
				<li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('admin/order') }}" data-toggle="tooltip" data-placement="top" title="Orders"><i class="ficon" data-feather="square"></i></a></li>                
				<li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url('admin/descriptions') }}" data-toggle="tooltip" data-placement="top" title="Terms"><i class="ficon" data-feather="folder"></i></a></li>                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('admin/settings')}}" data-toggle="tooltip" data-placement="top" title="Settings"><i class="ficon" data-feather="settings"></i></a></li>            
			</ul>            
			<ul class="nav navbar-nav">                
				<li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>                    
					<div class="bookmark-input search-input">                        
						<div class="bookmark-input-icon">
							<i data-feather="search"></i>
						</div>                        
						<input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">                        
						<ul class="search-list search-list-bookmark"></ul>                    
					</div>                
				</li>            
			</ul>        
		</div>        
		<ul class="nav navbar-nav align-items-center ml-auto">            
			<li class="nav-item d-none d-lg-block setmode"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>             
			<li class="nav-item dropdown dropdown-user">
				<a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    
					<div class="user-nav d-sm-flex d-none">
						<span class="user-name font-weight-bolder">{{Auth::user()->name}}</span><span class="user-status">{{Auth::user()->role->role_title}}</span>
					</div>
					<span class="avatar">
						<img class="round" src="{{url('/')}}{{Auth::user()->dp}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span>
					</span>                
				</a>                
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
					<a class="dropdown-item" href="{{url('admin/home')}}"><i class="mr-50"data-feather="user"></i> Dashboard</a>                    
					<a class="dropdown-item" href="{{url('admin/settings')}}"><i class="mr-50" data-feather="settings"></i> Settings</a>                    
					<a class="dropdown-item logout" href="{{url('admin/adminlogout')}}"><i class="mr-50" data-feather="power"></i> Logout</a>                
				</div>            
			</li>        
		</ul>    
	</div>
</nav>