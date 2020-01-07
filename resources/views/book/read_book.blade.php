@include('inc.header')
<div class="container">
    <legend>Read Book</legend>
    <div class="row">
        <p class="lead">Name : {{$book->name_book}}</p>
    </div>
    <div class="row">
        <p>Email : {{$book->email_book}}</p>
    </div>
    <div class="row">
        <p>Number Phone : {{$book->numberphone_book}}</p>
    </div>
    <div class="row">
        <p>Count People : {{$book->people_book}}</p>
    </div>
    <div class="row">
        <p>Date: {{$book->date_book}}</p>
    </div>
    <div class="row">
        <p>Time : {{$book->time_book}}</p>
    </div>
</div>
@include('inc.footer')
