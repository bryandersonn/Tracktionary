<nav class="navbar navbar-expand-lg navbarcontainer sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tracktionary</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <div class="leftside">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#favsongs">Songs</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Artist</a>
                    </li> --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            <div class="middle">
                <form class="d-flex" role="search" id="searchbar" action="{{ route('search.action') }}" method="GET">
                    <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
            <div class="rightside">
                <a class="profile" href="#">Profile</a>
            </div>
        </div>
    </div>
</nav>



<script>
    document.getElementById('searchbar').addEventListener('submit', function(event) {
        this.action += '#favsongs';
    });
</script>
