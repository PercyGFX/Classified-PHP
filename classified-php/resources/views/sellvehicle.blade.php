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
                <option value="Car">Car</option>
  <option value="Van">Van</option>
  <option value="SUV">SUV</option>
  <option value="Jeep">Jeep</option>
  <option value="Crew Cab">Crew Cab</option>
  <option value="Double Cab">Double Cab</option>
  <option value="Bus">Bus</option>
  <option value="Lorry">Lorry</option>
  <option value="Tipper">Tipper</option>
  <option value="Three Wheel">Three Wheel</option>
  <option value="Tractor">Tractor</option>
  <option value="Heavy-Duty">Heavy-Duty</option>
  <option value="Motorcycle">Motorcycle</option>
  <option value="Bicycles">Bicycles</option>
  <option value="Other">Other</option>
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
                
  <option value="Registered(Used)">Registered(Used)</option>
  <option value="Unregistered(Recondition)">Unregistered(Recondition)</option>
  <option value="Brand New">Brand New</option>
  <option value="Antique">Antique</option>
              
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
                <option value="Acura">Acura</option>
                <option value="Alfa-Romeo">Alfa-Romeo</option>
                <option value="Aprilia">Aprilia</option>
                <option value="Ashok-Leyland">Ashok-Leyland</option>
                <option value="Aston">Aston</option>
                <option value="Atco">Atco</option>
                <option value="Audi">Audi</option>
                <option value="Austin">Austin</option>
                <option value="Bajaj">Bajaj</option>
                <option value="Bentley">Bentley</option>
                <option value="BMW">BMW</option>
                <option value="Cadillac">Cadillac</option>
                <option value="Cal">Cal</option>
                <option value="CAT">CAT</option>
                <option value="Ceygra">Ceygra</option>
                <option value="Changan">Changan</option>
                <option value="Chery">Chery</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Chrysler">Chrysler</option>
                <option value="Citroen">Citroen</option>
                <option value="Corvette">Corvette</option>
                <option value="Daewoo">Daewoo</option>
                <option value="Daido">Daido</option>
                <option value="Daihatsu">Daihatsu</option>
                <option value="Datsun">Datsun</option>
                <option value="Demak">Demak</option>
                <option value="Dfac">Dfac</option>
                <option value="DFSK">DFSK</option>
                <option value="Ducati">Ducati</option>
                <option value="Eicher">Eicher</option>
                <option value="FAW">FAW</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="Force">Force</option>
                <option value="Ford">Ford</option>
                <option value="Foton">Foton</option>
                <option value="Hero">Hero</option>
                <option value="Hero-Honda">Hero-Honda</option>
                <option value="Higer">Higer</option>
                <option value="Hillman">Hillman</option>
                <option value="HINO">HINO</option>
                <option value="Hitachi">Hitachi</option>
                <option value="Honda">Honda</option>
                <option value="Hummer">Hummer</option>
                <option value="Hyundai">Hyundai</option>
                <option value="IHI">IHI</option>
                <option value="Isuzu">Isuzu</option>
                <option value="Iveco">Iveco</option>
                <option value="JAC">JAC</option>
                <option value="Jaguar">Jaguar</option>
                <option value="JCB">JCB</option>
                <option value="Jeep">Jeep</option>
                <option value="JiaLing">JiaLing</option>
                <option value="JMC">JMC</option>
                <option value="John Deere">John Deere</option>
                <option value="Jonway">Jonway</option>
                <option value="KAPLA">KAPLA</option>
