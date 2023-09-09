<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="{{ asset('assets\css\style\style.css')}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="{{ url('/admin/index') }}">Book Flow</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @auth('admin')
      <div class="collapse navbar-collapse" id="navbarText">
         <ul class="navbar-nav side-nav" >
          <li class="nav-item">
            <a class="nav-link @yield('index')" style="margin-left: 20px;" href="{{ url('/admin/index') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('admins')" href="{{ route('alladmins') }}" style="margin-left: 20px;">Admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('users')" href="{{ route('allusers') }}" style="margin-left: 20px;">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('allboks')" href="{{ route('allboks') }}" style="margin-left: 20px;">Avilable Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @yield('borrow')" href="{{ route('borrowedbookss') }}" style="margin-left: 20px;">Borrowed Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @yield('adminprofile')" href="{{ route('adminprofile',Auth::guard('admin')->user()->id) }}" style="margin-left: 20px;">My Profile</a>
          </li>
          @endauth
        </ul>  
        <ul class="navbar-nav ml-md-auto d-md-flex">
            @auth("admin")
          <li class="nav-item">
            <a class="nav-link"href="{{ url('/admin/index') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             {{ Auth::guard('admin')->user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="#">Login As Admin
            </a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
    </nav>
    <div class="container-fluid">


        <main class="py-4">
            @yield('content')
        </main>
      </div>
    </div>
  </div>
<script type="text/javascript">
</script>
</body>
</html>
