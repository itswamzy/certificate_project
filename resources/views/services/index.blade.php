<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <title>Service Page</title>
</head>
<body>
    <h1>Service History</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
            <a href="{{route('service.create')}}">Add a Service</a>
        </div>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Number Plate</th>
                <th>Owner Name</th>
                <th>Service Description</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($services as $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td>{{$service->CarMake}}</td>
                    <td>{{$service->CarModel}}</td>
                    <td>{{$service->NumberPlate}}</td>
                    <td>{{$service->OwnerName}}</td>
                    <td>{{$service->ServiceDescription}}</td>
                    <td>{{$service->Price}}</td>
                    <td>
                        <a href="{{route('service.edit', ['service' => $service])}}">Edit</a>
                    </td>
                    <td>
                        <form method = "post" action = "{{route('service.destroy', ['service' => $service])}}">
                            @csrf
                            @method('delete')
                            <input type = "submit" value ="Delete"/>
                        </form>
                    </td>
                    
                </tr>   
            @endforeach       
    </table> 
</body>
    
</html>