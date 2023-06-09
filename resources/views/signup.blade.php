<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area Of Shape</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container flex">
    <div style="width: 404">
    <h2> <center>Nhập thông tin khách hàng</center> </h2>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control"  name='name'>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" class="form-control"  name='age'>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="text" class="form-control"  name='date'>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control"  name='phone'>
        </div>
        <div class="form-group">
            <label for="web">Web:</label>
            <input type="text" class="form-control"  name='web'>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control"  name='address'>
        </div>
        <div>
            @include('error')
        </div>
        <button type="submit" class="btn btn-primary">OKI</button>
        <div class="display-infor">
            @if(isset($user))
            <p>Name:{{ $user['name'] }}</p>
            <p>Age:{{ $user['age'] }}</p>
            <p>Date:{{ $user['date'] }}</p>
            <p>Phone:{{ $user['phone'] }}</p>
            <p>Website:{{ $user['web'] }}</p>
            <p>Address:{{ $user['address'] }}</p>
            @endif
        </div>
    </form>
</body>
</html>