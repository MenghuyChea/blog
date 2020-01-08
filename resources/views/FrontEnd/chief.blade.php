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
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[0]->image)}}" alt="{{$chief[0]->name_chief}}" id="myImg">
                <div class="card-body">
                    <p id="text-chief">{{$chief[0]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[1]->image)}}" alt="{{$chief[1]->name_chief}}" id="myImg1">
                <div class="card-body">
                    <p id="text-chief">{{$chief[1]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[2]->image)}}" alt="{{$chief[2]->name_chief}}" id="myImg2">
                <div class="card-body">
                    <p id="text-chief">{{$chief[2]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[3]->image)}}" alt="{{$chief[3]->name_chief}}" id="myImg3">
                <div class="card-body">
                    <p id="text-chief">{{$chief[3]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[4]->image)}}" alt="{{$chief[4]->name_chief}}" id="myImg4">
                <div class="card-body">
                    <p id="text-chief">{{$chief[4]->name_chief}}</p>
                </div>
            </div>
            <div class="card" id="all-card">
                <img class="card-img-top" src="{{asset('uploads/chief/'.$chief[5]->image)}}" alt="{{$chief[5]->name_chief}}" id="myImg5">
                <div class="card-body">
                    <p id="text-chief">{{$chief[5]->name_chief}}</p>
                </div>
            </div>
        </div>
    </div>
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01" style="height: 80%;">
    <div id="caption"></div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var img1 = document.getElementById("myImg1");
    var img2 = document.getElementById("myImg2");
    var img3 = document.getElementById("myImg3");
    var img4 = document.getElementById("myImg4");
    var img5 = document.getElementById("myImg5");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img1.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img2.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img3.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img4.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img5.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
@include('inc.frontend_footer')
