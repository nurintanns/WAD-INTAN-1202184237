<nav class="navbar navbar-expand-lg navbar-light p-3">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"></div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link mr-2 {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 {{ request()->is('products') ? 'active' : '' }}" href="/products">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 {{ request()->is('order') ? 'active' : '' }}" href="/order">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 {{ request()->is('history') ? 'active' : '' }}" href="/history">History</a>
                </li>
            </ul>
        </div>
    </nav>