<option value="Kawasaki">Kawasaki</option>
<option value="Kia">Kia</option>
<option value="Kinetic">Kinetic</option>
<option value="KMC">KMC</option>
<option value="Kobelco">Kobelco</option>
<option value="Komatsu">Komatsu</option>
<option value="KTM">KTM</option>
<option value="Kubota">Kubota</option>
<option value="Lamborghini">Lamborghini</option>
<option value="Land Rover">Land Rover</option>
<option value="Lexus">Lexus</option>
<option value="Loncin">Loncin</option>
<option value="Longjia">Longjia</option>
<option value="Lotus">Lotus</option>
<option value="LTI">LTI</option>
<option value="Mahindra">Mahindra</option>
<option value="Maserati">Maserati</option>
<option value="Massey Ferguson">Massey Ferguson</option>
<option value="Mazda">Mazda</option>
<option value="Mercedes-Benz">Mercedes-Benz</option>
<option value="Metrocab">Metrocab</option>
<option value="MG Rover">MG Rover</option>
<option value="Micro">Micro</option>
<option value="Mini">Mini</option>
<option value="Minnelli">Minnelli</option>
<option value="Mitsubishi">Mitsubishi</option>
<option value="Morgan">Morgan</option>
<option value="Morris">Morris</option>
<option value="New Holland">New Holland</option>
<option value="Nissan">Nissan</option>
<option value="Opel">Opel</option>
<option value="Other">Other</option>
<option value="Perodua">Perodua</option>
<option value="Peugeot">Peugeot</option>
<option value="Piaggio">Piaggio</option>
<option value="Porsche">Porsche</option>
<option value="Powertrac">Powertrac</option>
<option value="Proton">Proton</option>
<option value="Range Rover">Range Rover</option>
<option value="Ranomoto">Ranomoto</option>
<option value="Renault">Renault</option>
<option value="Reva">Reva</option>
<option value="Rolls-Royce">Rolls-Royce</option>
<option value="Saab">Saab</option>
<option value="Sakai">Sakai</option>
<option value="Seat">Seat</option>
<option value="Singer">Singer</option>
<option value="Skoda">Skoda</option>
<option value="Smart">Smart</option>
<option value="Sonalika">Sonalika</option>
<option value="Subaru">Subaru</option>
<option value="Suzuki">Suzuki</option>
<option value="Swaraj">Swaraj</option>
<option value="Syuk">Syuk</option>
<option value="TAFE">TAFE</option>
<option value="Tata">Tata</option>
<option value="Tesla">Tesla</option>
<option value="Toyota">Toyota</option>
<option value="Triumph">Triumph</option>
<option value="TVS">TVS</option>
<option value="Vauxhall">Vauxhall</option>
<option value="Vespa">Vespa</option>
<option value="Volkswagen">Volkswagen</option>
<option value="Volvo">Volvo</option>
<option value="Wave">Wave</option>
<option value="Willys">Willys</option>
<option value="Yamaha">Yamaha</option>
<option value="Yanmar">Yanmar</option>
<option value="Yuejin">Yuejin</option>
<option value="Zongshen">Zongshen</option>
<option value="Zotye">Zotye</option>

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
                            <option value="Manual">Manual</option>
                            <option value="Auto">Auto</option>
                                   
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
                                <option value="Diesel">Diesel</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Electric">Electric</option>
                                <option value="Hybrid">Hybrid</option>
                                       
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

                                 <div class="mb-4">
                                    @error('mileage')
                                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                        Mileage <span class="text-rose-600">*</span>
                                    </label>
                                    <input name="mileage" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="number" placeholder="19000">
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
                                                    <option value="Colombo">Colombo</option>
                                                    <option value="Dehiwala-Mount-Lavinia">Dehiwala-Mount-Lavinia</option>
                                                    <option value="Moratuwa">Moratuwa</option>
                                                    <option value="Kotte">Kotte</option>
                                                    <option value="Battaramulla">Battaramulla</option>
                                                    <option value="Maharagama">Maharagama</option>
                                                    <option value="Kotikawatta">Kotikawatta</option>
                                                    <option value="Kolonnawa">Kolonnawa</option>
                                                    <option value="Keselwatta">Keselwatta</option>
                                                    <option value="Homagama">Homagama</option>
                                                    <option value="Mulleriyawa">Mulleriyawa</option>
                                                    <option value="Kesbewa">Kesbewa</option>
                                                    <option value="Avissawella">Avissawella</option>
                                                    <option value="Kaduwela">Kaduwela</option>
                                                    <option value="Boralesgamuwa">Boralesgamuwa</option>
                                                    <option value="Piliyandala">Piliyandala</option>
                                                    <option value="Nugegoda">Nugegoda</option>
                                                    <option value="Nawala">Nawala</option>
                                                    <option value="Padukka">Padukka</option>
                                                    <option value="Kottawa">Kottawa</option>
                                                    <option value="Pannipitiya">Pannipitiya</option>
                                                    <option value="Malabe">Malabe</option>
                                                    <option value="Hanwella">Hanwella</option>
                                                    <option value="Rajagiriya">Rajagiriya</option>
                                                    <option value="Gampaha">Gampaha</option>
                                                    <option value="Negombo">Negombo</option>
                                                    <option value="Katunayake">Katunayake</option>
                                                    <option value="Hendala">Hendala</option>
                                                    <option value="Welisara">Welisara</option>
                                                    <option value="Ragama">Ragama</option>
                                                    <option value="Kandana">Kandana</option>
                                                    <option value="Ja-Ela">Ja-Ela</option>
                                                    <option value="Wattala">Wattala</option>
                                                    <option value="Kelaniya">Kelaniya</option>
                                                    <option value="Peliyagoda">Peliyagoda</option>
                                                    <option value="Minuwangoda">Minuwangoda</option>
                                                    <option value="Kadawatha">Kadawatha</option>
                                                    <option value="Dompe">Dompe</option>
                                                    <option value="Divulapitiya">Divulapitiya</option>
                                                    <option value="Nittambuwa">Nittambuwa</option>
                                                    <option value="Mirigama">Mirigama</option>
                                                    <option value="Kiribathgoda">Kiribathgoda</option>
                                                    <option value="Veyangoda">Veyangoda</option>
                                                    <option value="Ganemulla">Ganemulla</option>
                                                    <option value="Kandy">Kandy</option>
                                                    <option value="Gampola">Gampola</option>
                                                    <option value="Nawalapitiya">Nawalapitiya</option>
                                                    <option value="Wattegama">Wattegama</option>
                                                    <option value="Harispattuwa">Harispattuwa</option>
                                                    <option value="Kadugannawa">Kadugannawa</option>
                                                    <option value="Kurunegala">Kurunegala</option>
                                                    <option value="Kuliyapitiya">Kuliyapitiya</option>
