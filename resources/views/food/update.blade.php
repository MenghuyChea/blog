@include('inc.header1')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/edit', array($food->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Update Food</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Food">Food Name</label>
                        <input type="Food" class="form-control" id="Food" name="food_name" aria-describedby="emailHelp" placeholder="Enter Food Name" value="{{$food->food_name}}">
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="Price" class="form-control" id="Price" name="food_price" placeholder="Price" value="{{$food->food_price}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                    <a href="{{url('/food')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer1')
