<div class="sticky-header header-section ">
    <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="logo">
            <a href="index.html">
                <h1>Gestion</h1>
                <span>convention</span>
            </a>
        </div>
        <!--//logo-->
        <!--search-box-->
        {{-- <div class="search-box">
            <form class="input">
                <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                <label class="input__label" for="input-31">
                    <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                    </svg>
                </label>
            </form>
        </div><!--//end-search-box--> --}}
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">
        <div class="profile_details_left">
            <!--notifications of menu start -->
            <ul class="nofitications-dropdown">
                {{-- <li class="dropdown head-dpdn">
                    <a href="#"><i class="fa fa-cog"></i> Settings</a>
                    <ul class="dropdown-menu">
                        
                            
                             
                           <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                                    <div class="clearfix"> </div>				
                       
                        
                        
                           
                    </ul>
                </li> --}}
	
                <li class="dropdown head-dpdn">
                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                    
                </li>	
            </ul>
            <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">		
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">	
                            <span class="prfil-img"><img src="images/a.png" alt=""> </span> 
                            <div class="user-name">
                                <p>Wikolia</p>
                                <span>Administrator</span>
                            </div>
                            <div class="clearfix"></div>	
                        </div>	
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"> </div>	
</div>