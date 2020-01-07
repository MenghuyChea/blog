@include('inc.header')
<div style="text-align: center">
        <h1>Table Food</h1>
    <a href="{{url('/create_food')}}" class="btn btn-success">+</a>
</div>
    <div class="container">
        <div class="row">
            @if(session('info'))
                <div class="col-mg-6 alert alert-success">
                    {{session('info')}}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Food Image</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($food)>0)
                    @foreach($food->all() as $food)
                        <tr class="table-active">
                            <th scope="row" style="padding-top: 45px">{{$food->id}}</th>
                            <td><img src="{{asset('uploads/food/'.$food->image)}}" height="100" width="150"></td>
                            <td style="padding-top: 45px">{{$food->food_name}}</td>
                            <td style="padding-top: 45px">{{$food->food_price}}$</td>
                            <td style="padding-top: 45px">
                                <a href='{{url("/read/{$food->id}")}}'  class="btn btn-primary">Read</a> |
                                <a href='{{url("/update/{$food->id}")}}'  class="btn btn-success">Update</a> |
                                <a href='{{url("/delete/{$food->id}")}}'  class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
<p class="totop">
    <a href="#top" class="btn btn-success">Back to top</a>
</p>

@include('inc.footer')
