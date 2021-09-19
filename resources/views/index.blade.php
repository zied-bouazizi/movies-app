@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 lg:px-32 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Populare Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/shang-chi.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="/movie" class="text-lg hover:text-gray-300">Shang-Chi and the Legend of the Ten Rings</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">79%</span>
                            <span class="mx-2">|</span>
                            <span>Sep 01, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Adventure, Fantasy</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/the-suicide-squad.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">The Suicide Squad</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">79%</span>
                            <span class="mx-2">|</span>
                            <span>Jul 28, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Adventure, Fantasy, Comedy</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/the-tomorrow-war.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">The Tomorrow War</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">81%</span>
                            <span class="mx-2">|</span>
                            <span>Jul 02, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Science Fiction, Adventure</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/jungle-cruise.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Jungle Cruise</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">79%</span>
                            <span class="mx-2">|</span>
                            <span>Jul 28, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Adventure, Fantasy, Comedy, Action</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/dont-breathe-2.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Don't Breathe 2</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">76%</span>
                            <span class="mx-2">|</span>
                            <span>Aug 12, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Thriller, Horror</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/black-window.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Black Widow</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">78%</span>
                            <span class="mx-2">|</span>
                            <span>Jul 07, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Adventure, Thriller, Science Fiction</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sweet-girl.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Sweet Girl</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">69%</span>
                            <span class="mx-2">|</span>
                            <span>Aug 18, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/infinite.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Infinite</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">75%</span>
                            <span class="mx-2">|</span>
                            <span>Jun 10, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Science Fiction, Action, Thriller</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/f9.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">F9</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">75%</span>
                            <span class="mx-2">|</span>
                            <span>May 19, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Crime, Thriller</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/free-guy.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Free Guy</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">77%</span>
                            <span class="mx-2">|</span>
                            <span>Aug 11, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Comedy, Action, Adventure, Science Fiction</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end popular-movies -->
        
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/shang-chi.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Shang-Chi and the Legend of the Ten Rings</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">79%</span>
                            <span class="mx-2">|</span>
                            <span>Sep 01, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Adventure, Fantasy</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/malignant.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Malignant</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">73%</span>
                            <span class="mx-2">|</span>
                            <span>Sep 01, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Horror, Thriller, Mystery, Crime</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/the-suicide-squad.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">The Suicide Squad</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">79%</span>
                            <span class="mx-2">|</span>
                            <span>Jul 28, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Adventure, Fantasy, Comedy</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/the-tomorrow-war.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">The Tomorrow War</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">81%</span>
                            <span class="mx-2">|</span>
                            <span>Jul 02, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Science Fiction, Adventure</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sas-red-notice.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">SAS: Red Notice</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">59%</span>
                            <span class="mx-2">|</span>
                            <span>Aug 11, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Thriller</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/dont-breathe-2.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Don't Breathe 2</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">76%</span>
                            <span class="mx-2">|</span>
                            <span>Aug 12, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Thriller, Horror</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/paw-patrol.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">PAW Patrol: The Movie</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">79%</span>
                            <span class="mx-2">|</span>
                            <span>Aug 09, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Animation, Family, Adventure, Comedy</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/infinite.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Infinite</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">75%</span>
                            <span class="mx-2">|</span>
                            <span>Jun 10, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Science Fiction, Action, Thriller</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/f9.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">F9</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">75%</span>
                            <span class="mx-2">|</span>
                            <span>May 19, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Action, Crime, Thriller</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/the-boss-baby.jpg" alt="poster" class="hover:opacity-75 transition ease-in-out duration-500">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">
                            The Boss Baby: Family Business</a>
                        <div class="flex items-center text-gray-400 text-sm  mt-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 0 0 .95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 0 0-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 0 0-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 0 0-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 0 0 .951-.69l1.07-3.292z"/></svg>
                            <span class="ml-1">78%</span>
                            <span class="mx-2">|</span>
                            <span>Jul 01, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>Animation, Comedy, Adventure, Family</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end now-playing-movies -->
    </div>
@endsection