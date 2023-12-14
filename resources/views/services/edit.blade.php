<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
</head>
<body>
    <h1>Edit A Product</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif

    <form method="post" action="{{route('service.update', ['service' => $service])}}">
        @csrf
        @method('put')
        <div>
            <label>Car Make</label> <br>
            <input type="text" name="CarMake" placeholder="Enter Make" value="{{$service->CarMake}}"/>
        </div>
        <div>
            <label>Car Model</label> <br>
            <input type="text" name="CarModel" placeholder="Enter Model" value="{{$service->CarModel}}"/>
        </div>
        <div>
            <label>Number Plate</label> <br>
            <input type="text" name="NumberPlate" placeholder="Enter Intake" value="{{$service->NumberPlate}}"/>
        </div>
        <div>
            <label>Owner Name</label> <br>
            <input type="text" name="OwnerName" placeholder="Enter Duration" value="{{$service->OwnerName}}"/>
        </div>
        <div>
            <label>Service Description</label> <br>
            <input type="text" name="ServiceDescription" placeholder="Enter Description" value="{{$service->ServiceDescription}}"/>
        </div>
        <div>
            <label>Price</label> <br>
            <input type="integer" name="Price" placeholder="Enter Price" value="{{$service->Price}}"/>
        </div><br>
        <input type="submit" value="Edit Service"/>

        

    </form>
</body>
</html>