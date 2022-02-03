<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #1b0266 ;">
    {{-- #0a121a --}}
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
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('products'))  ? 'active' : '' }}" href="/products">
                    <span data-feather="briefcase"></span>
                    Product
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ (request()->is('equilibrecomptables')) ? 'active' : '' }}" href="{{ url('equilibrecomptables') }}">
                    <span data-feather="activity"></span>
                    equilibrer la piece
                </a>
            </li>

        </ul>
    </div>
</nav>
