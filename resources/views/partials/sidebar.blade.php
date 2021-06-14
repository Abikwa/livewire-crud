<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #3f2e2c;">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column ">
            <li class="nav-item">

                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">
                    <span data-feather="home"></span>
                    Acceuil
                </a>
            </li>
            
             <li class="nav-item">

                <a class="nav-link {{ (request()->is('plancomptables')) ? 'active' : '' }}" href="{{ url('plancomptables') }}">
                    <span data-feather="archive"></span>
                    Plan comptable
                </a>
            </li>

        </ul>
    </div>
</nav>
