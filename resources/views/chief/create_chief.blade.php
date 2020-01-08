@include('inc.header1')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{url('insert_chief')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset>
                    <legend>Create Chief</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Name">Chief Name</label>
                        <input type="Name" class="form-control" id="Name" name="name_chief" aria-describedby="emailHelp" placeholder="Enter Chief Name">
                    </div>
                    <div class="form-group">
                        <label for="Position">Position</label>
                        <input type="Position" class="form-control" id="Position" name="position" placeholder="Position">
                    </div>
                    <div class="form-group">
                        <label for="Salary">Salary</label>
                        <input type="Salary" class="form-control" id="Salary" name="salary" placeholder="Salary">
                    </div>
                    <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="Date" class="form-control" id="Date" name="hire_date" placeholder="Enter Date">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/chief')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer1')
