<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Car</title>
</head>
<body>
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Edit Your Car
            </h1>
        </div>
    </div>
    
    <div class="flex justify-center pt-20">
        <form action="{{route("cars.store")}}">
            @csrf
            @method('PUT')
            <div class="block">
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="manufacturer"
                value="{{ $car->manufacturer }}"
                placeholder="Manufacturer">
    
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80s italic
                placeholder-gray-400"
                name="model"
                value="{{ $car->model }}"
                placeholder="Model">
    
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="launch_status"
                value="{{ $car->launch_status }}"
                placeholder="launch status">
    
                <input 
                type="date"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="launch_year"
                value="{{ $car->launch_year }}"
                placeholder="launch year">
    
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                  uppercase font-bold">
                  Submit
                </button>
            </div>
    
</body>
</html>