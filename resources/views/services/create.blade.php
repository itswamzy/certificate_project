<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
</head>
<body>
    <h1>Create A Product</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif

    <form method="post" action="{{route('service.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Car Make</label> <br>
            <input type="text" name="CarMake" placeholder="Enter Make"/>
        </div>
        <div>
            <label>Car Model</label> <br>
            <input type="text" name="CarModel" placeholder="Enter Model"/>
        </div>
        <div>
            <label>Number Plate</label> <br>
            <input type="text" name="NumberPlate" placeholder="Enter Intake"/>
        </div>
        <div>
            <label>Owner Name</label> <br>
            <input type="text" name="OwnerName" placeholder="Enter Duration"/>
        </div>
        <div>
            <label>Service Description</label> <br>
            <input type="text" name="ServiceDescription" placeholder="Enter Description"/>
        </div>
        <div>
            <label>Price</label> <br>
            <input type="integer" name="Price" placeholder="Enter Price"/>
        </div><br>
        <input type="submit" value="Submit Service"/>

        

    </form>
</body>
</html>