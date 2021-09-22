@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
      <div class="container mx-auto px-4 lg:px-32 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
          <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="poster" class="w-64 lg:w-96">
        </div>
        <div class="md:ml-24">
          <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
          <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
            <span class="ml-1">{{ $movie['vote_average'] * 10 . '%'}}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
            <span class="mx-2">|</span>
            <span>
              @foreach ($movie['genres'] as $genre)
                 {{ $genre['name'] }} @if (!$loop->last), @endif
                @endforeach
            </span>
          </div>
          
          <p class="text-gray-300 mt-8">
            {{ $movie['overview'] }}
          </p>
          
          <div class="mt-12">
            <h4 class="text-white font-semibold">Featured Crew</h4>
            <div class="flex mt-4">
            @foreach ($movie['credits']['crew'] as $crew)
              @if ($loop->index < 2)
                <div class="mr-8">
                  <div>{{ $crew['name'] }}</div>
                  <div class="text-sm text-gray-400">{{ $crew['job'] }}</div> 
                </div>
              @endif
            @endforeach
            </div>
          </div>
          
          <div class="mt-12">
            <a target="_blank" href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM9.555 7.168A1 1 0 0 0 8 8v4a1 1 0 0 0 1.555.832l3-2a1 1 0 0 0 0-1.664l-3-2z" clip-rule="evenodd"/></svg>
              <span class="ml-2">Play Trailer</span>
            </a>
          </div>
          </div>
      </div>
    </div> <!-- end movie-info -->
    
    <div class="movie-cast border-b border-gray-800">
     <div class="container mx-auto px-4 lg:px-32 py-16">
       <h2 class="text-4xl font-semibold">Cast</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($movie['credits']['cast'] as $cast)   
          @if ($loop->index < 5)
            <div class="mt-8">
              <a href="#">
                <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $cast['profile_path'] }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
              </a>
              <div class="mt-2">
                <a href="#" class="text-lg hover:text-gray-300">{{ $cast['name'] }}</a>
                <div class="text-sm text-gray-400">
                  {{ $cast['character'] }}
                </div>
              </div>
            </div>    
          @endif
        @endforeach
      </div>
     </div>
    </div> <!-- end movie-cast -->
    
    <div class="movie-images">
      <div class="container mx-auto px-4 lg:px-32 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
          @foreach ($movie['images']['backdrops'] as $image)
           @if ($loop->index < 9)
            <div class="mt-8">
              <a href="#">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-500">
              </a>
            </div>  
           @endif
          @endforeach
        </div>
      </div>
    </div> <!-- end movie-images -->
@endsection