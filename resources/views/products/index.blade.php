
<!-- resources/views/products/index.blade.php -->
<head>
    <!-- Thư viện Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<!-- resources/views/products/index.blade.php -->
<div class="container">
    <button class='btn btn-primary '>Thêm</button>
    <div class="row">
        @foreach($products as $product)
        <div class=" col-md-3 col-sm-6">
            <div class="card">
                <img src="{{ $product['avatar'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">Quantity: {{ $product['quatity'] }}</p>
                    <p class="card-text"> {{ $product['description'] }}</p>
                </div>
                <div class="item">
                    <button class='btn btn-primary '>Detail</button>
                   
                    <button class='btn btn-primary '>Sửa</button>
                    <button class='btn btn-primary '>Xóa</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
