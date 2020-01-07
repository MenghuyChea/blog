@include('inc.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/edit_book', array($book->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Update Book</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="Name" class="form-control" id="Name" name="name_book" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$book->name_book}}">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" class="form-control" id="Email" name="email_book" placeholder="Enter Email" value="{{$book->email_book}}">
                    </div>
                    <div class="form-group">
                        <label for="NumberPhone">NumberPhone</label>
                        <input type="NumberPhone" class="form-control" id="NumberPhone" name="numberphone_book" placeholder="Enter Number Phone" value="{{$book->numberphone_book}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Example select</label>
                        <select class="form-control" id="exampleSelect1" name="people_book">
                            <option>1 Person</option>
                            <option>2 People</option>
                            <option>3 People</option>
                            <option>4 People</option>
                            <option>5 People</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="Date" class="form-control" id="Date" name="date_book" placeholder="Enter Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Example select</label>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/book')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer')
