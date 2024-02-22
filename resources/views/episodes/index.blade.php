@extends('layouts.master')
@section('content')
<div class="main_content">
            <div class="container md:space-y-8 space-y-6">

                <div>

                    <!-- title -->
                    <h1 class="text-2xl font-semibold mb-5"> Episodes </h1>
    
                    <div class="grid lg:grid-cols-4 grid-cols-2 gap-3 mb-5">
            
                        <a href="episodes-watch.html" class="col-span-2 row-span-2"> 
                            <div class="bg-gray-200 rounded-md overflow-hidden relative w-full lg:h-full h-60 shadow-sm">
                                <img src="../assets/images/blog/img-5.jpg" class="absolute w-full h-full object-cover" alt="">
                                <div class="absolute bottom-0 w-full p-5 text-white z-20 text-opacity-90 backdrop-filter backdrop-blur-lg">
                                    <h1 class="font-bold lg:text-2xl text-xl text-white mb-1 line-clamp-2"> Learn Angular Fundamentals From beginning to advance lavel</h1>
                                    <div class="flex space-x-2 items-center text-sm mt-2">
                                        <p class="font-semibold md:block hidden"> Denise Marie </p>
                                        <div class="md:block hidden">·</div>
                                        <div> 27 weeks ago</div> 
                                        <div class="md:block hidden">·</div> 
                                        <div> 156.9K views</div>
                                    </div>
                                </div>
                                <div class="absolute w-full h-full -bottom-1/2 bg-gradient-to-b from-transparent to-gray-800 z-10"></div>
                            </div>
                        </a>
                        
                        <a href="episodes-watch.html">
                            <div class="bg-gray-200 rounded-md overflow-hidden relative w-full lg:h-44 h-36 shadow-sm uk-transition-toggle">
                                <img src="../assets/images/episodes/img-2.jpg" class="absolute w-full h-full object-cover" alt="">
                                <div class="absolute -bottom-1.5 w-full p-3 text-white z-20 line-clamp-2 text-opacity-95 font-medium text-base">  The PHP Singleton class  </div>
                                <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center uk-transition-fade -mt-4" alt="">
                                <div class="absolute w-full h-full -bottom-1/2 bg-gradient-to-b from-transparent to-gray-800 z-10"></div>
                            </div>
                        </a>
                        <a href="episodes-watch.html">
                            <div class="bg-gray-200 rounded-md overflow-hidden relative w-full lg:h-44 h-36 shadow-sm uk-transition-toggle">
                                <img src="../assets/images/episodes/img-3.jpg" class="absolute w-full h-full object-cover" alt="">
                                <div class="absolute -bottom-1.5 w-full p-3 text-white z-20 line-clamp-2 text-opacity-95 font-medium text-base">  Creating sticky in HTML  </div>
                                <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center uk-transition-fade -mt-4" alt="">
                                <div class="absolute w-full h-full -bottom-1/2 bg-gradient-to-b from-transparent to-gray-800 z-10"></div>
                            </div>
                        </a>
                        <a href="episodes-watch.html">
                            <div class="bg-gray-200 rounded-md overflow-hidden relative w-full lg:h-44 h-36 shadow-sm uk-transition-toggle">
                                <img src="../assets/images/episodes/img-4.jpg" class="absolute w-full h-full object-cover" alt="">
                                <div class="absolute -bottom-1.5 w-full p-3 text-white z-20 line-clamp-2 text-opacity-95 font-medium text-base">  Larafel $ fliepond  </div>
                                <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center uk-transition-fade -mt-4" alt="">
                                <div class="absolute w-full h-full -bottom-1/2 bg-gradient-to-b from-transparent to-gray-800 z-10"></div>
                            </div>
                        </a>
                        <a href="episodes-watch.html">
                            <div class="bg-gray-200 rounded-md overflow-hidden relative w-full lg:h-44 h-36 shadow-sm uk-transition-toggle">
                                <img src="../assets/images/episodes/img-1.jpg" class="absolute w-full h-full object-cover" alt="">
                                <div class="absolute -bottom-1.5 w-full p-3 text-white z-20 line-clamp-2 text-opacity-95 font-medium text-base"> Creating Website Pure CSS  </div>
                                <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center uk-transition-fade -mt-4" alt="">
                                <div class="absolute w-full h-full -bottom-1/2 bg-gradient-to-b from-transparent to-gray-800 z-10"></div>
                            </div>
                        </a>
                
                    </div>
    
                    
                </div>

                <!-- this is used toggle media to remove unwanted class for small devices more check docs uikit on https://getuikit.com/docs/toggle. -->
                <div class="tube-card p-4" uk-toggle="cls: tube-card p-4; mode: media; media: 640">

                    <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-2"> <ion-icon name="star" class="mr-2 md hydrated" role="img" aria-label="star"></ion-icon> Graphic desginer </h4>

                    <div class="relative -mx-1 uk-slider" uk-slider="finite: true">
                
                          <div class="uk-slider-container md:px-1 px-2 py-3">
                            <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
                                <li tabindex="-1" class="uk-active">
                                    <a href="episodes-watch.html">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="../assets/images/episodes/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.html" class="font-semibold line-clamp-2">  The PHP Singleton class  </a>
                                        <p class="text-sm pt-1"> By <a href="#"> Stella Johnson  </a> </p>
                                    </div>
                                </li>
                                <li tabindex="-1" class="uk-active">
                                    <a href="episodes-watch.html">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="../assets/images/episodes/img-4.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Larafel $ fliepond   </a>
                                        <p href="episodes-watch.html" class="text-sm pt-1"> By <a href="#"> Jesse Stevens </a> </p>
                                    </div>
                                </li>
                                <li tabindex="-1" class="uk-active">
                                    <a href="episodes-watch.html">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="../assets/images/episodes/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Creating a Laravel Package   </a>
                                        <p class="text-sm pt-1"> By <a href="#"> John Michael </a> </p>
                                    </div>
                                </li>
                                <li tabindex="-1" class="">
                                    <a href="episodes-watch.html">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="../assets/images/episodes/img-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Creating sticky in HTML   </a>
                                        <p class="text-sm pt-1"> By <a href="#"> Monroe Parker </a> </p>
                                    </div>
                                </li> 
                            </ul>
                
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous">  <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline"></ion-icon> </a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward-outline" role="img" class="md hydrated" aria-label="chevron forward outline"></ion-icon></a>
                
                          </div>
                
                    </div>

                </div>
                
                <!--  Categories -->
                <div>

                    <div class="sm:mb-6 mb-3 flex items-end justify-between">
                        <div>
                            <h2 class="text-xl font-semibold"> Categories </h2>
                            <p class="font-medium text-gray-500 leading-6"> Find a topic by browsing top categories. </p>
                        </div>
                        <a href="#" class="text-blue-500 sm:block hidden"> See all </a>
                    </div> 
    
                    <div class="relative -mt-3 uk-slider" uk-slider="finite: true">
                    
                        <div class="uk-slider-container px-1 py-3">
                            <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
                                <li tabindex="-1" class="uk-active">
                                    <div class="rounded-md overflow-hidden relative w-full h-36">
                                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                        </div>
                                        <img src="../assets/images/category/design.jpg" class="absolute w-full h-full object-cover" alt="">
                                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Design </div>
                                    </div>
                                </li>
                                <li tabindex="-1" class="uk-active">
                                    <div class="rounded-md overflow-hidden relative w-full h-36">
                                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                        </div>
                                        <img src="../assets/images/category/marketing.jpg" class="absolute w-full h-full object-cover" alt="">
                                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Marketing </div>
                                    </div>
                                </li>
                                <li tabindex="-1" class="uk-active">
                                    <div class="rounded-md overflow-hidden relative w-full h-36">
                                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                        </div>
                                        <img src="../assets/images/category/it-and-software.jpg" class="absolute w-full h-full object-cover" alt="">
                                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Software</div>
                                    </div>
                                </li>
                                <li tabindex="-1" class="uk-active">
                                    <div class="rounded-md overflow-hidden relative w-full h-36">
                                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                        </div>
                                        <img src="../assets/images/category/music.jpg" class="absolute w-full h-full object-cover" alt="">
                                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Music </div>
                                    </div>
                                </li>
                                <li tabindex="-1" class="">
                                    <div class="rounded-md overflow-hidden relative w-full h-36">
                                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                        </div>
                                        <img src="../assets/images/category/business.jpg" class="absolute w-full h-full object-cover" alt="">
                                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Travel </div>
                                    </div>
                                </li>
                                <li tabindex="-1">
                                    <div class="rounded-md overflow-hidden relative w-full h-36">
                                        <div class="absolute w-full h-3/4 -bottom-12 bg-gradient-to-b from-transparent to-gray-800 z-10">
                                        </div>
                                        <img src="../assets/images/category/development.jpg" class="absolute w-full h-full object-cover" alt="">
                                        <div class="absolute bottom-0 w-full p-3 text-white z-20 font-semibold text-lg"> Development </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
                        <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>
    
                    </div>

                </div>

                <div class="tube-card p-4" uk-toggle="cls: tube-card p-4; mode: media; media: 640">

                    <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-2"> <ion-icon name="star" class="mr-2 md hydrated" role="img" aria-label="star"></ion-icon> Graphic desginer </h4>

                    <div class="relative -mx-1 uk-slider" uk-slider="finite: true">
                
                          <div class="uk-slider-container md:px-1 px-2 py-3">
                            <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid" style="transform: translate3d(0px, 0px, 0px);">
                                <li tabindex="-1" class="uk-active">
                                    <a href="episodes-watch.html">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="../assets/images/episodes/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.html" class="font-semibold line-clamp-2">  The PHP Singleton class  </a>
                                        <p class="text-sm pt-1"> By <a href="#"> Stella Johnson </a> </p>
                                    </div>
                                </li>
                                <li tabindex="-1" class="uk-active">
                                    <a href="episodes-watch.html">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="../assets/images/episodes/img-4.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Larafel $ fliepond   </a>
                                        <p class="text-sm pt-1"> By <a href="#"> Jesse Stevens </a> </p>
                                    </div>
                                </li>
                                <li tabindex="-1" class="uk-active">
                                    <a href="episodes-watch.html">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="../assets/images/episodes/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Creating a Laravel Package   </a>
                                        <p class="text-sm pt-1"> By <a href="#"> John Michael </a> </p>
                                    </div>
                                </li>
                                <li tabindex="-1" class="">
                                    <a href="episodes-watch.html">
                                        <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                            <img src="../assets/images/episodes/img-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                            <img src="../assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                        </div>
                                    </a>
                                    <div class="pt-3">
                                        <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Creating sticky in HTML   </a>
                                        <p class="text-sm pt-1"> By <a href="#"> Monroe Parker </a> </p>
                                    </div>
                                </li> 
                            </ul>
                
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white uk-invisible" href="#" uk-slider-item="previous">  <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline"></ion-icon> </a>
                            <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward-outline" role="img" class="md hydrated" aria-label="chevron forward outline"></ion-icon></a>
                
                          </div>
                
                    </div>

                </div> 

            </div>

            
        </div>
@endsection