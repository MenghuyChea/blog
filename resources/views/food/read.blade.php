@include('inc.header1')
    <div class="container" id="content">
        <legend>Read Food</legend>
        <div class="row">
            <p class="lead">Food name : {{$food->food_name}}</p>
        </div>
        <div class="row">
            <p>Price : {{$food->food_price}}$</p>
        </div>
        <div class="row">
            <p>Type : {{$food->food_type}}</p>
        </div>
        <div class="row">
            <p>Description : {{$food->description}}</p>
        </div>
    </div>
@include('inc.footer1')
