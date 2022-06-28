<div class="col-2 h_100 bg_grey">
            <h5 class="p-4 my-3 text-light">Esplora tutte le funzionalità</h5>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                    </a>
                </li>
                <!-- /Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.posts.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Posts
                    </a>
                </li>
                <!-- /Posts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.categories.index') }}">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Categories
                    </a>
                </li>
                <!-- /Categories -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Tags
                    </a>
                </li>
                <!-- /Tags -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Users
                    </a>
                </li>
                <!-- /User -->
            </ul>
        </div>