@extends('layout')

@section('title', 'cart')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" /></head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/cart.css">

<main>
    <div class="invoice-container">
        <div class="invoice-header">
            <div class="title-date">
                <h2 class="title">INVOICE</h2>
                <p class="date"></p>
            </div>
            <div class="space"></div>
            <p class="invoice-number">#08 279</p>
        </div>
        <div class="invoice-body">
            <table>
                <thead>
                    <th style="padding-left:12px;">image</th>
                    <th>Quantity</th>
                    <th>PRICE</th>
                    <th>Name</th>
                    <th style="text-align: right;">ACTION</th>
                </thead>
                <tbody id="table-body">
                    <!-- Cart items will be dynamically inserted here -->
                </tbody>
            </table>
            <div id="sum"><input type="text" placeholder="0.00" name="total" class="total" id="total" disabled></div>
        </div>
    </div>
</main>

<script>
    // Retrieve cart items from local storage
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    // Reference to the table body element
    let tableBody = document.getElementById('table-body');

    // Function to display cart items
    function displayCartItems() {
        // Clear previous items
        tableBody.innerHTML = '';

        // Variable to hold the total price
        let totalPrice = 0;

        // Loop through each item in the cart
        cartItems.forEach((item, index) => {
            console.log(item)
            let row = document.createElement('tr');
            row.classList.add('single-row');

            // Populate the row with item details
            row.innerHTML = `
                <td><img src="product_images/${item.img}" style="width: 40px; height: 30px;" alt="${item.img}"></td>
                <td>${item.quantity}</td>
                <td>${item.pr}</td>
                <td>${item.nm}</td>
                <td style="text-align: right;"><span class="material-icons delete-item">delete_outline</span></td>
            `;

            // Append the row to the table body
            tableBody.appendChild(row);

            // Calculate total price
            totalPrice += item.quantity * item.pr;

            // Add click event to delete icon
            let deleteIcon = row.querySelector('.delete-item');
            deleteIcon.addEventListener('click', () => {
                // Remove the item from the cart array using the index
                cartItems.splice(index, 1);
                // Update local storage with the modified cart
                localStorage.setItem('cart', JSON.stringify(cartItems));
                // Redisplay the updated cart items
                displayCartItems();
            });
        });

        // Display total price
        document.getElementById('total').value = totalPrice.toFixed(2);
    }

    // Function call to display cart items
    displayCartItems();
</script>

@endsection
