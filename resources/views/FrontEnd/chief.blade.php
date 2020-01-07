@include('inc.frontend_header')
    <div class="contact">
        <div class="contact-in">
            <h1>Chief</h1>
            <p><i class="fas fa-home faa-vertical animated"></i>&nbsp&nbspHome&nbsp&nbsp&nbsp/&nbsp&nbsp<i class="fas fa-cocktail faa-passing animated"></i>&nbsp&nbsp&nbspChief</p>
        </div>
    </div>
    <div class="chief">
        <br>
        <div class="container">
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[0]->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p id="text-chief">{{$chief[0]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[1]->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p id="text-chief">{{$chief[1]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[2]->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p id="text-chief">{{$chief[2]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[3]->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p id="text-chief">{{$chief[3]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[4]->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p id="text-chief">{{$chief[4]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[5]->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p id="text-chief">{{$chief[5]->name_chief}}</p>
                </div>
            </div>
        </div>
    </div>
@include('inc.frontend_footer')
