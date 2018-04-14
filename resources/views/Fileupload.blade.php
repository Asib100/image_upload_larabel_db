<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <br>
    
    <form action="{{route('upload.file')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
{{csrf_field()}}
            <input type="file" name="file" class="form-horizontal">
            <input type="submit" class="btn btn-info">
        </form>
    </div>
</div>

<div class="row">
    <h2>show files</h2>
    <img src="{{asset('storage/upload/Namaz Rakat.jpg')}}" alt="">
</div>

</body>
</html>