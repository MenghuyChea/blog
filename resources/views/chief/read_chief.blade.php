@include('inc.header1')
<div class="container" id="content">
    <legend>Read Chief</legend>
    <div class="row">
        <p class="lead">Name : {{$chief->name_chief}}</p>
    </div>
    <div class="row">
        <p>Position : {{$chief->position}}</p>
    </div>
    <div class="row">
        <p>Salary : {{$chief->salary}}$</p>
    </div>
    <div class="row">
        <p>Hire Date : {{$chief->hire_date}}</p>
    </div>
</div>
@include('inc.footer1')
