@include('inc.header1')
<div style="text-align: center;width: 100%;" id="content">
    <h1>Table Book</h1>
    <a href="{{url('/create_book')}}" class="btn btn-success">Insert</a>
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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($book)>0)
                    @foreach($book->all() as $book)
                        <tr class="table-active">
                            <th scope="row">{{$book->id}}</th>
                            <th>{{$book->name_book}}</th>
                            <th>{{$book->email_book}}</th>
                            <th>{{$book->numberphone_book}}</th>
                            <td>
                                <a href='{{url("/read_book/{$book->id}")}}'  class="btn btn-primary">Read</a> |
                                <a href='{{url("/update_book/{$book->id}")}}'  class="btn btn-success">Update</a> |
                                <a href='{{url("/delete_book/{$book->id}")}}'  class="btn btn-danger">Delete</a>
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
