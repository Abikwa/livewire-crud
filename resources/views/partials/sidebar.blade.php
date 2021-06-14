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
                <a class="nav-link {{ (request()->is('products'))  ? 'active' : '' }}" data-toggle="collapse" href="#collapseStudent" role="button" aria-expanded="false"
                    aria-controls="collapseStudent">
                    <span data-feather="briefcase"></span>
                    Product
                </a>
                <div class="collapse" id="collapseStudent">
                    <div class="card card-body bg-secondary">
                        <a class="nav-link" href="{{ url('products') }}">
                            <span class="fas fa-plus"></span>
                            Product
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ (request()->is('chats')) ? 'active' : '' }}" href="{{ url('chats') }}">
                    <span data-feather="archive"></span>
                    Chat
                </a>
            </li>

        </ul>
    </div>
</nav>
