<nav class="navbar navbar-expand-md user-select-none">
    <div class="container">
        <h1>
            UC SHOWROOM
        </h1>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav nav-pills mr-auto">
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_home ?? '' }}" aria-current="page" href="/">Customer<i class="fa-solid fa-house fa-fade ms-1"></i></a>
                </li>
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_order ?? '' }}" href="/vehicle">Vehicle<i class="fa-solid fa-cart-shopping fa-fade ms-1"></i></a>
                </li>
                <li class="nav-item" style="margin:5px">
                    <a class="nav-link {{ $active_customer ?? '' }}" href="/order">Order<i class="fa-solid fa-person fa-fade ms-1"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>