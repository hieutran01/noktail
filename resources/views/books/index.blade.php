@extends('layouts.master')
@section('content')
<div class="main_content">
            <div class="container">

                <div class="lg:flex lg:space-x-10">
                    
                    <div class="lg:w-2/3 flex-shrink-0"> 
                        
                        <div class="text-2xl font-semibold">  Books  </div>
                        
                        <nav class="cd-secondary-nav border-b md:m-0 -mx-3 nav-small">
                            <ul>
                                <li class="active"><a href="#" class="lg:px-2">   Suggestions </a></li>
                                <li><a href="#" class="lg:px-2">  Mobile App  </a></li>
                                <li><a href="#" class="lg:px-2"> JavaScript  </a></li>
                                <li><a href="#" class="lg:px-2"> Softwares  </a></li>
                                <li><a href="#" class="lg:px-2"> Drawing  </a></li>
                            </ul>
                        </nav>

                        <div class="relative mt-2 uk-slider" uk-slider="finite: true">
                            <div class="uk-slider-container px-1 py-3">
                                <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid text-sm font-medium text-center" style="transform: translate3d(0px, 0px, 0px);">
                         
                                    <li tabindex="-1" class="uk-active">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book1.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">  Vue.js Basics  </div>
                                            </a>
                                        </div>
                                   </li>
                                    <li tabindex="-1" class="uk-active">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book2.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">  HTML5 &amp; CSS3  </div>
                                            </a>
                                        </div>
                                   </li>
                                    <li tabindex="-1" class="uk-active">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book3.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">  Learn CSS  </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li tabindex="-1" class="uk-active">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book4.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">HTML5 Breaker</div>
                                            </a>
                                        </div>
                                    </li>
                                    <li tabindex="-1" class="">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book5.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">  CSS Master  </div>
                                            </a>
                                        </div>
                                   </li>
                                </ul>
                        
                                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>
                        
                            </div>
                        </div>

                        <br>   

                        <div class="mt-2 flex items-center justify-between pb-3">
                            <div>
                                <h2 class="text-xl font-semibold"> Your Friends also Reading</h2> 
                            </div>
                            <a href="#" class="text-blue-500"> See all </a>
                        </div>

                        <div class="relative uk-slider" uk-slider="finite: true">
                            <div class="uk-slider-container px-1 py-3">
                                <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid text-sm font-medium text-center" style="transform: translate3d(0px, 0px, 0px);">
                                    <li tabindex="-1" class="uk-active">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book4.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">HTML5 Breaker</div>
                                            </a>
                                        </div>
                                    </li>
                                    <li tabindex="-1" class="uk-active">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book5.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">  CSS Master  </div>
                                            </a>
                                        </div>
                                   </li>
                                    <li tabindex="-1" class="uk-active">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book1.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">  Vue.js Basics  </div>
                                            </a>
                                        </div>
                                   </li>
                                    <li tabindex="-1" class="uk-active">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book2.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">  HTML5 &amp; CSS3  </div>
                                            </a>
                                        </div>
                                   </li>
                                    <li tabindex="-1" class="">
                                        <div class="relative overflow-hidden bg-white shadow md:rounded-lg rounded-md">
                                            <a href="book-description.html">
                                               <img src="../assets/images/book/book3.jpg" alt="" class="w-full h-44 object-cover">
                                               <div class="p-3 truncate">  Learn CSS  </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                        
                                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                                <a class="absolute bg-white bottom-1/2 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>
                        
                            </div>
                        </div>
                     
                    </div>
                    <div class="lg:w-1/3 w-full">

                        <div class="my-2 flex items-center justify-between pb-2">
                            <div>
                                <h2 class="text-xl font-semibold">Top Books</h2> 
                            </div>
                            <a href="#" class="text-blue-500"> See all </a>
                        </div>

                        <div class="space-y-7 mt-6">
                            <div class="p-3 bg-white shadow rounded-md flex items-center space-x-3">
                                <img src="../assets/images/book/book1.jpg" class="w-20 h-24 rounded-lg -mt-7 shadow-md" alt="">
                                <div class="flex-1"> 
                                    <div class="font-semibold"> Vue.js Basics</div> 
                                    <div class="text-sm"> John smith </div> 
                                </div>
                                <a href="#"> 
                                    <ion-icon name="download-outline" class="text-2xl text-gray-600 md hydrated" role="img" aria-label="download outline"></ion-icon>
                                </a>
                            </div>
                        
                            <div class="p-3 bg-white shadow rounded-md flex items-center space-x-3">
                                <img src="../assets/images/book/book2.jpg" class="w-20 h-24 rounded-lg -mt-7 shadow-md" alt="">
                                <div class="flex-1"> 
                                    <div class="font-semibold"> HTML5 &amp; CSS3</div> 
                                    <div class="text-sm"> John smith </div> 
                                </div>
                                <a href="#"> 
                                    <ion-icon name="download-outline" class="text-2xl text-gray-600 md hydrated" role="img" aria-label="download outline"></ion-icon>
                                </a>
                            </div>
                         
                            <div class="p-3 bg-white shadow rounded-md flex items-center space-x-3">
                                <img src="../assets/images/book/book3.jpg" class="w-20 h-24 rounded-lg -mt-7 shadow-md" alt="">
                                <div class="flex-1"> 
                                    <div class="font-semibold"> Learn CSS</div> 
                                    <div class="text-sm"> John smith </div> 
                                </div>
                                <a href="#"> 
                                    <ion-icon name="download-outline" class="text-2xl text-gray-600 md hydrated" role="img" aria-label="download outline"></ion-icon>
                                </a>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-lg mb-2 font-semibold"> Tags </h4>
                            <div class="flex flex-wrap font-medium gap-2">
                                <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> JavaScript</a>
                                <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Angular</a>
                                <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Design</a>
                                <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Photography</a>
                                <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Technology</a>
                                <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Music</a> 
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

            
        </div>
@endsection