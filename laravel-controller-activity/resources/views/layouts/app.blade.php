<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Controller</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- Customer Link --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/customer/CUST-001/John-Doe/123-Main-St">Customer</a>
                    </li>
                    {{-- Item Link --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/item/ITEM-456/Laptop/50000">Item</a>
                    </li>
                    {{-- Order Link --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/order/CUST-001/John-Doe/ORD-987/2025-05-28">Order</a>
                    </li>
                     {{-- Order Details Link --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/orderDetails/TRN-111/ORD-987/ITEM-456/Laptop/50000/2">Order Details</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>