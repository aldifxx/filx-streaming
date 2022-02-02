<!--Awak Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #0A0A0A;" ">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.html">
            <img src="{{ url('frontend/images/logo.png') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/app"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/movies"><img class="logo-nav" src="{{ url('frontend/images/bx_bxs-tv.png') }}"  alt=""> Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/upcoming"><i class="fas fa-calendar-week"></i> Upcoming</a>
          </li>
          <li class="nav-item-1">
            <form action="/search" method="GET">
              <img src="{{ url('frontend/images/search.png') }} " alt="..." style="height: 20px;">
              <input type="text" name="search" className="search-box rounded-sm" 
              placeholder="What are you Looking for?"></input>
            </form>
        </li>
        </ul>
        <ul class="akun">
            <li class="nav-user online py-4" style="list-style-type: none;">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" style="border:none;background:none;color:white">Logout</button>
            </form>
            </li>
        </ul>
      </div>
    </div>
  </nav>
