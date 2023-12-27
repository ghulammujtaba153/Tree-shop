@extends('layout')

@section('title', 'Shop')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<img
      style="width: 100%; height: 570px; object-fit: cover; margin-top: -2%;"
      src="assets/rm291batch2-boom-banner-32.jpg"
      alt=""
    />
<main>
  <div id="cardDiv" class="row" style="display: flex; justify-content: center; margin-right: 10px; max-width: 1200px; margin: auto; margin-top: 2vh;">
    <h1 style="text-align:  center; margin-top: 3vh; margin-bottom: 3vh;">Our Products</h1>

    @foreach($products as $product)
    <div class="card" style="width: 22rem; margin-right: 10px; margin-bottom: 10px">
      <img src="/product_images/{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <button onclick="addToCart('{{ $product->image }}', '{{ $product->title }}', {{ $product->price }})" class="btn btn-primary" style="background-color: #c2fbd7;
          border-radius: 100px;
          box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
          color: green;
          cursor: pointer;
          display: inline-block;
          font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
          padding: 7px 20px;
          text-align: center;
          text-decoration: none;
          transition: all 250ms;
          border: 0;
          font-size: 16px;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;">Add to Cart</button>
          <p>{{ $product->price }}</p>
      </div>
    </div>
    @endforeach

  </div>
</main>

<script>
    function addToCart(img, name, price) {
          console.log(name)
        let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

        // Check if the product is already in the cart
        let productExists = cartItems.find(item => item.nm === name);

        if (!productExists) {
            // If the product is not in the cart, add it
            cartItems.push({ img: img, quantity: 1, nm: name, pr: price });

            // Update the cart in local storage
            localStorage.setItem('cart', JSON.stringify(cartItems));

            // Optionally, you can provide a message or update UI to indicate successful addition to cart
            alert('Product added to cart!');
        } else {
            alert('Product is already in the cart!');
        }
    }
</script>

@endsection
