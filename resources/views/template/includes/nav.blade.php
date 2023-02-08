<div class=" sidebar" role="navigation">
    <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ route('index') }}" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
                </li>
                
                <li >
                    <a href="#">
                        <i class="fa fa-file-text-o nav_icon"></i>Pages</a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{ route('convention') }}">Ajouter une Convention</a>
                        </li>
                        <li>
                            <a href="{{ route('project') }}">Ajouter un Projet</a>
                        </li>
                        <li>
                            <a href="{{ route('Devision') }}">Ajouter une Devision</a>
                        </li>
                        <li>
                            <a href="{{ route('Service') }}">Ajouter un Service</a>
                        </li>
                        <li>
                            <a href="{{ route('index-convention') }}">lister Tous les conventions</a>
                        </li>
                        <li>
                            <a href="{{ route('index-projet') }}">lister Tous projets</a>
                        </li>
                        <li>
                            <a href="{{ route('index-service') }}">lister Tous les Services</a>
                        </li>
                      
                    </ul>
                    <!-- //nav-second-level -->
                </li>
               
            </ul>
            <!-- //sidebar-collapse -->
        </nav>
    </div>
</div>