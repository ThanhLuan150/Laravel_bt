<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <form action="/tinhtong" method="post">
        @csrf 
        <div class="form_group">
            <input type="number" class="form-control" placeholder="Số a" name="soA">
        </div>
        <div class="form_group">
            <input type="number" class="form-control" placeholder="Số B" name="soB">
        </div>
        <div class="form_group">
            <button type="submit" class="btn btn-primary">Tính</button>
        </div>
        <div class="form_group">
            <input type="number" class="form-control" placeholder="Kết quả" disabled="" value="<?php if(isset($sum)) echo $sum; ?>">
        </div>
    </form>
</body>
</html>