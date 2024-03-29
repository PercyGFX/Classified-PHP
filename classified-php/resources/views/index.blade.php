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

  <div class="col-span-8 md:col-span-4">



@forEach($vehicle_ad as $v_ad)


  
<a href="viewvehicle/{{$v_ad->id}}" >
    <div class="max-w-4xl mx-auto bg-white shadow-md my-2 px-2 py-4 sm:px-6 md:px-8">
      <div class="flex items-start md:flex">
        <div class="">
          <img src="/uploads/{{$v_ad['image'][0]['image']}}" alt="Placeholder image" class="h-40 w-40 md:h-48 md:w-48">
        </div>
        <div class="flex-grow p-4 md:w-2/3">
          <h2 class="text-xl font-semibold text-gray-800">{{$v_ad->vehicle_make}} {{$v_ad->vehicle_model}} For Sale in {{$v_ad->location}}  </h2>  
          <p class="text-gray-600">{{$v_ad->description}}</p>
          <div class="mt-4">
            <p class="text-gray-700 inline-block mr-4">{{$v_ad->price}}</p>
            <p class="text-gray-700 inline-block mr-4">{{$v_ad->location}}</p>
            <p class="text-gray-700 inline-block">Date</p>
          </div>
        </div>
      </div>
    </div>

  </a>

  @endforeach

  {{ $vehicle_ad->links() }}

  {{ $vehicle_ad->links('pagination::default')->paginator->currentPage() }}

   


    





</div>





</div>


<!-- content end -->


<x-footer/>



</div>


</body>
</html>