<!doctype html>
<html lang="en">
<head>
    <title>Ravo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script src="https://kit.fontawesome.com/ee7cf20964.js" crossorigin="anonymous"></script>
    <link rel="shotcut icon" href="{{url('uploads/images.png')}}">
</head>
<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url('../uploads/bk.jpg');height: 10vh;">
            <div class="user-logo">
                <a id="navbarDropdown" href="/food" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="nav-link" style="color:white;">
                    {{ Auth::user()->name }} <span></span>
                </a>
            </div>
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="{{url('/food')}}"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
            <li class="active">
                <a href="{{url('/food')}}"><span class="fas fa-utensils mr-3"></span> Food</a>
            </li>
            <li class="active">
                <a href="{{url('/drink')}}"><span class="fas fa-wine-bottle mr-3"></span> Drink</a>
            </li>
            <li class="active">
                <a href="{{url('/chief')}}"><span class="far fa-address-card mr-3"></span> Chief</a>
            </li>
            <li class="active">
                <a href="{{url('/book')}}"><span class="fas fa-book mr-3"></span> Book</a>
            </li>
            <li class="active">
                <a href="{{url('/feedback')}}"><span class="far fa-comments mr-3"></span> FeedBack</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><span class="fa fa-sign-out mr-3"></span>{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                </form>
            </li>
        </ul>

    </nav>

