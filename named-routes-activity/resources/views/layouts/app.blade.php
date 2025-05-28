<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Named Routes Activity</title>
</head>
<body>
    {{-- We will simplify the navigation in the next step --}}
    <nav>
        <a href="{{ route('customer.show') }}">Customer</a> |
        <a href="{{ route('item.show') }}">Item</a> |
        <a href="{{ route('order.show') }}">Order</a> |
        <a href="{{ route('orderDetails.show') }}">Order Details</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>
</body>
</html>