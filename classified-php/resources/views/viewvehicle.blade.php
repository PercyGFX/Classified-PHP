<!doctype html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

</head>
<body>

<div class="container mx-auto">
  <!-- nav start -->
  <x-header/>

  

<!-- nav end -->

<!-- main start -->
<x-hero/>
<!-- main end -->

<!-- categories -->



<x-categories/>

<!-- categories end -->

<!-- content start -->

<div class="grid grid-cols-1 my-10 md:grid-cols-5">
  <div class="col-span-2 md:col-span-1 hidden md:block">

  <!-- sidebar start -->
    <x-sidebar/>

  <!-- sidebar end -->
  </div>

  <div class=" shadow-md col-span-8 md:col-span-4">




    <div class="mx-auto max-w-4xl p-4">
        <h1 class="text-3xl font-bold mb-4">{{$vehicle->vehicle_make}} {{$vehicle->vehicle_model}}</h1>
        <div class="flex flex-col md:flex-row gap-4">
          <div class="flex-none w-1/5 md:w-1/4">

            
           
            <img src="{{ asset('uploads/'.$image->image) }}" width="500" alt="Hyundai Accent" class="h-auto mb-4">
          </div>
          <div class="flex-grow md:w-2/3">
            <div class="grid grid-cols-2 gap-4 mb-4">
              <div class="font-bold">Brand:</div>
              <div>Hyundai</div>
              <div class="font-bold">Model:</div>
              <div>Accent</div>
              <div class="font-bold">Year:</div>
              <div>2004</div>
              <div class="font-bold">Condition:</div>
              <div>Used</div>
              <div class="font-bold">Mileage:</div>
              <div>157,000 km</div>
              <div class="font-bold">Transmission:</div>
              <div>Manual</div>
              <div class="font-bold">Fuel Type:</div>
              <div>Petrol</div>
            </div>
            
          </div>
        </div>

        <div>
            <h2 class="block text-xl font-bold mb-2">Description</h2>
            <p class="mb-4">{{$vehicle->description}}</p>
          </div>
        <div class="text-lg font-bold mt-4">SECURITY TIPS:</div>
        <ul class="list-disc pl-4">
          <li>Meet the seller in person and inspect the car before making any payments.</li>
          <li>Do a background check on the seller and the car's history.</li>
          <li>Make sure all the necessary documents are in order and get a receipt for your payment.</li>
        </ul>
      </div>

  

    





</div>





</div>


<!-- content end -->


<x-footer/>



</div>


</body>
</html>