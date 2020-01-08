@include('inc.header1')
<div style="text-align: center;width: 100%;" id="content">
    <h1>Table Drink</h1>
    <a href="{{url('/create_drink')}}" class="btn btn-success">Insert</a>
    <div class="container">
        <div class="row">
            @if(session('info1'))
                <div class="col-mg-6 alert alert-success">
                    {{session('info1')}}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Drirnk Image</th>
                    <th scope="col">Drink Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($drink)>0)
                    @foreach($drink->all() as $drink)
                        <tr class="table-active">
                            <th scope="row" style="padding-top: 45px">{{$drink->id}}</th>
                            <td><img src="{{asset('uploads/drink/'.$drink->image)}}" height="100" width="150"></td>
                            <td style="padding-top: 45px">{{$drink->drink_name}}</td>
                            <td style="padding-top: 45px">{{$drink->drink_price}}$</td>
                            <td style="padding-top: 45px">
                                <a href='{{url("/read_drink/{$drink->id}")}}'  class="btn btn-primary">Read</a> |
                                <a href='{{url("/update_drink/{$drink->id}")}}'  class="btn btn-success">Update</a> |
                                <a href='{{url("/delete_drink/{$drink->id}")}}'  class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <p class="totop">
                <a href="#top" class="btn btn-success">Back to top</a>
            </p>
        </div>
    </div>
</div>
@include('inc.footer1')
