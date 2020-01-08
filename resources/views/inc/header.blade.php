<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{url('/food')}}">BackEndAPI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/food')}}">Food<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/drink')}}">Drink</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/chief')}}">Chief</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/book')}}">Book</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/feedback')}}">FeedBack</a>
            </li>
        </ul>

            <a id="navbarDropdown" href="/food" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="nav-link" style="color:white;">
                {{ Auth::user()->name }} <span></span>
            </a>
            <a class="btn btn-success" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
            </form>
    </div>
</nav>

