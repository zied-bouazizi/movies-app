@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
      <div class="container mx-auto px-4 lg:px-32 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
          <img src="/img/shang-chi.jpg" alt="poster" class="w-64 lg:w-96">
        </div>
        <div class="md:ml-24">
          <h2 class="text-4xl font-semibold">Shang-Chi and the Legend of the Ten Rings</h2>
          <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
            <span class="ml-1">79%</span>
            <span class="mx-2">|</span>
            <span>Sep 01, 2021</span>
            <span class="mx-2">|</span>
            <span>Action, Adventure, Fantasy</span>
          </div>
          
          <p class="text-gray-300 mt-8">
            Shang-Chi must confront the past he thought he left behind when he is drawn into the web of the mysterious Ten Rings organization.
            </p>
          
          <div class="mt-12">
            <h4 class="text-white font-semibold">Featured Crew</h4>
            <div class="flex mt-4">
              <div>
                <div>Sarah Halley Finn</div>
                <div class="text-sm text-gray-400">Casting</div>
              </div>
              <div class="ml-8">
                <div>Kym Barrett</div>
                <div class="text-sm text-gray-400">Costume Design</div>
              </div>
            </div>
          </div>
          
          <div class="mt-12">
            <button class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM9.555 7.168A1 1 0 0 0 8 8v4a1 1 0 0 0 1.555.832l3-2a1 1 0 0 0 0-1.664l-3-2z" clip-rule="evenodd"/></svg>
              <span class="ml-2">Play Trailer</span>
            </button>
          </div>
          </div>
      </div>
    </div> <!-- end movie-info -->
    
    <div class="movie-cast border-b border-gray-800">
     <div class="container mx-auto px-4 lg:px-32 py-16">
       <h2 class="text-4xl font-semibold">Cast</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="/img/actor1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg hover:text-gray-300">Simu Liu</a>
            <div class="text-sm text-gray-400">
              Shaun / Shang-Chi
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/actor2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg hover:text-gray-300">Tony Leung Chiu-wai</a>
            <div class="text-sm text-gray-400">
              Xu Wenwu
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/actor3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg hover:text-gray-300">Awkwafina</a>
            <div class="text-sm text-gray-400">
              Katy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/actor4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg hover:text-gray-300">Meng'er Zhang</a>
            <div class="text-sm text-gray-400">
              Xialing
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/img/actor5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg hover:text-gray-300">Fala Chen</a>
            <div class="text-sm text-gray-400">
              Li
            </div>
          </div>
        </div>
      </div>
     </div>
    </div> <!-- end movie-cast -->
    
    <div class="movie-images">
      <div class="container mx-auto px-4 lg:px-32 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
          <div class="mt-8">
            <a href="#">
              <img src="/img/image1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
            </a>
          </div>
          <div class="mt-8">
            <a href="#">
              <img src="/img/image2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
            </a>
          </div>
          <div class="mt-8">
            <a href="#">
              <img src="/img/image3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
            </a>
          </div>
          <div class="mt-8">
            <a href="#">
              <img src="/img/image4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
            </a>
          </div>
          <div class="mt-8">
            <a href="#">
              <img src="/img/image5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
            </a>
          </div>
          <div class="mt-8">
            <a href="#">
              <img src="/img/image6.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
            </a>
          </div>
        </div>
      </div>
    </div> <!-- end movie-images -->
@endsection