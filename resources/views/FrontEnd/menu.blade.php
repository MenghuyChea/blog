@include('inc.frontend_header')
    <div class="first-main">
        <h1 id="text-main">BreakFast</h1>
    </div>
    <div class="first-main-session">
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[0]->image)}}" alt="{{$food[0]->description}}" id="myImg">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[0]->food_name}}</span>
                <span id="span2">{{$food[0]->food_price}}$</span>
                <span id="des2">{{$food[0]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[1]->image)}}" alt="{{$food[1]->description}}" id="myImg1">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[1]->food_name}}</span>
                <span id="span2">{{$food[1]->food_price}}$</span>
                <span id="des2">{{$food[1]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[2]->image)}}" alt="{{$food[2]->description}}" id="myImg2">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[2]->food_name}}</span>
                <span id="span2">{{$food[2]->food_price}}$</span>
                <span id="des2">{{$food[2]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[3]->image)}}" alt="{{$food[3]->description}}" id="myImg3">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[3]->food_name}}</span>
                <span id="span2">{{$food[3]->food_price}}$</span>
                <span id="des2">{{$food[3]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[4]->image)}}" alt="{{$food[4]->description}}" id="myImg4">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[4]->food_name}}</span>
                <span id="span2">{{$food[4]->food_price}}$</span>
                <span id="des2">{{$food[4]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[5]->image)}}" aalt="{{$food[5]->description}}" id="myImg5">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[5]->food_name}}</span>
                <span id="span2">{{$food[5]->food_price}}$</span>
                <span id="des2">{{$food[5]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[6]->image)}}" alt="{{$food[6]->description}}" id="myImg6">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[6]->food_name}}</span>
                <span id="span2">{{$food[6]->food_price}}$</span>
                <span id="des2">{{$food[6]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[7]->image)}}" alt="{{$food[7]->description}}" id="myImg7">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[7]->food_name}}</span>
                <span id="span2">{{$food[7]->food_price}}$</span>
                <span id="des2">{{$food[7]->description}}</span>
            </div>
        </div>
    </div>
    <div class="second-main">
        <h1 id="text-main">Lunch</h1>
    </div>
    <div class="first-main-session">
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[8]->image)}}" alt="{{$food[8]->description}}" id="myImg8">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[8]->food_name}}</span>
                <span id="span2">{{$food[8]->food_price}}$</span>
                <span id="des2">{{$food[8]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[9]->image)}}" alt="{{$food[9]->description}}" id="myImg9">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[9]->food_name}}</span>
                <span id="span2">{{$food[9]->food_price}}$</span>
                <span id="des2">{{$food[9]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[10]->image)}}" alt="{{$food[10]->description}}" id="myImg10">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[10]->food_name}}</span>
                <span id="span2">{{$food[10]->food_price}}$</span>
                <span id="des2">{{$food[10]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[11]->image)}}" alt="{{$food[11]->description}}" id="myImg11">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[11]->food_name}}</span>
                <span id="span2">{{$food[11]->food_price}}$</span>
                <span id="des2">{{$food[11]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[12]->image)}}" alt="{{$food[12]->description}}" id="myImg12">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[12]->food_name}}</span>
                <span id="span2">{{$food[12]->food_price}}$</span>
                <span id="des2">{{$food[12]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[13]->image)}}" alt="{{$food[13]->description}}" id="myImg13">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[13]->food_name}}</span>
                <span id="span2">{{$food[13]->food_price}}$</span>
                <span id="des2">{{$food[13]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[14]->image)}}" alt="{{$food[14]->description}}" id="myImg14">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[14]->food_name}}</span>
                <span id="span2">{{$food[14]->food_price}}$</span>
                <span id="des2">{{$food[14]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[15]->image)}}" alt="{{$food[15]->description}}" id="myImg15">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[15]->food_name}}</span>
                <span id="span2">{{$food[15]->food_price}}$</span>
                <span id="des2">{{$food[15]->description}}</span>
            </div>
        </div>
    </div>
    <div class="third-main">
        <h1 id="text-main">Dinner</h1>
    </div>
    <div class="first-main-session">
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[16]->image)}}" alt="{{$food[16]->description}}" id="myImg16">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[16]->food_name}}</span>
                <span id="span2">{{$food[16]->food_price}}$</span>
                <span id="des2">{{$food[16]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[17]->image)}}" alt="{{$food[17]->description}}" id="myImg17">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[17]->food_name}}</span>
                <span id="span2">{{$food[17]->food_price}}$</span>
                <span id="des2">{{$food[17]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[18]->image)}}" alt="{{$food[18]->description}}" id="myImg18">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[18]->food_name}}</span>
                <span id="span2">{{$food[18]->food_price}}$</span>
                <span id="des2">{{$food[18]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[19]->image)}}" alt="{{$food[19]->description}}" id="myImg19">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[19]->food_name}}</span>
                <span id="span2">{{$food[19]->food_price}}$</span>
                <span id="des2">{{$food[19]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[20]->image)}}" alt="{{$food[20]->description}}" id="myImg20">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[20]->food_name}}</span>
                <span id="span2">{{$food[20]->food_price}}$</span>
                <span id="des2">{{$food[20]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[21]->image)}}" alt="{{$food[21]->description}}" id="myImg21">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[21]->food_name}}</span>
                <span id="span2">{{$food[21]->food_price}}$</span>
                <span id="des2">{{$food[21]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[22]->image)}}" alt="{{$food[22]->description}}" id="myImg22">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[22]->food_name}}</span>
                <span id="span2">{{$food[22]->food_price}}$</span>
                <span id="des2">{{$food[22]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[23]->image)}}" alt="{{$food[23]->description}}" id="myImg23">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[23]->food_name}}</span>
                <span id="span2">{{$food[23]->food_price}}$</span>
                <span id="des2">{{$food[23]->description}}</span>
            </div>
        </div>
    </div>
    <div class="forth-main">
        <h1 id="text-main">Snack</h1>
    </div>
    <div class="first-main-session">
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[24]->image)}}" alt="{{$food[24]->description}}" id="myImg24">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[24]->food_name}}</span>
                <span id="span2">{{$food[24]->food_price}}$</span>
                <span id="des2">{{$food[24]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[25]->image)}}" alt="{{$food[25]->description}}" id="myImg25">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[25]->food_name}}</span>
                <span id="span2">{{$food[25]->food_price}}$</span>
                <span id="des2">{{$food[25]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[26]->image)}}" alt="{{$food[26]->description}}" id="myImg26">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[26]->food_name}}</span>
                <span id="span2">{{$food[26]->food_price}}$</span>
                <span id="des2">{{$food[26]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[27]->image)}}" alt="{{$food[27]->description}}" id="myImg27">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[27]->food_name}}</span>
                <span id="span2">{{$food[27]->food_price}}$</span>
                <span id="des2">{{$food[27]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[28]->image)}}" alt="{{$food[28]->description}}" id="myImg28">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[28]->food_name}}</span>
                <span id="span2">{{$food[28]->food_price}}$</span>
                <span id="des2">{{$food[28]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[29]->image)}}" alt="{{$food[29]->description}}" id="myImg29">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[29]->food_name}}</span>
                <span id="span2">{{$food[29]->food_price}}$</span>
                <span id="des2">{{$food[29]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[30]->image)}}" alt="{{$food[30]->description}}" id="myImg30">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[30]->food_name}}</span>
                <span id="span2">{{$food[30]->food_price}}$</span>
                <span id="des2">{{$food[30]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/food/'.$food[31]->image)}}" alt="{{$food[31]->description}}" id="myImg31">
            <div class="card-body">
                <span class="card-text" id="p2">{{$food[31]->food_name}}</span>
                <span id="span2">{{$food[31]->food_price}}$</span>
                <span id="des2">{{$food[31]->description}}</span>
            </div>
        </div>
    </div>
    <div class="fifth-main">
        <h1 id="text-main">Drinks</h1>
    </div>
    <div class="first-main-session">
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[0]->image)}}" alt="{{$drink[0]->description}}" id="myImg32">
            <div class="card-body">
                <span class="card-text" id="p2">{{$drink[0]->drink_name}}</span>
                <span id="span2">{{$drink[0]->drink_price}}$</span>
                <span id="des2">{{$drink[0]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[1]->image)}}" alt="{{$drink[1]->description}}" id="myImg33">
            <div class="card-body">
                <span class="card-text" id="p2">{{$drink[1]->drink_name}}</span>
                <span id="span2">{{$drink[1]->drink_price}}$</span>
                <span id="des2">{{$drink[1]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[2]->image)}}" alt="{{$drink[2]->description}}" id="myImg34">
            <div class="card-body">
                <span class="card-text" id="p2">{{$drink[2]->drink_name}}</span>
                <span id="span2">{{$drink[2]->drink_price}}$</span>
                <span id="des2">{{$drink[2]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[3]->image)}}" alt="{{$drink[3]->description}}" id="myImg35">
            <div class="card-body">
                <span class="card-text" id="p2">{{$drink[3]->drink_name}}</span>
                <span id="span2">{{$drink[3]->drink_price}}$</span>
                <span id="des2">{{$drink[3]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[4]->image)}}" alt="{{$drink[4]->description}}" id="myImg36">
            <div class="card-body">
                <span class="card-text" id="p2">{{$drink[4]->drink_name}}</span>
                <span id="span2">{{$drink[4]->drink_price}}$</span>
                <span id="des2">{{$drink[4]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[5]->image)}}" alt="{{$drink[5]->description}}" id="myImg37">
            <div class="card-body">
                <span class="card-text" id="p2">{{$drink[5]->drink_name}}</span>
                <span id="span2">{{$drink[5]->drink_price}}$</span>
                <span id="des2">{{$drink[5]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[6]->image)}}" alt="{{$drink[6]->description}}" id="myImg38">
            <div class="card-body">
                <span class="card-text" id="p2">{{$drink[6]->drink_name}}</span>
                <span id="span2">{{$drink[6]->drink_price}}$</span>
                <span id="des2">{{$drink[6]->description}}</span>
            </div>
        </div>
        <div class="card" id="all-card">
            <img class="card-img-top" src="{{asset('uploads/drink/'.$drink[7]->image)}}" alt="{{$drink[7]->description}}" id="myImg39">
            <div class="card-body">
                <span class="card-text" id="p2">{{$drink[7]->drink_name}}</span>
                <span id="span2">{{$drink[7]->drink_price}}$</span>
                <span id="des2">{{$drink[7]->description}}</span>
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
    var img6 = document.getElementById("myImg6");
    var img7 = document.getElementById("myImg7");
    var img8 = document.getElementById("myImg8");
    var img9 = document.getElementById("myImg9");
    var img10 = document.getElementById("myImg10");
    var img11 = document.getElementById("myImg11");
    var img12 = document.getElementById("myImg12");
    var img13 = document.getElementById("myImg13");
    var img14 = document.getElementById("myImg14");
    var img15 = document.getElementById("myImg15");
    var img16 = document.getElementById("myImg16");
    var img17 = document.getElementById("myImg17");
    var img18 = document.getElementById("myImg18");
    var img19 = document.getElementById("myImg19");
    var img20 = document.getElementById("myImg20");
    var img21 = document.getElementById("myImg21");
    var img22 = document.getElementById("myImg22");
    var img23 = document.getElementById("myImg23");
    var img24 = document.getElementById("myImg24");
    var img25 = document.getElementById("myImg25");
    var img26 = document.getElementById("myImg26");
    var img27 = document.getElementById("myImg27");
    var img28 = document.getElementById("myImg28");
    var img29 = document.getElementById("myImg29");
    var img30 = document.getElementById("myImg30");
    var img31 = document.getElementById("myImg31");
    var img32 = document.getElementById("myImg32");
    var img33 = document.getElementById("myImg33");
    var img34 = document.getElementById("myImg34");
    var img35 = document.getElementById("myImg35");
    var img36 = document.getElementById("myImg36");
    var img37 = document.getElementById("myImg37");
    var img38 = document.getElementById("myImg38");
    var img39 = document.getElementById("myImg39");
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
    img6.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img7.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img8.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img9.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img10.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img11.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img12.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img13.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img14.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img15.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img16.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img17.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img18.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img19.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img20.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img21.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img22.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img23.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img24.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img25.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img26.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img27.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img28.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img29.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img30.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img31.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img32.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img33.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img34.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img35.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img36.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img37.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img38.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
    img39.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
@include('inc.frontend_footer')
