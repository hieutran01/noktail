@extends('layouts.master')
@section('content')
<div class="main_content">
    <div class="container p-0">

        <div class="bg-blue-600 md:rounded-b-lg md:-mt-8 md:pb-8 md:pt-12 p-8 relative overflow-hidden"
            style="background: #1877f2;">

            <div class="lg:w-9/12 relative z-10">

                <div class="uppercase text-gray-200 mb-2 font-semibold text-sm">Web develpment</div>
                <h1 class="lg:leading-10 lg:text-3xl text-white text-2xl leading-8 font-semibold">The Complete
                    JavaScript From beginning to Experts for advance</h1>
                <p class="lg:text-lg hidden"> Master JavaScript with the most complete course! Projects Excellent
                    course. we explain the core concepts in javascript
                    that are usually glossed over in other courses </p>
                <ul class="flex text-gray-200 gap-4 mt-4 mb-2">
                    <li class="flex items-center">
                        <span class="avg bg-yellow-500 mr-2 px-2 rounded text-white font-semiold"> 4.9 </span>
                        <div class="star-rating text-yellow-400">
                            <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon> <ion-icon
                                name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                            <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon> <ion-icon
                                name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                            <ion-icon name="star-half" role="img" class="md hydrated" aria-label="star half"></ion-icon>
                        </div>
                    </li>
                    <li> <ion-icon name="people-circle-outline" role="img" class="md hydrated"
                            aria-label="people circle outline"></ion-icon> 1200 Enerolled </li>
                </ul>
                <ul class="lg:flex items-center text-gray-200">
                    <li> Created by <a href="#" class="text-white fond-bold hover:underline hover:text-white"> Stella
                            Johnson </a> </li>
                    <li> <span class="lg:block hidden mx-3 text-2xl">·</span> </li>
                    <li> Last updated 10/2019</li>
                </ul>

            </div>

            <img src="../assets/images/courses/course-intro.png" alt=""
                class="-bottom-1/2 absolute right-0 hidden lg:block">

        </div>

        <div class="lg:flex lg:space-x-4 mt-4">
            <div class="lg:w-8/12 space-y-4">

                <div class="tube-card z-20 mb-4 overflow-hidden uk-sticky"
                    uk-sticky="cls-active:rounded-none ; media: 992 ; offset:70" style="">
                    <nav class="cd-secondary-nav extanded ppercase nav-small">
                        <ul class="space-x-3" uk-scrollspy-nav="closest: li; scroll: true">
                            <li class="uk-active"><a href="#Overview" uk-scroll="">Overview</a></li>
                            <li class=""><a href="#curriculum" uk-scroll="">Curriculum</a></li>
                            <li class=""><a href="#faq" uk-scroll="">FAQ</a></li>
                            <li class=""><a href="#announcement">Announcement</a></li>
                            <li class=""><a href="#reviews">Reviews</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="uk-sticky-placeholder" style="height: 59px; margin: 0px 0px 16px;" hidden=""></div>


                <!-- course description -->
                <div class="tube-card p-6" id="Overview">

                    <div class="space-y-7">
                        <div>
                            <h3 class="text-lg font-semibold mb-3"> Description </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut
                                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna
                                aliquam erat
                                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                lobortis
                                nisl ut aliquip ex ea commodo consequat
                            </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-3"> What You’ll Learn </h3>
                            <ul class="grid md:grid-cols-2">
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Setting up the environment</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Advanced HTML Practices</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Build a portfolio website</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Responsive Designs</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Understand HTML Programming</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Code HTML</li>
                                <li> <i class="uil-check text-xl font-bold mr-2"></i>Start building beautiful websites
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-3"> Requirements</h3>
                            <ul class="list-disc ml-5 space-y-1 mt-3">
                                <li>Any computer will work: Windows, macOS or Linux</li>
                                <li>Basic programming HTML and CSS.</li>
                                <li>Basic/Minimal understanding of JavaScript</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-medium text-lg mb-2"> Here is exactly what we cover in this course: </h3>
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                consequat.
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                Ut
                                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                ut
                                aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                </div>

                <!-- course Curriculum -->
                <div id="curriculum">
                    <h3 class="mb-4 text-xl font-semibold"> Course Curriculum </h3>
                    <ul uk-accordion="multiple: true" class="tube-card p-4 divide-y space-y-3 uk-accordion">

                        <li class="uk-open">
                            <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                <div class="mb-1 text-sm font-medium"> Section 1 </div> Html Introduction
                            </a>
                            <div class="uk-accordion-content mt-3 text-base" aria-hidden="false">

                                <ul class="course-curriculum-list font-medium">
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon> Introduction <span
                                            class="text-sm ml-auto"> 4 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon> What is HTML <span
                                            class="text-sm ml-auto"> 5 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon>
                                        What is a Web page? <span class="text-sm ml-auto"> 8 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon>
                                        Your First Web Page
                                        <a href="#trailer-modal" class="bg-gray-200 ml-4 px-2 py-1 rounded-full text-xs"
                                            uk-toggle=""> Preview </a>
                                        <span class="text-sm ml-auto"> 4 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon>
                                        Brain Streak <span class="text-sm ml-auto"> 5 min </span>
                                    </li>
                                </ul>

                            </div>
                        </li>
                        <li class="pt-2">
                            <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                <div class="mb-1 text-sm font-medium"> Section 2 </div> Your First webpage
                            </a>
                            <div class="uk-accordion-content mt-3 text-base" hidden="" aria-hidden="true">

                                <ul class="course-curriculum-list font-medium">
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon> Headings
                                        <span class="text-sm ml-auto"> 4 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon> Paragraphs
                                        <span class="text-sm ml-auto"> 5 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon>
                                        Emphasis and Strong Tag
                                        <span class="text-sm ml-auto"> 8 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon>
                                        Brain Streak
                                        <a href="#trailer-modal" class="bg-gray-200 ml-4 px-2 py-1 rounded-full text-xs"
                                            uk-toggle=""> Preview </a>
                                        <span class="text-sm ml-auto"> 4 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon>
                                        Live Preview Feature
                                        <span class="text-sm ml-auto"> 5 min </span>
                                    </li>
                                </ul>

                            </div>
                        </li>
                        <li class="pt-2">
                            <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                <div class="mb-1 text-sm font-medium"> Section 3 </div> Build Complete Webste
                            </a>
                            <div class="uk-accordion-content mt-3 text-base" hidden="" aria-hidden="true">

                                <ul class="course-curriculum-list font-medium">
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon> The paragraph tag
                                        <span class="text-sm ml-auto"> 4 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon> The break tag
                                        <span class="text-sm ml-auto"> 5 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon>
                                        Headings in HTML
                                        <span class="text-sm ml-auto"> 8 min </span>
                                    </li>
                                    <li class="hover:bg-gray-200 p-2 flex rounded">
                                        <ion-icon name="play-circle" class="text-2xl mr-2 md hydrated" role="img"
                                            aria-label="play circle"></ion-icon>
                                        Bold, Italics Underline
                                        <a href="#trailer-modal" class="bg-gray-200 ml-4 px-2 py-1 rounded-full text-xs"
                                            uk-toggle=""> Preview </a>
                                        <span class="text-sm ml-auto"> 4 min </span>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>

                <!-- course Faq -->
                <div id="faq" class="tube-card p-5">
                    <h3 class="text-lg font-semibold mb-3"> Course Faq </h3>
                    <ul uk-accordion="multiple: true" class="divide-y space-y-3 uk-accordion">
                        <li class="bg-gray-100 px-4 py-3 rounded-md uk-open">
                            <a class="uk-accordion-title font-semibold text-base" href="#"> Html Introduction </a>
                            <div class="uk-accordion-content mt-3" aria-hidden="false">
                                <p> The primary goal of this quick start guide is to introduce you to
                                    Unreal
                                    Engine 4`s (UE4) development environment. By the end of this guide,
                                    you`ll
                                    know how to set up and develop C++ Projects in UE4. This guide shows
                                    you
                                    how
                                    to create a new Unreal Engine project, add a new C++ class to it,
                                    compile
                                    the project, and add an instance of a new class to your level. By
                                    the
                                    time
                                    you reach the end of this guide, you`ll be able to see your
                                    programmed
                                    Actor
                                    floating above a table in the level. </p>
                            </div>
                        </li>
                        <li class="bg-gray-100 px-4 py-3 rounded-md">
                            <a class="uk-accordion-title font-semibold text-base" href="#"> Your First webpage</a>
                            <div class="uk-accordion-content mt-3" hidden="" aria-hidden="true">
                                <p> The primary goal of this quick start guide is to introduce you to
                                    Unreal
                                    Engine 4`s (UE4) development environment. By the end of this guide,
                                    you`ll
                                    know how to set up and develop C++ Projects in UE4. This guide shows
                                    you
                                    how
                                    to create a new Unreal Engine project, add a new C++ class to it,
                                    compile
                                    the project, and add an instance of a new class to your level. By
                                    the
                                    time
                                    you reach the end of this guide, you`ll be able to see your
                                    programmed
                                    Actor
                                    floating above a table in the level. </p>
                            </div>
                        </li>
                        <li class="bg-gray-100 px-4 py-3 rounded-md">
                            <a class="uk-accordion-title font-semibold text-base" href="#"> Some Special Tags </a>
                            <div class="uk-accordion-content mt-3" hidden="" aria-hidden="true">
                                <p> The primary goal of this quick start guide is to introduce you to
                                    Unreal
                                    Engine 4`s (UE4) development environment. By the end of this guide,
                                    you`ll
                                    know how to set up and develop C++ Projects in UE4. This guide shows
                                    you
                                    how
                                    to create a new Unreal Engine project, add a new C++ class to it,
                                    compile
                                    the project, and add an instance of a new class to your level. By
                                    the
                                    time
                                    you reach the end of this guide, you`ll be able to see your
                                    programmed
                                    Actor
                                    floating above a table in the level. </p>
                            </div>
                        </li>
                        <li class="bg-gray-100 px-4 py-3 rounded-md">
                            <a class="uk-accordion-title font-semibold text-base" href="#"> Html Introduction </a>
                            <div class="uk-accordion-content mt-3" hidden="" aria-hidden="true">
                                <p> The primary goal of this quick start guide is to introduce you to
                                    Unreal
                                    Engine 4`s (UE4) development environment. By the end of this guide,
                                    you`ll
                                    know how to set up and develop C++ Projects in UE4. This guide shows
                                    you
                                    how
                                    to create a new Unreal Engine project, add a new C++ class to it,
                                    compile
                                    the project, and add an instance of a new class to your level. By
                                    the
                                    time
                                    you reach the end of this guide, you`ll be able to see your
                                    programmed
                                    Actor
                                    floating above a table in the level. </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- course Announcement -->
                <div id="announcement" class="tube-card p-5">
                    <h3 class="text-base font-semibold mb-3"> Announcement </h3>

                    <div class="flex items-center gap-x-4 mb-5">
                        <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                        <div>
                            <h4 class="-mb-1 text-base"> Stella Johnson</h4>
                            <span class="text-sm"> Instructor <span class="text-gray-500"> 1 year ago </span> </span>
                        </div>
                    </div>

                    <h4 class="leading-8 text-xl"> Nam liber tempor cum soluta nobis eleifend option congue imperdiet
                        doming id quod .</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam
                        liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                        placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        commodo consequat.</p>

                </div>

                <!-- course Reviews -->
                <div id="reviews" class="tube-card p-5">
                    <h3 class="text-lg font-semibold mb-3"> Reviews (4610) </h3>

                    <div class="flex space-x-5 mb-8">
                        <div class="lg:w-1/4 w-full">
                            <div
                                class="bg-blue-100 space-y-1 py-5 rounded-md border border-blue-200 text-center shadow-xs">
                                <h1 class="text-5xl font-semibold"> 4.8</h1>
                                <div class="flex justify-center">
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                        aria-label="star"></ion-icon>
                                </div>
                                <h5 class="mb-0 mt-1 text-sm"> Course Rating</h5>
                            </div>
                        </div>
                        <!-- progress -->
                        <div class="w-2/4 hidden lg:flex flex-col justify-center space-y-5">

                            <div class="w-full h-2.5 rounded-lg bg-gray-300 shadow-xs relative">
                                <div class="w-11/12 h-full rounded-lg bg-gray-800"> </div>
                            </div>
                            <div class="w-full h-2.5 rounded-lg bg-gray-300 shadow-xs relative">
                                <div class="w-4/5 h-full rounded-lg bg-gray-800"> </div>
                            </div>
                            <div class="w-full h-2.5 rounded-lg bg-gray-300 shadow-xs relative">
                                <div class="w-3/5 h-full rounded-lg bg-gray-800"> </div>
                            </div>
                            <div class="w-full h-2.5 rounded-lg bg-gray-300 shadow-xs relative">
                                <div class="w-3/6 h-full rounded-lg bg-gray-800"> </div>
                            </div>
                            <div class="w-full h-2.5 rounded-lg bg-gray-300 shadow-xs relative">
                                <div class="w-1/3 h-full rounded-lg bg-gray-800"> </div>
                            </div>

                        </div>
                        <!-- stars -->
                        <div class="w-1/4 hidden lg:flex flex-col justify-center space-y-2">

                            <div class="flex justify-center items-center">
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <span class="ml-2"> 95 %</span>
                            </div>
                            <div class="flex justify-center items-center">
                                <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                    aria-label="star"></ion-icon> <ion-icon name="star" role="img" class="md hydrated"
                                    aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <span class="ml-2"> 85 %</span>
                            </div>
                            <div class="flex justify-center items-center">
                                <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                    aria-label="star"></ion-icon> <ion-icon name="star"
                                    class="text-gray-300 md hydrated" role="img" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <span class="ml-2"> 60 %</span>
                            </div>
                            <div class="flex justify-center items-center">
                                <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                    aria-label="star"></ion-icon> <ion-icon name="star"
                                    class="text-gray-300 md hydrated" role="img" aria-label="star"></ion-icon>
                                <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                    aria-label="star"></ion-icon> <ion-icon name="star" role="img" class="md hydrated"
                                    aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <span class="ml-2"> 50 %</span>
                            </div>
                            <div class="flex justify-center items-center">
                                <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                    aria-label="star"></ion-icon> <ion-icon name="star"
                                    class="text-gray-300 md hydrated" role="img" aria-label="star"></ion-icon>
                                <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                    aria-label="star"></ion-icon> <ion-icon name="star"
                                    class="text-gray-300 md hydrated" role="img" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <span class="ml-2"> 35 %</span>
                            </div>

                        </div>
                    </div>

                    <div class="space-y-4 my-5">

                        <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                            <img src="../assets/images/avatars/avatar-4.jpg" alt=""
                                class="rounded-full shadow w-12 h-12">
                            <div
                                class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                            </div>
                            <div>
                                <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                                <span class="text-gray-700 text-sm"> 14th, April 2021 </span>
                                <p class="mt-3 md:ml-0 -ml-16">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                    tation
                                    ullamcorper suscipit
                                </p>
                            </div>
                        </div>

                        <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                            <div
                                class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                    aria-label="star"></ion-icon>
                            </div>
                            <img src="../assets/images/avatars/avatar-2.jpg" alt=""
                                class="rounded-full shadow w-12 h-12">
                            <div>
                                <h4 class="text-base m-0 font-semibold"> Alex Dolgove</h4>
                                <span class="text-gray-700 text-sm"> 16th, May 2021 </span>
                                <p class="mt-3 md:ml-0 -ml-16">
                                    elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                    ipsum dolor sit
                                    amet, consectetuer adipiscing elit
                                </p>
                            </div>
                        </div>

                        <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md lg:ml-16">
                            <div
                                class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                <ion-icon name="star" class="text-gray-300 md hydrated" role="img"
                                    aria-label="star"></ion-icon>
                            </div>
                            <img src="../assets/images/avatars/avatar-3.jpg" alt=""
                                class="rounded-full shadow w-12 h-12">
                            <div>
                                <h4 class="text-base m-0 font-semibold"> Trap Nation</h4>
                                <span class="text-gray-700 text-sm"> 16th, May 2021 </span>
                                <p class="mt-3 md:ml-0 -ml-16">
                                    elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                    ipsum dolor sit
                                    amet, consectetuer
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="flex justify-center mt-9">
                        <a href="#" class="bg-gray-50 border hover:bg-gray-100 px-4 py-1.5 rounded-full text-sm">More
                            Comments ..</a>
                    </div>

                </div>


            </div>

            <!-- course intro Sidebar -->
            <div class="lg:w-4/12 space-y-4 lg:mt-0 mt-4">

                <div uk-sticky="top:600;offset:; offset:90 ; media: 1024" class="uk-sticky" style="">
                    <div class="tube-card p-5 uk-sticky" uk-sticky="top:600;offset:; offset:90 ; media: @s" style="">

                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col space-y-2">
                                <div class="text-3xl font-semibold"> 3.2 </div>
                                <div> Hours </div>
                                <ion-icon name="time" class="text-lg md hydrated" hidden="" role="img"
                                    aria-label="time"></ion-icon>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <div class="text-3xl font-semibold"> 12,140</div>
                                <div> Students </div>
                                <ion-icon name="people-circle" class="text-lg md hydrated" hidden="" role="img"
                                    aria-label="people circle"></ion-icon>
                            </div>
                        </div>
                        <hr class="-mx-5 border-gray-200 my-4">
                        <h4 hidden=""> COURSE INCLUDES</h4>

                        <div class="-m-5 divide-y divide-gray-200 text-sm">
                            <div class="flex items-center px-5 py-3"> <ion-icon name="play-outline"
                                    class="text-2xl mr-2 md hydrated" role="img" aria-label="play outline"></ion-icon>
                                13 hours on-demand video </div>
                            <div class="flex items-center px-5 py-3"> <ion-icon name="key-outline"
                                    class="text-2xl mr-2 md hydrated" role="img" aria-label="key outline"></ion-icon>
                                Full lifetime access </div>
                            <div class="flex items-center px-5 py-3"> <ion-icon name="download-outline"
                                    class="text-2xl mr-2 md hydrated" role="img"
                                    aria-label="download outline"></ion-icon> 42 downloadable resources </div>
                            <div class="flex items-center px-5 py-3"> <ion-icon name="help-circle-outline"
                                    class="text-2xl mr-2 md hydrated" role="img"
                                    aria-label="help circle outline"></ion-icon>Assignments </div>
                            <div class="flex items-center px-5 py-3"> <ion-icon name="medal-outline"
                                    class="text-2xl mr-2 md hydrated" role="img"
                                    aria-label="medal outline"></ion-icon>Certificate of Completion </div>
                        </div>

                    </div>
                    <div class="uk-sticky-placeholder" style="height: 344px; margin: 0px;" hidden=""></div>
                    <div class="mt-4">
                        <a href="course-watch.html"
                            class="flex items-center justify-center h-9 px-6 rounded-md bg-blue-600 text-white"> Enroll
                            Now </a>
                    </div>
                </div>
                <div class="uk-sticky-placeholder" style="height: 396px; margin: 0px;" hidden=""></div>

                <div class="tube-card p-5">
                    <div class="flex items-start justify-between">
                        <div>
                            <h4 class="text-lg -mb-0.5 font-semibold"> Related Courses </h4>
                        </div>
                        <a href="#" class="text-blue-600"> <ion-icon name="refresh"
                                class="-mt-0.5 -mr-2 hover:bg-gray-100 p-1.5 rounded-full text-lg md hydrated"
                                role="img" aria-label="refresh"></ion-icon> </a>
                    </div>
                    <div class="p-1">
                        <a href="#" class="-mx-3 block hover:bg-gray-100 p-2 rounded-md">
                            <div class="flex items-center space-x-3">
                                <img src="../assets/images/courses/img-2.jpg" alt=""
                                    class="h-12 object-cover rounded-md w-12">
                                <div class="line-clamp-2 text-sm font-medium">
                                    The Complete JavaScript From beginning to Experts for advance
                                </div>
                            </div>
                        </a>
                        <a href="#" class="-mx-3 block hover:bg-gray-100 p-2 rounded-md">
                            <div class="flex items-center space-x-3">
                                <img src="../assets/images/courses/img-4.jpg" alt=""
                                    class="h-12 object-cover rounded-md w-12">
                                <div class="line-clamp-2 text-sm font-medium">
                                    The Complete JavaScript From beginning to Experts for advance
                                </div>
                            </div>
                        </a>
                        <a href="#" class="-mx-3 block hover:bg-gray-100 p-2 rounded-md">
                            <div class="flex items-center space-x-3">
                                <img src="../assets/images/courses/img-3.jpg" alt=""
                                    class="h-12 object-cover rounded-md w-12">
                                <div class="line-clamp-2 text-sm font-medium">
                                    The Complete JavaScript From beginning to Experts for advance
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="#"
                        class="hover:bg-gray-100 -mb-1.5 mt-0.5 h-8 flex items-center justify-center rounded-md text-blue-400 text-sm">
                        See all
                    </a>
                </div>

            </div>
        </div>

    </div>

    <!-- footer -->
    <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
        <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
            <p class="capitalize font-medium"> © copyright 2021 Courseplus</p>
            <div class="lg:flex space-x-4 text-gray-700 capitalize hidden">
                <a href="#"> About</a>
                <a href="#"> Help</a>
                <a href="#"> Terms</a>
                <a href="#"> Privacy</a>
            </div>
        </div>
    </div>

</div>
@endsection