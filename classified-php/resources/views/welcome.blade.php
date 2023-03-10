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


  <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
  </a>
  <div class="flex md:order-2">
  <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 mx-2 mb-1 border border-gray-400 rounded shadow">Post Ad Free</button>

    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Search</span>
    </button>
    <div class="relative hidden md:block">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Search icon</span>
      </div>
      <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
    
    </div>

  

    <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
      <span class="sr-only">Open menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
      <div class="relative mt-3 md:hidden">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
      </div>
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
        <a href="#" class="block text-base py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
        </li>
        <li>
          <a href="#" class="block text-base py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
        </li>
        <li>
          <a href="#" class="block text-base py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">My Account</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- nav end -->

<!-- main start -->
<section class="dark:bg-gray-100 dark:text-Slate-900">
	<div class="container mx-auto flex flex-col items-center px-4 py-16 text-center md:py-12 md:px-10 lg:px-50 xl:max-w-3xl">
		<h1 class="text-4xl font-bold leading-none sm:text-5xl">Welcome to CarSale</h1>
		<p class="px-8 mt-8 mb-8 text-lg">Test</p>
		<div class="flex flex-wrap justify-center">
			<button class="px-8 py-3 m-2 text-lg font-semibold rounded dark:bg-green-900 dark:text-gray-50">Sell Vehicle</button>
			<button class="px-8 py-3 m-2 text-lg font-semibold rounded dark:bg-green-900 dark:text-gray-50">Looking to Buy</button>
      <button class="px-8 py-3 m-2 text-lg font-semibold rounded dark:bg-green-900 dark:text-gray-50">For Hire</button>
		</div>
	</div>
</section>
<!-- main end -->

<!-- categories -->

<ul class="flex flex-wrap items-center justify-evenly mb-6 mt-6 text-gray-900 dark:text-gray-500">
    <li>
        <a href="#" class="mr-4 hover:underline md:mr-6 ">MotorBikes</a>
    </li>
    <li>
        <a href="#" class="mr-4 hover:underline md:mr-6">Cars</a>
    </li>
    <li>
        <a href="#" class="mr-4 hover:underline md:mr-6 ">Parts</a>
    </li>
    <li>
        <a href="#" class="mr-4 hover:underline md:mr-6">Three Wheel</a>
    </li>
    <li>
        <a href="#" class="mr-4 hover:underline md:mr-6">Vans</a>
    </li>

</ul>

<!-- categories end -->

<!-- content start -->

<div class="grid grid-cols-1 my-10 md:grid-cols-5">
  <div class="col-span-2 md:col-span-1 hidden md:block">

  <!-- sidebar start -->
    Column 1

  <!-- sidebar end -->
  </div>

  <div class="col-span-8 md:col-span-4">

  
  <div class="max-w-lg mx-auto bg-white shadow-md my-2 overflow-hidden md:max-w-4xl">
    <div class="flex items-start md:flex">
      <div class="">
        <img src="https://via.placeholder.com/200x200" alt="Placeholder image" class="h-200 w-200">
      </div>
      <div class="flex-grow p-4 md:w-2/3">
        <h2 class="text-xl font-semibold text-gray-800">Example Title</h2>
        <p class="text-gray-600">Description of the car</p>
        <div class="mt-4">
          <p class="text-gray-700 inline-block mr-4">Price</p>
          <p class="text-gray-700 inline-block mr-4">Location</p>
          <p class="text-gray-700 inline-block">Date</p>
        </div>
      </div>
    </div>
  </div>

  <div class="max-w-lg mx-auto bg-white shadow-md my-2 overflow-hidden md:max-w-4xl">
    <div class="flex items-start md:flex">
      <div class="">
        <img src="https://via.placeholder.com/200x200" alt="Placeholder image" class="h-200 w-200">
      </div>
      <div class="flex-grow p-4 md:w-2/3">
        <h2 class="text-xl font-semibold text-gray-800">Example Title</h2>
        <p class="text-gray-600">Description of the car</p>
        <div class="mt-4">
          <p class="text-gray-700 inline-block mr-4">Price</p>
          <p class="text-gray-700 inline-block mr-4">Location</p>
          <p class="text-gray-700 inline-block">Date</p>
        </div>
      </div>
    </div>
  </div>





</div>





</div>


<!-- content end -->






</div>


</body>
</html>