@include('inc.frontend_header')
<div class="contact">
    <div class="contact-in">
        <h1>Shop</h1>
        <p><i class="fas fa-home faa-vertical animated"></i>&nbsp&nbspHome&nbsp&nbsp&nbsp/&nbsp&nbsp<i class="fas fa-shopping-cart faa-passing animated"></i>&nbsp&nbsp&nbspShop</p>
    </div>
</div>
    <br>
    <br>
    <section class="container content-section">
        <h2 class="section-header">Food</h2>
        <div class="shop-items">
            <div class="card" id="all-card">
                <span class="shop-item-title">{{$food[4]->food_name}}</span>
                <img class="shop-item-image" src="{{asset('uploads/food/'.$food[4]->image)}}" alt="{{$food[4]->description}}" id="myImg">
                <div class="shop-item-details">
                    <span class="shop-item-price">{{$food[4]->food_price}}$</span>
                    <button class="btn btn-primary shop-item-button" type="button" id="btn-pur">ADD TO CART</button>
                </div>
            </div>
            <div class="card" id="all-card">
                <span class="shop-item-title">{{$food[10]->food_name}}</span>
                <img class="shop-item-image" src="{{asset('uploads/food/'.$food[10]->image)}}" alt="{{$food[10]->description}}" id="myImg1">
                <div class="shop-item-details">
                    <span class="shop-item-price">{{$food[10]->food_price}}$</span>
                    <button class="btn btn-primary shop-item-button"type="button" id="btn-pur">ADD TO CART</button>
                </div>
            </div>
            <div class="card" id="all-card">
                <span class="shop-item-title">{{$food[14]->food_name}}</span>
                <img class="shop-item-image" src="{{asset('uploads/food/'.$food[14]->image)}}" alt="{{$food[14]->description}}" id="myImg2">
                <div class="shop-item-details">
                    <span class="shop-item-price">{{$food[14]->food_price}}$</span>
                    <button class="btn btn-primary shop-item-button" type="button" id="btn-pur">ADD TO CART</button>
                </div>
            </div>
            <div class="card" id="all-card">
                <span class="shop-item-title">{{$food[15]->food_name}}</span>
                <img class="shop-item-image" src="{{asset('uploads/food/'.$food[15]->image)}}" alt="{{$food[15]->description}}" id="myImg3">
                <div class="shop-item-details">
                    <span class="shop-item-price">{{$food[14]->food_price}}$</span>
                    <button class="btn btn-primary shop-item-button" type="button" id="btn-pur">ADD TO CART</button>
                </div>
            </div>
            <div class="card" id="all-card">
                <span class="shop-item-title">{{$food[11]->food_name}}</span>
                <img class="shop-item-image" src="{{asset('uploads/food/'.$food[11]->image)}}" alt="{{$food[11]->description}}" id="myImg4">
                <div class="shop-item-details">
                    <span class="shop-item-price">{{$food[11]->food_price}}$</span>
                    <button class="btn btn-primary shop-item-button" type="button" id="btn-pur">ADD TO CART</button>
                </div>
            </div>
            <div class="card" id="all-card">
                <span class="shop-item-title">{{$food[21]->food_name}}</span>
                <img class="shop-item-image" src="{{asset('uploads/food/'.$food[21]->image)}}" alt="{{$food[21]->description}}" id="myImg5">
                <div class="shop-item-details">
                    <span class="shop-item-price">{{$food[21]->food_price}}$</span>
                    <button class="btn btn-primary shop-item-button" type="button" id="btn-pur">ADD TO CART</button>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
            <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-item-image" src="{{asset('uploads/food/'.$food[14]->image)}}" width="100" height="100">
                    <span class="cart-item-title">{{$food[14]->food_name}}</span>
                </div>
                <span class="cart-price cart-column">{{$food[14]->food_price}}$</span>
                <div class="cart-quantity cart-column">
                    <input class="cart-quantity-input" type="number" value="1">
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">${{$food[14]->food_price}}</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button" id="btn-pur">PURCHASE</button>
    </section>
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
