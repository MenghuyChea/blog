@include('inc.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/edit_chief', array($chief->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Update Chief</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Name">Chief Name</label>
                        <input type="Name" class="form-control" id="Name" name="name_chief" aria-describedby="emailHelp" placeholder="Enter Chief Name" value="{{$chief->name_chief}}">
                    </div>
                    <div class="form-group">
                        <label for="Position">Position</label>
                        <input type="Position" class="form-control" id="Position" name="position" placeholder="Position" value="{{$chief->position}}">
                    </div>
                    <div class="form-group">
                        <label for="Salary">Salary</label>
                        <input type="Salary" class="form-control" id="Salary" name="salary" placeholder="Salary" value="{{$chief->salary}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/chief')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer')
