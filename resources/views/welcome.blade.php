<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Paypal</title>
</head>

<body>
    <h2>product : Mobile Phone</h2>
    <h3>Price : $20</h3>
    <form action="{{ 'paypal/payment' }}" method="post">
        @csrf
        <input type="hidden" name="price" value="20">
        <button type="submit">Pay with Paypal</button>
    </form>
</body>

</html>
