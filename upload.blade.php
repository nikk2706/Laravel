<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>File upload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="{{url('/upload')}}">
            @csrf
        <div class="container">
            <div class="form-group mt-3">
                <label for="">File</label>
                <input type="file" name="MyImage" class="form-control" id="">
                <button class="btn btn-primary mt-2">Upload</button>
            </div>
        </div>
    </form>
</body>
</html>
