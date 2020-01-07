@include('inc.frontend_header')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('uploads/2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s;">Welcome to RAVO</h5>
                    <p class="animated bounceInRight" style="animation-delay: 2s;">One Of The Best Restaurant.We serve a good food here.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s;"><a href="" style="text-decoration: none;">More Info</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('uploads/1.jpeg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated slideInDown" style="animation-delay: 1s;">Welcome to RAVO</h5>
                    <p class="animated fadeInUp" style="animation-delay: 2s;">One Of The Best Restaurant.We serve a good food here.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s;"><a href="" style="text-decoration: none;">More Info</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('uploads/3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated zoomIn" style="animation-delay: 1s;">Welcome to RAVO</h5>
                    <p class="animated bounceInLeft" style="animation-delay: 2s;">One Of The Best Restaurant.We serve a good food here.</p>
                    <p class="animated zoomIn" style="animation-delay: 3s;"><a href="" style="text-decoration: none;">More Info</a></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section>
        <div class="main-first">
            <div class="main-first-session">
                <img src="{{url('uploads/chief/1.jpg')}}" id="img-dis" style="margin-top: 30px;">
            </div>
            <div class="main-first-session" style="position: relative;top:15%;">
                <div class="container" id="text1">
                    <br><h1>Discover Our Story</h1><br><br>
                    <p>In the 1950s, all that stood in this iconic location was a car park with a<br>
                    small kiosk. Even then it was the best spot for uninterrupted panoramic<br>
                    views of Adelaide, with the address a tourist destination in itself. In<br>
                    October 1985, RavoRes as we know it today opened.</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum <br>lectus
                    ut ligula fringilla, eu euismod turpis pulvinar. Vestibulum eget urna ac
                    dolor consequat aliquam.</p>
                </div>
            </div>
            <div class="main-first-session">
                <img src="https://www.freepik.com/blog/app/uploads/2018/05/chef-making-ok-sign-over-white-background_1368-2804.jpg" id="img-dis">
            </div>
        </div>
        <div class="main-second">
            <div class="center-img">
                <h1>Daily Specials & Features</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum lectus ut ligula fringilla,<br>
                    eu euismod turpis pulvinar. Vestibulum eget urna ac dolor consequat aliquam.</p>
            </div>
            <div class="container">
                <div class="main-second-session" id="buger">
                    <i class="fas fa-hamburger faa-float animated" style="color:white;font-size: 3vw;"></i>
                    <br>
                    <br>
                    <h4>Burger / Sandwich</h4>
                    <p>Lorem ipsum dolor sit amet, con<br>
                        sectetur adipiscing elit. Suspen <br>disse vitae ligula quis deserunt .</p>
                </div>
                <div class="main-second-session">
                    <i class="fas fa-beer faa-float animated" style="color:white;font-size: 3vw;"></i>
                    <br>
                    <br>
                    <h4>Drink / Beer</h4>
                    <p>Lorem ipsum dolor sit amet, con<br>
                        sectetur adipiscing elit. Suspen <br>disse vitae ligula quis deserunt .</p>
                </div>
                <div class="main-second-session">
                    <i class="fas fa-birthday-cake faa-float animated" style="color:white;font-size: 3vw;"></i>
                    <br>
                    <br>
                    <h4>Cake Slices</h4>
                    <p>Lorem ipsum dolor sit amet, con<br>
                        sectetur adipiscing elit. Suspen <br>disse vitae ligula quis deserunt .</p>
                </div>
                <div class="main-second-session">
                    <i class="fas fa-hotdog faa-float animated" style="color:white;font-size: 3vw;"></i>
                    <br>
                    <br>
                    <h4>Hot Dog</h4>
                    <p>Lorem ipsum dolor sit amet, con<br>
                        sectetur adipiscing elit. Suspen <br>disse vitae ligula quis deserunt .</p>
                </div>
            </div>
            <a href="" class="main-second-btn">VIEW ALL OFFERS</a>
        </div>
        <div class="main-third">
            <h1>Restaurant Menu</h1>
            <div class="container">
                <ul class="nav" id="menu2">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Breakfast">Breakfast&nbsp&nbsp&nbsp|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Lunch">Lunch&nbsp&nbsp&nbsp|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Dinner">Dinner&nbsp&nbsp&nbsp|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Snack">Snack&nbsp&nbsp&nbsp|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Drinks">Drinks</a>
                    </li>
                </ul>
            </div>
            <div class="container" id="container-menu">
                <div class="tab-content">
                    <div id="Breakfast" class="tab-pane in active">
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[0]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[0]->food_name}}</span>
                                <span id="span1">{{$food[0]->food_price}}$</span>
                                <span id="des">{{$food[0]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[1]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[1]->food_name}}</span>
                                <span id="span1">{{$food[1]->food_price}}$</span>
                                <span id="des">{{$food[1]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[2]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[2]->food_name}}</span>
                                <span id="span1">{{$food[2]->food_price}}$</span>
                                <span id="des">{{$food[2]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[3]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[3]->food_name}}</span>
                                <span id="span1">{{$food[3]->food_price}}$</span>
                                <span id="des">{{$food[3]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[4]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[4]->food_name}}</span>
                                <span id="span1">{{$food[4]->food_price}}$</span>
                                <span id="des">{{$food[4]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[5]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[5]->food_name}}</span>
                                <span id="span1">{{$food[5]->food_price}}$</span>
                                <span id="des">{{$food[5]->description}}</span>
                            </div>
                        </div>
                    </div>
                    <div id="Lunch" class="tab-pane" >
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[8]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[8]->food_name}}</span>
                                <span id="span1">{{$food[8]->food_price}}$</span>
                                <span id="des">{{$food[8]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[9]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[9]->food_name}}</span>
                                <span id="span1">{{$food[9]->food_price}}$</span>
                                <span id="des">{{$food[9]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[10]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[10]->food_name}}</span>
                                <span id="span1">{{$food[10]->food_price}}$</span>
                                <span id="des">{{$food[10]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[11]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[11]->food_name}}</span>
                                <span id="span1">{{$food[11]->food_price}}$</span>
                                <span id="des">{{$food[11]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[12]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[12]->food_name}}</span>
                                <span id="span1">{{$food[12]->food_price}}$</span>
                                <span id="des">{{$food[12]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[13]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[13]->food_name}}</span>
                                <span id="span1">{{$food[13]->food_price}}$</span>
                                <span id="des">{{$food[13]->description}}</span>
                            </div>
                        </div>
                    </div>
                    <div id="Dinner" class="tab-pane" >
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[16]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[16]->food_name}}</span>
                                <span id="span1">{{$food[16]->food_price}}$</span>
                                <span id="des">{{$food[16]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[17]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[17]->food_name}}</span>
                                <span id="span1">{{$food[17]->food_price}}$</span>
                                <span id="des">{{$food[17]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[18]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[18]->food_name}}</span>
                                <span id="span1">{{$food[18]->food_price}}$</span>
                                <span id="des">{{$food[18]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[19]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[19]->food_name}}</span>
                                <span id="span1">{{$food[19]->food_price}}$</span>
                                <span id="des">{{$food[19]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[20]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[20]->food_name}}</span>
                                <span id="span1">{{$food[20]->food_price}}$</span>
                                <span id="des">{{$food[20]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[21]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[21]->food_name}}</span>
                                <span id="span1">{{$food[21]->food_price}}$</span>
                                <span id="des">{{$food[21]->description}}</span>
                            </div>
                        </div>
                    </div>
                    <div id="Snack" class="tab-pane" >
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[24]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[24]->food_name}}</span>
                                <span id="span1">{{$food[24]->food_price}}$</span>
                                <span id="des">{{$food[24]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[25]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[25]->food_name}}</span>
                                <span id="span1">{{$food[25]->food_price}}$</span>
                                <span id="des">{{$food[25]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[26]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[26]->food_name}}</span>
                                <span id="span1">{{$food[26]->food_price}}$</span>
                                <span id="des">{{$food[26]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[27]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[27]->food_name}}</span>
                                <span id="span1">{{$food[27]->food_price}}$</span>
                                <span id="des">{{$food[27]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[28]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[28]->food_name}}</span>
                                <span id="span1">{{$food[28]->food_price}}$</span>
                                <span id="des">{{$food[28]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/food/'.$food[29]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$food[29]->food_name}}</span>
                                <span id="span1">{{$food[29]->food_price}}$</span>
                                <span id="des">{{$food[29]->description}}</span>
                            </div>
                        </div>
                    </div>
                    <div id="Drinks" class="tab-pane" >
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[0]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$drink[0]->drink_name}}</span>
                                <span id="span1">{{$drink[0]->drink_price}}$</span>
                                <span id="des">{{$drink[0]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[1]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$drink[1]->drink_name}}</span>
                                <span id="span1">{{$drink[1]->drink_price}}$</span>
                                <span id="des">{{$drink[1]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[2]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$drink[2]->drink_name}}</span>
                                <span id="span1">{{$drink[2]->drink_price}}$</span>
                                <span id="des">{{$drink[2]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[3]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$drink[3]->drink_name}}</span>
                                <span id="span1">{{$drink[3]->drink_price}}$</span>
                                <span id="des">{{$drink[3]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[4]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$drink[4]->drink_name}}</span>
                                <span id="span1">{{$drink[4]->drink_price}}$</span>
                                <span id="des">{{$drink[4]->description}}</span>
                            </div>
                        </div>
                        <div class="card" id="card-card">
                            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[5]->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="card-text" id="p1">{{$drink[5]->drink_name}}</span>
                                <span id="span1">{{$drink[5]->drink_price}}$</span>
                                <span id="des">{{$drink[5]->description}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('inc.frontend_footer')



