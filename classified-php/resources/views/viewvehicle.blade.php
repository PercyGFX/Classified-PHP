<!doctype html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

</head>
<!-- jQuery -->



<style>

  /**
    Setup for code demo only
  */
  :root {
    --current-image-height: 300px;
    --thumbnails-track-height: 90px;
  }
  

  
  /** Container */
  .carousel {
    max-width: 550px;
  }
  
  
  /** Current image */
  .current-image {
    margin-bottom: 1px;
  }
  
    .current-image a {
      display: block;
      height: var(--current-image-height);
      overflow: hidden;
      position: relative;
    }
  
      .current-image a:before {
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        transition: box-shadow .1s linear;
      }
  
      .current-image a:focus {
        outline: 0;
      }
  
        .current-image a:focus:before {
          box-shadow: inset 0 0 0 1px black,
                      inset 0 0 0 4px white;
        }
  
    .current-image img {
      display: block;
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
  
  .thumbnails-track {
    position: relative;
  }
  
  /**
    Controls (previous/next buttons)
  */
  .arrow-wrapper {
    position: absolute;
    top: 0;
    width: 25px;
    height: 100%;
    z-index: 1;
    
    display: flex;
    align-items: center;
    
    background-color: white;
  }
  
    .previous-button-wrapper { left: 0; }
    .next-button-wrapper { right: 0; }
  
  /** Previous and next buttons */
  .button {
    background: none;
    border: 0;
    cursor: pointer;
    
    font-size: 30px;
    color: rgba(0,0,0,.7);
  
    padding: 0;
    margin: 0 1px;
    flex: 0 0 25px;
    height: 100%;
    
    transition: all .2s linear;
  }
  
    .button:hover {
      background-color: rgba(0,0,0,.1);
      color: black;
    }
  
    .button:focus {
      outline: none;
      background-color: royalblue;
      color: rgba(255,255,255,1);
    }
  
    .button:disabled {
      opacity: .3;
    }
  
  /** Single thumbnail */
  .thumbnail {
    flex: 0 0 var(--thumbnail-width);
    margin-right: 1px;
    position: relative;
  }
  
    .thumbnail-button {
      display: block;
      padding: 0;
      height: var(--thumbnails-track-height);
      width: 100%;
      
      cursor: pointer;
      border: 0;
      background: none;
      background-color: rgba(0,0,0,.4);
      transition: opacity .1s linear;
    }
  
      .thumbnail-button:before {
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        transition: box-shadow .1s linear;
      }
  
      .thumbnail-button:focus {
        outline: 0;
      }
  
        .thumbnail-button:focus:before {
          box-shadow: inset 0 0 0 1px black,
                      inset 0 0 0 4px white;
        }
  
        .thumbnail-button:focus img,
        .thumbnail-button:hover img,
        .thumbnail-button[aria-current="true"] img {
          opacity: 1;
          filter: grayscale(0);
        }
  
      .thumbnail-button img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        
        opacity: .5;
        filter: grayscale(.6);
        transition: all .1s linear;
      }
  
  /** Credits at bottom */
  .credits {
    display: inline-block;
    margin-top: 20px;
    padding: 10px;
    font-size: 14px;
    color: black;
    text-decoration: none;
    opacity: .7;
  }
  
    .credits img {
      height: 30px;
      margin-left: 5px;
      margin-top: -2px;
      vertical-align: middle;
    }
  
    .credits:hover,
    .credits:focus {
      opacity: 1;
    }
  
  </style>
  
  <!-- Link to the file hosted on your server, -->
 
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




    <div class="mx-auto max-w-4x2 p-4">
        <h1 class="text-3xl font-bold mb-4">{{$vehicle->vehicle_make}} {{$vehicle->vehicle_model}}</h1>
        <div class="flex flex-col md:flex-row gap-4">
          <div class="rounded-md shadow-md flex-none w-1/5 md:w-1/4">


            <section class="py-3 px-3 carousel" aria-label="carousel">
              <p class="sr-only">This is a carousel with one large image and a track of thumbnails below. Select any of the image buttons to change the main image above.</p>
              
              <!-- Large, currently-active image -->
              <div class="current-image">
                <a href="{{ asset('uploads/'.$image->image) }}">
                  <img src="{{ asset('uploads/'.$image->image) }}" alt="Succulents 1">
                </a>
              </div>
            
              <!-- Thumbnail track -->
              <div class="thumbnails-track">
                <!-- Previous button -->
                <div class="arrow-wrapper previous-button-wrapper">
                  <button class="previous-button button">
                    <span class="fas fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous tiles</span>
                  </button>
                </div>
                
                <!-- Thumbnails -->
                <div class="splide">
                  <div class="splide__track">
                    <div class="splide__list">
                      <div class="thumbnail splide__slide">
                        <button class="thumbnail-button" aria-current="true">
                          <img src="{{ asset('uploads/'.$image->image) }}" alt="image 1 of 5" data-full-alt="Succulents 1">
                        </button>
                      </div>
            
                      <div class="thumbnail splide__slide">
                        <button class="thumbnail-button">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/erol-ahmed-500x500.jpg" alt="image 2 of 5" data-full-alt="Succulents 2">
                        </button>
                      </div>
            
                      <div class="thumbnail splide__slide">
                        <button class="thumbnail-button">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/armando-castillejo-500x500.jpg" alt="image 3 of 5" data-full-alt="Succulents 3">
                        </button>
                      </div>
            
                      <div class="thumbnail splide__slide">
                        <button class="thumbnail-button">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/calle-macarone-500x500.jpg" alt="image 4 of 5" data-full-alt="Succulents 4">
                        </button>
                      </div>
            
                      <div class="thumbnail splide__slide">
                        <button class="thumbnail-button">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3609497/annie-spratt-500x500.jpg" alt="image 5 of 5" data-full-alt="Succulents 5">
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
            
                <!-- Next button -->
                <div class="arrow-wrapper next-button-wrapper">
                  <button class="next-button button">
                    <span class="fas fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next tiles</span>
                  </button>
                </div>
              </div>
            </section>
            

            
           
            <!--<img src="{{ asset('uploads/'.$image->image) }}" width="500" alt="Hyundai Accent" class="h-auto mb-4"> -->
          </div>
          <div class="flex-grow md:w-2/3">
            <div class="grid grid-cols-2 gap-4 mb-4">
              <div class="flex flex-col bg-gray-100 rounded-md p-5 shadow-md">
                <p class="font-bold">Brand:</p>
                <p>Hyundai</p>
                <p class="font-bold">Year:</p>
                <p>2004</p>
                <p class="font-bold">Mileage:</p>
                <p>157,000 km</p>
                <p class="font-bold">Fuel Type:</p>
                <p>Petrol</p>
              </div>
              <div class="flex flex-col bg-white rounded-md p-5 shadow-md">
                <p class="font-bold">Model:</p>
                <p>Accent</p>
                <p class="font-bold">Condition:</p>
                <p>Used</p>
                <p class="font-bold">Transmission:</p>
                <p>Manual</p>
              </div>
            </div>
            <div class="bg-gray-100 rounded-md p-5 shadow-md mb-4">

              <div class="mb-4">                              
              <a href="tel:{{$vehicle->phone_number}}" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-green-700 dark:focus:ring-blue-800 " >{{$vehicle->phone_number}}</a>
              <a href="tel:{{$vehicle->phone_number}}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" >WhatsApp</a>
              </div>
              <p class="font-bold">Name</p>
              <p>{{$vehicle->name}}</p>
              <p class="font-bold">Location</p>
              <p>{{$vehicle->location}}</p>
            </div>
          </div>
          
        </div>

        <div class="py-5 px-5 shadow-md">
            <h3 class="block text-xl font-bold mb-2 text-gray-700">Description</h3>
            <p class="mb-4 text-gray-700">{{$vehicle->description}}</p>
          </div>
          <div class="shadow-md py-5 px-5">
            <h3 class="block text-xl font-bold mb-2 text-gray-700">Tips:</h3>
        <ul class="list-disc pl-4">
          <li>Meet the seller in person and inspect the car before making any payments.</li>
          <li>Do a background check on the seller and the car's history.</li>
          <li>Make sure all the necessary documents are in order and get a receipt for your payment.</li>
        </ul>
      </div>
      </div>

  

    





