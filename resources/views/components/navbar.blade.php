<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand ms-3" href="/">
        <img src="{{asset('Assets/logo.png')}}" alt="" width="140px" height="80px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto mt-3 mb-3 fw-bolder fs-5" style="gap: 30px; margin-right: 7rem">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('category', ['id'=> 'Data Science'])}}">Data Science</a></li>
              <li><a class="dropdown-item" href="{{route('category', ['id'=> 'Network Technology'])}}">Network Technology</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('writer')}}">Writers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('about')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Popular</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>