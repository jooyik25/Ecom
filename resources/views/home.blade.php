@extends('layouts.app')

@section('after-styles')
<style type="text/css">
body {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
  background: #f8f8f8;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}
body * {
  box-sizing: inherit;
}

.wrapper {
  width: 40em;
  margin: 4em auto;
  background: #fff;
  padding: 4em;
  border-radius: 8px;
  border: 1px solid #f5f5f5;
}
.wrapper > :first-child {
  margin-top: 0;
}
.wrapper > :last-child {
  margin-bottom: 0;
}

.desc {
  margin: 4em auto;
  font-size: 1.2em;
}

.todo {
  background: #f9f9f9;
  padding: 1em;
  border-radius: 4px;
  color: #ccc;
  font-style: italic;
  font-weight: lighter;
  font-size: .9em;
}
.todo ul {
  margin: .4em 0;
  padding: 0 1em;
}
.todo ul li {
  list-style-position: inside;
}

h1 {
  margin: 0;
}

footer {
  margin: 4em auto;
  text-align: center;
  font-size: .9em;
}

a {
  text-decoration: none;
  color: #2196F3;
}
a:hover {
  text-decoration: underline;
}

.emoticon-face {
  background: #FFEB3B;
  border-radius: 100%;
  width: 1.7em;
  height: 1.7em;
  transform: rotate(90deg);
  display: inline-block;
  vertical-align: middle;
  line-heigh: 1;
  margin: -.4em .2em 0;
  text-align: center;
  border: 1px solid #FDD835;
  padding-left: .1em;
  -webkit-font-smoothing: antialiased;
}
.emoticon-face--no-rotation {
  transform: rotate(0deg);
}

code {
  padding: .2em .3em;
  background: #f5f5f5;
  margin: 0 .2em;
  border-radius: 4px;
  font-size: .95em;
  font-family: 'Source Code Pro';
}

.tac {
  text-align: center;
}

.wrapper {
  width: 68em;
}

* {
  box-sizing: border-box;
}

body {
  color: #777;
  font-family: 'Open Sans', Arial, sans-serif;
}

.product-grid {
  width: 60em;
  margin: 2rem auto;
}
.product-grid.product-grid--flexbox .product-grid__wrapper {
  display: flex;
  flex-wrap: wrap;
}
.product-grid.product-grid--flexbox .product-grid__title {
  height: auto;
}
.product-grid.product-grid--flexbox .product-grid__title:after {
  display: none;
}
.product-grid__wrapper {
  margin-left: -1rem;
  margin-right: -1rem;
}
.product-grid__product-wrapper {
  padding: 1rem;
  float: left;
  width: 33.33333%;
}
.product-grid__product {
  padding: 1rem;
  position: relative;
  cursor: pointer;
  background: #fff;
  border-radius: 4px;
}
.product-grid__product:hover {
  box-shadow: 0px 0px 0px 1px #eee;
  z-index: 50;
}
.product-grid__product:hover .product-grid__extend {
  display: block;
}
.product-grid__img-wrapper {
  width: 100%;
  text-align: center;
  padding-top: 1rem;
  padding-bottom: 1rem;
  height: 150px;
}
.product-grid__img {
  max-width: 100%;
  height: auto;
  max-height: 100%;
}
.product-grid__title {
  margin-top: .875rem;
  display: block;
  font-size: 1.125em;
  color: #222;
  height: 3em;
  overflow: hidden;
  position: relative;
}
.product-grid__title:after {
  content: "";
  display: block;
  position: absolute;
  bottom: 0;
  right: 0;
  width: 2.4em;
  height: 1.5em;
  background: linear-gradient(to right, rgba(255, 255, 255, 0), white 50%);
}
.product-grid__sprice {
  color: #E91E63;
  font-weight: bold;
  letter-spacing: .4px;  
  border-bottom: 2px solid blue;
  margin: 0px auto;
  position: absolute;
  transform: translate(-50%, -50%);
}
.product-grid__rprice {
  color: #E91E63;
  font-weight: bold;
  letter-spacing: .4px;
}
.product-grid__extend-wrapper {
  position: relative;
}
.product-grid__extend {
  display: none;
  position: absolute;
  padding: 0 1rem 1rem 1rem;
  margin: .4375rem -1rem 0;
  box-shadow: 0px 0px 0px 1px #eee;
  background: #fff;
  border-radius: 0 0 4px 4px;
}
.product-grid__extend:before {
  content: "";
  height: .875rem;
  width: 100%;
  position: absolute;
  top: -.4375rem;
  left: 0;
  background: #fff;
}
.product-grid__description {
  font-size: .875em;
  margin-top: .4375rem;
  margin-bottom: 0;
}
.product-grid__btn {
  display: inline-block;
  font-size: .875em;
  color: #777;
  background: #eee;
  padding: .5em .625em;
  margin-top: .875rem;
  margin-right: .625rem;
  cursor: pointer;
  border-radius: 4px;
}
.product-grid__btn i.fa {
  margin-right: .3125rem;
}
.product-grid__add-to-cart {
  color: #fff;
  background: #E91E63;
}
.product-grid__add-to-cart:hover {
  background: #ee4c83;
}
.product-grid__view {
  color: #777;
  background: #eee;
}
.product-grid__view:hover {
  background: white;
}
</style>
@endsection

@section('content')
<div class="wrapper">
    <div class="desc">
        <h1>Shoes Store</h1>       
    </div>

    <div class="content">
        <!-- content here -->
        <div class="product-grid product-grid--flexbox">
            <div class="product-grid__wrapper">
                <!-- Product list start here -->

                <!-- Single product -->
                @foreach($products as $product)
                <div class="product-grid__product-wrapper">
                    <div class="product-grid__product">
                        <div class="product-grid__img-wrapper">         
                            <img src="https://dsw.scene7.com/is/image/DSWShoes/343755_011_ss_05?$pdp-image$" alt="Img" class="product-grid__img" />
                        </div>
                            <center><td>{{ $product->brand->name }}</td></center>                      
                            <center><span class="product-grid__title">{{ $product->product_name }}</span></center><br>
                            <center><span class="product-grid__sprice">RM{{ $product->selling_price }}</span></center>
                            <center><span class="product-grid__rprice">RM{{ $product->retailer_price }}</span></center>
                        <div class="product-grid__extend-wrapper">
                        <center>
                            <form action="{{ route('checkout') }}" target="_blank" method="post" class="product-grid__extend">
                              {{ csrf_field() }}
                              <p class="product-grid__description">{{ $product->desc }}</p>
                              <input type="number" value="1" min="0" max="{{ $product->quantity_available }}" class="quantity buyNow" id="quantity" name="qty_value"/>
                              <input type="hidden" value="{{ $product->id }}" id="{{ $product->id }}" name="Buy Now" class="product-grid__btn product-grid__view buyNow"/>
                              <i class="fa fa-eye"></i><input type="submit" value="Buy Now"/>
                            </form>
                        </center>
                        </div>                        
                    </div>
                </div>
                @endforeach
                <!-- end Single product -->                                         
            </div>      
        </div>
    </div>

    <footer>
        <a target="_blank" href="https://twitter.com/ricardpanades">@jimmychoo</a>
    </footer>
</div>
   
</div>
@endsection


