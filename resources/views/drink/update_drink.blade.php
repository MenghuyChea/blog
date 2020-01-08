@include('inc.header1')
<div class="container" id="content">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ url('/edit_drink', array($drink->id)) }}">
                {{csrf_field()}}
                <fieldset>
                    <legend>Update Drink</legend>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $errors)
                            <div class="alert alert-danger">
                                {{$errors}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="Drink">Drink Name</label>
                        <input type="Drink" class="form-control" id="Drink" name="drink_name" aria-describedby="emailHelp" placeholder="Enter Drink Name" value="{{$drink->drink_name}}">
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="Price" class="form-control" id="Price" name="drink_price" placeholder="Price" value="{{$drink->drink_price}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/drink')}}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer1')
