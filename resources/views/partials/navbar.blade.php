<nav class="main-nav">
    <div class="img-link">
        <a class="logo-link" href="/">
            <img class="navbar-logo" src="/img/logo.png" alt="CungCaiCode">
        </a>
        <ul class="navbar-link-list">
            <a class="navbar-link" href="/learn"><li>Learn</li></a>
            <a class="navbar-link" href="/courses"><li>Courses</li></a>
            <li class="nav-item dropdown navbar-link">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">
                  Laboratory
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/weblab">Web Lab</a></li>
                  <li><a class="dropdown-item" href="/codelab">Code Lab</a></li>
                </ul>
              </li>
            <a class="navbar-link" href="/forums">Forum</li></a>
        </ul>
    </div>

    <div>
        @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->username }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <a href="/register"><button class="regist-btn">Register</button></a>
            <a href="/login"><button class="login-btn">Login</button></a>
        @endauth
    </div>
</nav>