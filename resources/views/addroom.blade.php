{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Room</title>
    <!-- Đường dẫn đến file CSS của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .products {
            display: flex;
            gap: 50px;
            flex-wrap: wrap;
        }

        .room img {
            flex-basis: calc(25% - 10px);
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            @csrf
            <div class="d-flex justify-content-between align-items-center">
                <h2>Quản lý phòng</h2>
                <button type="submit" class="btn btn-primary" name="sbm">Thêm mới phòng</button>
            </div>
            <div class="form">
                <div class="form-group">
                    <label for="roomname">Tên phòng</label>
                    <input type="text" class="form-control" name="roomname" placeholder="Tên phòng">
                </div>
                <div class="form-group">
                    <label for="des">Mô tả phòng</label>
                    <input type="text" class="form-control" name="des" placeholder="Mô tả phòng">
                </div>
                <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="text" class="form-control" name="price" placeholder="Giá">
                </div>
                <div class="form-group">
                    <label for="img">Hình ảnh</label>
                    <input type="text" class="form-control" name="img" placeholder="Link ảnh">
                </div>
            </div>
        </form>
        <div class="products">
            @if(isset($rooms))
            {{-- @foreach ($rooms as $room)
                <form method="post" action="/book">
                    <div class="room">
                        <img src="{{ $room->image }}" alt="">
                        <h4>{{ $room->room_name }}</h4>
                        <p>{{ $room->description }}</p>
                        <p>Price:</p>
                        <p>{{ $room->price }}</p>
                        <button class="btn btn-primary">Book now</button>
                    </div>
                </form>
            @endforeach --}}
            <!-- addroom.blade.php -->

{{-- @foreach ($rooms as $room)
<div class="room">
    <h4>{{ $room['room_name'] }}</h4>
    <p>{{ $room['description'] }}</p>
    <p>Price: {{ $room['price'] }}</p>
    <img src="{{ $room['image'] }}" alt="">
</div>
@endforeach

            @endif
        </div>
    </div>

    <!-- Đường dẫn đến file JavaScript của Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body> --}}
{{-- 
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Room</title>
    <!-- Đường dẫn đến file CSS của Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        /* Giao diện form */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
        }
    
        .form-group {
            margin-bottom: 20px;
        }
    
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
    
        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    
        .form-group button[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
    
        .form-group button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form method="post">
            @csrf
            <div class="d-flex justify-content-between align-items-center">
                <h2>Quản lý phòng</h2>
                <button type="submit" class="btn btn-primary" name="sbm">Thêm mới phòng</button>
            </div>
            <div class="form">
                <div class="form-group">
                    <label for="roomname">Tên phòng</label>
                    <input type="text" class="form-control" name="roomname" placeholder="Tên phòng">
                </div>
                <div class="form-group">
                    <label for="des">Mô tả phòng</label>
                    <input type="text" class="form-control" name="des" placeholder="Mô tả phòng">
                </div>
                <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="text" class="form-control" name="price" placeholder="Giá">
                </div>
                <div class="form-group">
                    <label for="img">Hình ảnh</label>
                    <input type="text" class="form-control" name="img" placeholder="Link ảnh">
                </div>
            </div>
        </form>
    </div>
    <br>
    <div class="container">
        <div class="row">
            @if(isset($rooms))
            <!-- addroom.blade.php -->
            @foreach ($rooms as $room)
            <div class="col-md-4">
                <div class="room-card">
                    <img src="{{ $room['image'] }}" alt="Room Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room['room_name'] }}</h5>
                        <p class="card-text">{{ $room['description'] }}</p>
                        <p class="card-text">Price: {{ $room['price'] }}</p>
                        <a href="#" class="btn btn-primary">Book now</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

    <!-- Đường dẫn đến file JavaScript của Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

