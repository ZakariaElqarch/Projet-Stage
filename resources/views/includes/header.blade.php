<div class="header-left">
	<!--toggle button start-->
	<button id="showLeftPush"><i class="fa fa-bars"></i></button>
	<!--toggle button end-->
	<!--logo -->
	<div class="logo">
		<a href="index.html">
			<h1>Gestions</h1>
			<span>Conventions</span>
		</a>
	</div>
	<!--//logo-->
</div>
<div class="header-right">

	<div class="profile_details">
		<ul>
			<li class="dropdown profile_details_drop">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<div class="profile_img">
						<span class="prfil-img"><img src="assets/images/a.png" alt=""> </span>
						<div class="user-name">
							<p>Wikolia</p>
							<span>Administrator</span>
						</div>
						<i class="fa fa-angle-down lnr"></i>
						<i class="fa fa-angle-up lnr"></i>
						<div class="clearfix"></div>
					</div>
				</a>
				<ul class="dropdown-menu drp-mnu">
					<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
					<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
					<li> <a href={{route('logout')}}><i class="fa fa-sign-out"></i> Logout</a> </li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
<div class="clearfix"> </div>