</div>





</div>


<!-- content end -->


<x-footer/>



</div>

<script>

    
  var currentImage;
  var splide;
  var previousButton, nextButton;
  var thumbnails, thumbnailButtons;
  
  window.addEventListener('DOMContentLoaded', function(e) {
    currentImage = document.querySelector('.current-image');
    previousButton = document.querySelector('.carousel .previous-button');
    nextButton = document.querySelector('.carousel .next-button');
    thumbnails = document.querySelectorAll('.carousel .thumbnail');
    thumbnailButtons = document.querySelectorAll('.carousel .thumbnail-button');
    
    thumbnailButtons.forEach(function(thumbnailButton) {
      thumbnailButton.addEventListener('click', function(e) {
        activateThumbnail(thumbnailButton);
      });
    });
  
    splide = new Splide('.splide', {
      gap: '1px',
      padding: {
        left: '25px',
        right: '25px'
      },
      arrows: false,
      perPage: 3,
      pagination: false,
      keyboard: false,  // Splide listens to key events at the document level and moves ALL carousels when arrow keys are used. Also, keyboard controls are not expected by real users.
      slideFocus: false,  // removes tabindex="0" from each slide wrapper, since we only want our links inside each slide to receive focus. 
    }).mount();
    
    // To prevent animation issues, let's make every slide visible before a transition happens. Splide will then automatically remove the `.is-visible` class from non-visible slides once the transition is finished.
    splide.on('move', function() {
      var slides = document.querySelectorAll('.splide .splide__slide');
  
      slides.forEach(function(slide) {
        slide.classList.add('is-visible');
      });
    });
    
    // Go to the previous slide when the Previous button is activated
    previousButton.addEventListener('click', function(e) {
      splide.go('<');
    });
    
    // Go to the next slide when the Next button is activated
    nextButton.addEventListener('click', function(e) {
      splide.go('>');
    });
  });
  
  
  /**
    Update the large current image when a thumbnail button is activated.
  */
  function activateThumbnail(thumbnailButton) {
    // Swap the current image based to match the thumbnail
    // - If you'd like to use separate images, like higher-res versions, consider using the index to pick an appropriate src string from an array, or storing the URI of the higher-res image in a custom data attribute on the thumbnail.
    var newImageSrc = thumbnailButton.querySelector('img').getAttribute('src');
    var newImageAlt = thumbnailButton.querySelector('img').getAttribute('data-full-alt');
    currentImage.querySelector('img').setAttribute('src', newImageSrc);
    currentImage.querySelector('img').setAttribute('alt', newImageAlt);
    
    // Remove aria-current from any previously-activated thumbnail
    thumbnailButtons.forEach(function(button) {
      button.removeAttribute('aria-current');
    });
    
    // Indicate to screen readers which thumbnail is selected using aria-current
    thumbnailButton.setAttribute('aria-current', true);
  }
  </script>
</body>
</html>