<div class="sticky-header header-section ">
    <div class="header-left">

        <button id="showLeftPush"><i class="fa fa-bars"></i></button>

        <div class="logo">
            <a href="index.html">
                <h1>Gestion</h1>
                <span>convention</span>
            </a>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">
        <div class="profile_details_left">

            <ul class="nofitications-dropdown">
            </ul>
            <div class="clearfix"> </div>
        </div>

        <div class="profile_details">
		<ul>
			<li class="dropdown profile_details_drop">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<div class="profile_img">
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
					<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
					<li> <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a> </li>
				</ul>
			</li>
		</ul>
	</div>
    </div>
    <div class="clearfix"> </div>	
</div>