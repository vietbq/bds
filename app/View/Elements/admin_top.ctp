<!-- start: Header -->
<header class="navbar" style="border-radius: 0px;">
	<div class="container">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		</button>
		<a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i></a>		
			<a class="navbar-brand col-lg-2 col-sm-1 col-xs-12" href="./"><span>BDS</span></a>
		<!-- start: Header Menu -->
		<div class="nav-no-collapse header-nav">
			<ul class="nav navbar-nav pull-right">
				<li>
					<a class="btn" href="typography.html#">
						<i class="fa fa-wrench"></i>
					</a>
				</li>
				<!-- start: User Dropdown -->
				<li class="dropdown">
					<a class="btn account dropdown-toggle" data-toggle="dropdown" href="typography.html#">
						<div class="user">
							<span class="hello">Welcome!</span>
							<span class="name"><?php //echo AuthComponent::user('username') ?></span>
						</div>
					</a>
					<ul class="dropdown-menu pull-right">
						<li><a href="typography.html#"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="typography.html#"><i class="fa fa-cog"></i> Settings</a></li>
						<li><a href="typography.html#"><i class="fa fa-envelope"></i> Messages</a></li>
						<li><a href="auth/logout"><i class="fa  fa-power-off"></i> Logout</a></li>
					</ul>
				</li>
				<!-- end: User Dropdown -->
			</ul>
		</div>
		<!-- end: Header Menu -->
	</div>	
</header>
<!-- end: Header -->