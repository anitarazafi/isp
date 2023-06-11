<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">ISP - Home page</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{getUserImage()}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin/profile" class="d-block">{{Auth::user()->first_name. " " .Auth::user()->last_name}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="nav-link">
                                <button type="submit" class="btn btn-danger btn-block">Logout</button>
                        </div>
                    </form>
                </li>
                @if(Auth::user()->role_id === 0)
                    <h4 class="text-success">Admin zone:</h4>
                    <li class="nav-item">
                        <a href="/admin/programs" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Programs
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/contact-messages" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Messages
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/posts" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Posts
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/questions" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Questions
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/answers" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Answers
                            </p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
