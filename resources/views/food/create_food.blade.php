@include('inc.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{url('insert')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset>
                    <legend>Create Food</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Food">Food Name</label>
                        <input type="Food" class="form-control" id="Food" name="food_name" aria-describedby="emailHelp" placeholder="Enter Food Name">
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="Price" class="form-control" id="Price" name="food_price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="Price">Type</label>
                        <select class="form-control" id="Price" name="food_type">
                            <option>breakfast</option>
                            <option>lunch</option>
                            <option>dinner</option>
                            <option>snack</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/food')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer')
