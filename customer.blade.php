<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>customer Form</title>
</head>
<body>
    <div class="container">
        <form action="{{$url}}" method="post">
            @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text"class="form-control" name="name" id="" value="{{$result->name}}" placeholder="">
          <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"class="form-control" name="email" id="" value="{{$result->email}}" placeholder="">
          <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
          </span>
        </div><div class="form-group">
          <label for="password">Password</label>
          <input type="password"class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
          <span class="text-danger">
            @error('password')
                {{$message}}
            @enderror
          </span>
        </div>
        <button class="btn-btn-primary">
            Submit
        </button>
        </form>
    </div>
    
</body>
</html>
</html>