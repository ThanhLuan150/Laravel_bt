<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area Of Shape</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
   <style>
    .flex{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
   </style>
</head>
<body>
<h2> <center>Area Of Shape</center> </h2>
<div class="container flex">
    <div style="width: 404">
    <h2> <center>Area Of Triangle</center> </h2>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="a">Enter value of (A)</label>
            <input type="text" class="form-control" id="a" name='a'>
        </div>
        <div class="form-group">
            <label for="b">Enter value of (B)</label>
            <input type="text" class="form-control" id="b" name='b'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h2> The result: {{$areaTriangle}}</h2>
</div>

<div style="width:404">
<h2><center>Area Of Quadrangle</center></h2>
<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="c">Enter value of an edge</label>
        <input type="text" class="form-control" id="c" name='e1'>
    </div>
    <div class="form-group">
        <label for="d">Enter value of an edge</label>
        <input type="text" class="form-control" id="d" name='e2'>
    </div>
    <div class="form-group">
        <label for="e">Enter value of an edge</label>
        <input type="text" class="form-control" id="e" name='e3'>
    </div>
    <div class="form-group">
        <label for="f">Enter value of an edge</label>
        <input type="text" class="form-control" id="f" name='e4'>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<h2> The result: {{$areaQuadrangle}}</h2>
</div>
</div>
</body>
</html>