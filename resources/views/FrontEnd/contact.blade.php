@include('inc.frontend_header')
    <div class="contact">
        <div class="contact-in">
            <h1>Contact</h1>
            <p><i class="fas fa-home faa-vertical animated"></i>&nbsp&nbspHome&nbsp&nbsp&nbsp/&nbsp&nbsp<i class="fas fa-phone-alt faa-ring animated"></i>&nbsp&nbsp&nbspContact</p>
        </div>
    </div>
    <div class="form-part">
        <div class="container">
            <div class="form">
                <form method="POST" action="{{url('add_feedback')}}">
                    {{csrf_field()}}
                    <fieldset>
                        @if(count($errors)>0)
                            @foreach($errors->all() as $errors)
                                <div class="alert alert-danger">
                                    {{$errors}}
                                </div>
                            @endforeach
                        @endif
                            @if(session('info1'))
                                <div class="col-mg-6 alert alert-success">
                                    {{session('info1')}}
                                </div>
                            @endif
                        <legend>Send Us an Email</legend>
                        <div class="form-group row" id="p-text">
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. <br> Suspen disse vitae ligula quis deserunt .</p>
                        </div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="Name" class="form-control" id="Name" name="feedback_name" aria-describedby="emailHelp" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="Email" class="form-control" id="Email" name="feedback_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btn-send">SEND US</button>
                    </fieldset>
                </form>
            </div>
            <div id="map"></div>
        </div>
    </div>
    <div class="time-open-main">
        <div class="container">
            <div class="time-open">
                <br>
                <h2>Open Time</h2><br>
                <span style="float:left;margin-left:18%;">Mon : 11 am-3 pm</span>
                <span style="float:right;margin-right:18%;">Tue : 11 am-3 pm</span><br><br>
                <span style="float:left;margin-left:18%;">Wed : 11 am-3 pm</span>
                <span style="float:right;margin-right:18%;">Thu : 11 am-3 pm</span><br><br>
                <span style="float:left;margin-left:18%;">Fri : 11 am-3 pm</span>
                <span style="float:right;margin-right:18%;">Sat : 11 am-3 pm</span><br><br>
                <span>Sun : 11 am-3 pm</span>
            </div>
            <div class="contact-near">
                <br>
                <h2>Contact Us</h2><br>
                <span style="float:left;margin-left:10%;"><i class="fas fa-map-marker-alt"></i> LOCATION:</span>
                <span style="float:right;margin-right:29%;"><i class="far fa-envelope"></i> EMAIL:</span><br>
                <span style="float:left;margin-left:10%;">No. 120 E 4th Ave, USA</span>
                <span style="float:right;margin-right:10%;">reservation@ravores.com</span><br><br>
                <span style="float:left;margin-left:10%;"><i class="fas fa-phone-alt"></i> PHONE:</span>
                <span style="float:right;margin-right:22%;"><i class="fas fa-angle-double-right"></i> FOLLOW ON:</span><br>
                <span style="float:left;margin-left:10%;">1234 567 789</span>
                <span style="float:right;margin-right:18%;">
                    <a href="" style="text-decoration: none;color:#a88b00;"><i class="fab fa-facebook-square" id="icon"></i></a>
                    <a href="" style="text-decoration: none;color:#a88b00;"><i class="fab fa-twitter-square" id="icon" style="padding-left: 20px;"></i></a>
                    <a href="" style="text-decoration: none;color:#a88b00;"><i class="fab fa-instagram" id="icon" style="padding-left: 20px;"></i></a>
                    <a href="" style="text-decoration: none;color:#a88b00;"><i class="fab fa-youtube" id="icon" style="padding-left: 20px;"></i></a>
                </span><br><br>
            </div>
        </div>
    </div>
    <div class="our-team">
        <br>
        <h1>OUR TEAM</h1>
        <div class="container">
            <div class="card" id="our-card" style="margin-top: 2%;">
                <img class="card-img-top" src="{{url('uploads/huy.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <p style="float:left;"><i class="fas fa-user faa-float animated"></i> : Chea Menghuy</p>
                    <p style="float:left;"><i class="far fa-envelope faa-shake animated"></i> : cheamenghuysnsd@gmail.com</p>
                    <p style="float:left;"><i class="fas fa-phone-alt faa-ring animated"></i>  : (+855)98729080</p>
                </div>
            </div>
            <div class="card" id="our-card" style="margin-top: 2%;">
                <img class="card-img-top" src="{{url('uploads/sreytoch.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <p style="float:left;"><i class="fas fa-user faa-float animated"></i> : Chheun Chansreytoch</p>
                    <p style="float:left;"><i class="far fa-envelope faa-shake animated"></i> : chheunchansreytoch@gmail.com</p>
                    <p style="float:left;"><i class="fas fa-phone-alt faa-ring animated"></i>  : (+855)86262408</p>
                </div>
            </div>
            <div class="card" id="our-card" style="margin-top: 2%;">
                <img class="card-img-top" src="{{url('uploads/rithiya.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <p style="float:left;"><i class="fas fa-user faa-float animated"></i> : Chhay Chanrithiya</p>
                    <p style="float:left;"><i class="far fa-envelope faa-shake animated"></i> : chhoychanrithiya9848@gmail.com</p>
                    <p style="float:left;"><i class="fas fa-phone-alt faa-ring animated"></i>  : (+855)966432566</p>
                </div>
            </div>
        </div>
    </div>
<script>
    function initMap() {
        var location = {lat: 11.561832, lng: 104.892391};
        var map = new google.maps.Map(document.getElementById("map"),{
            zoom:15,
            center:location
        });
        var marker = new google.maps.Marker({
            position:location,
            map:map
        })
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ8beVuEB5jB1dHduwQ8bB6u-0iqsxJZk&callback=initMap">
</script>
@include('inc.frontend_footer')

