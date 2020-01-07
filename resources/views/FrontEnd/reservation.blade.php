@include('inc.frontend_header')
    <div class="contact">
        <div class="contact-in">
            <h1>Reservation</h1>
            <p><i class="fas fa-home faa-vertical animated"></i>&nbsp&nbspHome&nbsp&nbsp&nbsp/&nbsp&nbsp<i class="far fa-address-book faa-tada animated"></i>&nbsp&nbsp&nbspReservation</p>
        </div>
    </div>
    <div class="reservation">
        <br>
        <h1>RESERVATION</h1>
        <br>
        <hr style="width: 20vw;color: #ba8b00">
        <br><br>
        <div class="container" id="con">
            <form method="POST" action="{{url('booktable')}}">
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
                    <div class="form-group" id="reservation-box">
                        <input type="Name" class="form-control" id="Name" name="name_book" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group" id="reservation-box">
                        <input type="Email" class="form-control" id="Email" name="email_book" placeholder="Enter Email">
                    </div>
                    <div class="form-group" id="reservation-box">
                        <input type="NumberPhone" class="form-control" id="NumberPhone" name="numberphone_book" placeholder="(+855)">
                    </div>
                    <div class="form-group" id="reservation-box">
                        <select class="form-control" id="exampleSelect1" name="people_book">
                            <option>1 Person</option>
                            <option>2 People</option>
                            <option>3 People</option>
                            <option>4 People</option>
                            <option>5 People</option>
                        </select>
                    </div>
                    <div class="form-group" id="reservation-box">
                        <input type="Date" class="form-control" id="Date" name="date_book" placeholder="Enter Date">
                    </div>
                    <div class="form-group" id="reservation-box">
                        <select class="form-control" id="exampleSelect1" name="time_book">
                            <option>7:00 AM</option>
                            <option>8:00 AM</option>
                            <option>9:00 AM</option>
                            <option>10:00 AM</option>
                            <option>11:00 AM</option>
                            <option>12:00 PM</option>
                            <option>1:00 PM</option>
                            <option>2:00 PM</option>
                            <option>3:00 PM</option>
                            <option>5:00 PM</option>
                            <option>6:00 PM</option>
                            <option>7:00 PM</option>
                            <option>8:00 PM</option>
                            <option>9:00 PM</option>
                            <option>10:00 PM</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-send">BOOK A TABLE</button>
                </fieldset>
            </form>
        </div>
    </div>
@include('inc.frontend_footer')
