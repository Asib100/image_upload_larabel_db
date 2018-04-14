<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        image upload try in DB
    </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
<br>
<div class="col-lg-offset-4 col-lg-4">
    <center><h1>Upload a File<h1></center>
    <form action="/store" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        <input type="file" name="image">
        <br>
        <input type="submit" value="upload">
    </form>
</div>
<body>

</body>
</html>