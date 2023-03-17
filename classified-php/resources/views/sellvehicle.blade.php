<!doctype html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

</head>

@if(!session()->has('phone_number'))
    {{ redirect('/login')->send()  }}


@else





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



    <div class="container mx-auto">
        <!-- ... -->
      
  
    <div class="w-full px-5">
        <form enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/sellvehicle" method="POST">
            @csrf
          <div class="mb-4">

            <p class="mb-4 font-sans font-bold tracking-normal text-center uppercase text-xl text-gray-700">Vehicle Information</p>
            @error('type')
    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
@enderror
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Vehicle Type <span class="text-rose-600">*</span>
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="type" id="username" type="text" placeholder="Username">
                <option value="volvo">Van</option>
                <option value="saab">MotorBikes</option>
                <option value="opel">SUV</option>
                <option value="audi">Van</option>
            </select>
          </div>

          <div class="mb-4">
            @error('condition')
            <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
        @enderror
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Vehicle Condition <span class="text-rose-600">*</span>
            </label>
            <select name="condition" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                <option value="volvo">Used</option>
                <option value="saab">Brand New</option>
              
            </select>

        </div>

        <div class="mb-4">
            @error('make')
            <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
        @enderror
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Vehicle Make <span class="text-rose-600">*</span>
            </label>
            <select name="make" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>          
            </select>

            </div>

            <div class="mb-4">
                @error('model')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
            <label  class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Vehicle Model <span class="text-rose-600">*</span>
            </label>

            <input name="model" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Ct-100">
             </div>

             <div class="mb-4">
                @error('myear')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Manufactured Year <span class="text-rose-600">*</span>
                </label>
                <input name="myear" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="1996">
                 </div>

                 <div class="mb-4">
                    @error('price')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Price <span class="text-rose-600">*</span>
                    </label>
                    <input name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="number" placeholder="19000">
                     </div>

            
                     <div class="mb-4">
                        @error('transmission')
                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                    @enderror
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Transmission <span class="text-rose-600">*</span>
                        </label>
                        <select name="transmission" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                            <option value="volvo">Manual</option>
                            <option value="saab">Auto</option>
                                   
                        </select>
            
                        </div>

                        <div class="mb-4">
                            @error('fuel')
                            <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Fuel Type <span class="text-rose-600">*</span>
                            </label>
                            <select name="fuel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                                <option value="volvo">Diesel</option>
                                <option value="saab">Petrol</option>
                                       
                            </select>
                
                            </div>

                            <div class="mb-4">
                                @error('ecapacity')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                            @enderror
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                    Engine Capacity <span class="text-rose-600">*</span>
                                </label>
                                <input name="ecapacity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="number" placeholder="19000">
                                 </div>

                                 <div class="mb-5">
                                    @error('description')
                                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                        Description <span class="text-rose-600">*</span>
                                    </label>
                                    <textarea name="description" rows="7" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="number" placeholder="19000">
                                    </textarea>
                                    </div>

                                    
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700" for="file_input">Main Image</label>
                                    @error('mainimage')
                                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                                    <input name="mainimage" class="block w-full mb-3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-700 focus:outline-none dark:bg-gray-50 dark:border-gray-700 dark:placeholder-gray-700" id="file_input" type="file">


                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700" for="file_input">Image 2</label>
                                    @error('image2')
                                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                                    <input name="image2" class="block w-full mb-3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-700 focus:outline-none dark:bg-gray-50 dark:border-gray-700 dark:placeholder-gray-700" id="file_input" type="file">

                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700" for="file_input">Image 3</label>
                                    @error('image3')
                                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                                    <input name="image3" class="block w-full mb-3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-700 focus:outline-none dark:bg-gray-50 dark:border-gray-700 dark:placeholder-gray-700" id="file_input" type="file">

                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700" for="file_input">Image 4</label>
                                    @error('image4')
                                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                                    <input name="image4" class="block w-full mb-3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-700 focus:outline-none dark:bg-gray-50 dark:border-gray-700 dark:placeholder-gray-700" id="file_input" type="file">

                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-700" for="file_input">Image 5</label>
                                    @error('image5')
                                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                                    <input name="image5" class="block w-full mb-3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-700 focus:outline-none dark:bg-gray-50 dark:border-gray-700 dark:placeholder-gray-700" id="file_input" type="file">


                                    <hr />
                                    <p class="my-5 font-sans font-bold tracking-normal text-center uppercase text-xl text-gray-700">User Information</p>


                                    <div class="mb-4">

                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                            Name <span class="text-rose-600">*</span>
                                        </label>
                                        @error('name')
                                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                        <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nimal">
                                         </div>

                                         <div class="mb-4">

                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            
                                                Phone Number <span class="text-rose-600">* </span> <span class="text-rose-600 text-xs">You can't change phone number. login with number you want to post ad.</span>
                                            </label>
                                            <input name="phonenumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="{{ session('phone_number') }}" disabled>
                                             </div>


                                             <div class="mb-4">

                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                                    @error('location')
                                                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                                @enderror
                                                    Location <span class="text-rose-600">*</span>
                                                </label>
                                                <select name="location" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                                                    <option value="volvo">Diesel</option>
                                                    <option value="saab">Petrol</option>
                                                           
                                                </select>
                                    
                                                </div>

            <div class="mb-6">
          </div>
         
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Post Ad
            </button>
           
         
        </form>
     
      </div>


    
    </div>




</div>





</div>


<!-- content end -->


<x-footer/>



</div>


</body>
@endif
</html>