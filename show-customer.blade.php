<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Welcome ,
        @if(session()->has('UName'))
            {{session()->get('UName')}}
        @else
            <h3>Guest</h3>
        @endif

    </h1> --}}
    <div class="container">
        <div class="row m-2">
            <form action="">
                <div class="form-group col-8">
                  <input type="search" name="search" id="" class="form-control" placeholder="Search by Name or email" value="{{$search}}"/>
                </div>
                <div class="form-group col-4">
                    <button class="btn btn-primary">Search</button>
                    <a href="{{url('/view')}}">
                        <button class="btn btn-primary" type="button">Reset</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <table class="table">
            {{-- {{print_r($customers)}} --}}
                    
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $d)
            <tr>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->password}}</td>
                <td>
                    <a href="{{url('/edit')}}/{{$d->customer_id}}"><button class="btn btn-primary ">Edit</button></a>
                    <a href="{{url('/delete')}}/{{$d->customer_id}}"><button class="btn btn-danger ">Delete</button></a>
                </td>
            </tr>    
            @endforeach
            
        </tbody>
    </table>
    {{$customers->links()}}
</body>
</html>