<option value="Polgahawela">Polgahawela</option>
<option value="Pannala">Pannala</option>
<option value="Ratnapura">Ratnapura</option>
<option value="Balangoda">Balangoda</option>
<option value="Eheliyagoda">Eheliyagoda</option>
<option value="Kalawana">Kalawana</option>
<option value="Embilipitiya">Embilipitiya</option>
<option value="Kalutara">Kalutara</option>
<option value="Beruwala">Beruwala</option>
<option value="Panadura">Panadura</option>
<option value="Horana">Horana</option>
<option value="Matugama">Matugama</option>
<option value="Bandaragama">Bandaragama</option>
<option value="Puttalam">Puttalam</option>
<option value="Chilaw">Chilaw</option>
<option value="Nattandiya">Nattandiya</option>
<option value="Wennappuwa">Wennappuwa</option>
<option value="Marawila">Marawila</option>
<option value="Dankotuwa">Dankotuwa</option>
<option value="Kegalle">Kegalle</option>
<option value="Mawanella">Mawanella</option>
<option value="Warakapola">Warakapola</option>
<option value="Matale">Matale</option>
<option value="Dambulla">Dambulla</option>
<option value="Sigiriya">Sigiriya</option>
<option value="Badulla">Badulla</option>
<option value="Bandarawela">Bandarawela</option>
<option value="Haputale">Haputale</option>
<option value="Welimada">Welimada</option>
<option value="Mahiyanganaya">Mahiyanganaya</option>
<option value="Nuwara-Eliya">Nuwara-Eliya</option>
<option value="Hatton">Hatton</option>
<option value="Talawakele">Talawakele</option>
<option value="Galle">Galle</option>
<option value="Ambalangoda">Ambalangoda</option>
<option value="Matara">Matara</option>
<option value="Weligama">Weligama</option>
<option value="Hambantota">Hambantota</option>
<option value="Tangalle">Tangalle</option>
<option value="Batticaloa">Batticaloa</option>
<option value="Kattankudy">Kattankudy</option>
<option value="Eravur">Eravur</option>
<option value="Ampara">Ampara</option>
<option value="Kalmunai">Kalmunai</option>
<option value="Jaffna">Jaffna</option>
<option value="Chavakacheri">Chavakacheri</option>
<option value="Valvettithurai">Valvettithurai</option>
<option value="Anuradapura">Anuradapura</option>
<option value="Polonnaruwa">Polonnaruwa</option>
<option value="Moneragala">Moneragala</option>
<option value="Trincomalee">Trincomalee</option>
<option value="Mannar">Mannar</option>
<option value="Vavuniya">Vavuniya</option>
<option value="Kilinochchi">Kilinochchi</option>
<option value="Mullaitivu">Mullaitivu</option>

                                                           
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