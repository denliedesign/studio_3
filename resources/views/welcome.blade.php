{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Studio 3 Dance | Plano, Texas</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */--}}
{{--            /*html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}*/--}}
{{--        </style>--}}

{{--        <style>--}}
{{--            body {--}}
{{--                font-family: 'Nunito';--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body class="antialiased">--}}
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}

    <x-app-layout>

        <img src="/images/studio-3-head.JPG" alt="ballet girls on stage in tutus" class="img-fluid">

        <section id="vision" class="container my-5">
            <div class="d-flex align-items-center justify-content-center">
                <div class="gradient-turq rounded"></div>
                <div class="row">
                    <div class="col-sm">
                        <div class="shadow p-5 mx-sm-3 my-3 rounded bg-white" style="max-width: 500px;">
                            <span class="stand-out">Studio 3 Dance offers a diverse schedule of dance classes for children ages 18 months and up.</span>
                            Our classes are taught by skilled teachers who take pride in creating a learning experience that is positive and rewarding for dancers of all ages and ability levels. Our costumes and choreography are always age-appropriate.  But Studio 3 is More Than Just Great Dancing. Our dancers go beyond technique and poise to develop important life skills - learning to be respectful, confident and conscientious young people.  Competition and performance opportunities are available for those interested.
                        </div>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <img src="/images/studio-3-main.JPG" alt="dancers in costume with teacher" style="max-height: 350px; width: auto;" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>

        <section id="enrollment" class="container mb-5 pb-5">
            <div id="mask-update" class="p-3 m-3 rotated-bg-blue rounded">
                <p class="rounded shadow rerotate p-3 m-3" style="background: white;">
                    Effective May 25, 2021, it is now <strong>optional</strong> to wear masks while at Studio 3 Dance.  Families can now choose for themselves whether or not they and their children will wear a mask to dance class and summer programs.  Studio 3 Dance staff will have the same mask optional option.  We know that some will choose to wear masks and others will not. All are welcome.
                    <br><br>
                    Our lobby is open for drop off and pick up for dancers ages 8 and under.  ALL dancers and parents will enter through the main entrance door #1.  We ask that you do not arrive more than 2-3 minutes before class and that you pick your dancer up and leave promptly.
                    <br><br>
                    Parents of older dancers with questions are welcome to come in as needed.
                    <br><br>
                    Parents will not be allowed to stay in the studio to observe class for now to avoid large crowds gathering in the hallways. However, they can watch for a few minutes at drop off and pick up. <span style="color: blue;">Look for observation weeks by instructors starting in September. </span>
                    <br><br>
                    Older dancers with a <strong><em>short break</em></strong> between classes will be allowed to wait inside the studio.
                </p>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-5">
                <div class="text-left" style="font-size: 1.25em;">
                    <div class="row">
                        <div class="col-sm-7">
                            <span class="stand-out">Register now for Fall 2021 - Spring 2022</span>
                            <br>Our 24th Dance Season began August 9th
                            <br><br>
                            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">
                                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
                            </a>
                        </div>
                        <div class="col-sm-5" style="border-left: 1px solid #747474">
                            <span class="stand-out">Upcoming Dates</span>
                            <br>
                            <span class="purple-txt">September 4th - 6th</span>  CLOSED for Labor Day Weekend
                            <br>
                            <span class="purple-txt">October 11th</span> PISD is closed but Studio 3 is OPEN COLUMBUS DAY.
                            <br>
                            <span class="purple-txt">October 30th</span> Trunk or Treat - Studio 3
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="age-groups" class="my-5 py-5 mx-4">
            <div class="container">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                    <div class="col px-2">
                        <a href="/classes"><img src="/images/main-kinder-3.jpg" alt="preschool girl" class="img-fluid shadow"></a>
                        <h3 class="text-center fw-bold">Ages 2-5</h3>
                    </div>
                    <div class="col px-2">
                        <a href="/classes"><img src="/images/main-elementary-3.jpg" alt="elementary school girl" class="img-fluid shadow"></a>
                        <h3 class="text-center fw-bold">K-2nd Grade</h3>
                    </div>
                    <div class="col px-2">
                        <a href="/classes"><img src="/images/main-leveled-3.jpg" alt="advanced girl" class="img-fluid shadow"></a>
                        <h3 class="text-center fw-bold">3rd Grade & Up</h3>
                    </div>
                    <div class="col px-2">
                        <a href="/performances"><img src="/images/main-performances-1.jpg" alt="snow queen performance" class="img-fluid shadow"></a>
                        <h3 class="text-center fw-bold">Performances</h3>
                    </div>
                    <div class="col px-2">
                        <a href="/competition"><img src="/images/main-teams-2.jpg" alt="competitive teams" class="img-fluid shadow"></a>
                        <h3 class="text-center fw-bold">Teams</h3>
                    </div>
                </div>
            </div>
        </section>

        <div class="my-5 py-5 container">
            <div class="row my-2">
                <div class="col-sm text-center m-1 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front rounded shadow">
                            <p class="fw-bold" style="font-size: 1.5em;">Studio <span class="font-red">3</span> Dance is a...</p>
                            <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid" style="max-height: 150px;">
                            <div class="d-flex justify-content-end">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                        <div class="pop-bg-blue flip-card-back rounded shadow p-3">
                            <p class="fw-bold mb-0" style="font-size: 1.25em;">What does that mean?</p>
                            <p class="mt-0">MTJGD is a licensed affiliation of dance studios that subscribe to a high standard of dance instruction and management practices. We are united in the belief that dance has the power to change lives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm text-center m-1 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front rounded shadow">
                            <p class="fw-bold" style="font-size: 1.5em;">Studio <span class="font-red">3</span> Dance is a...</p>
                            <img src="/images/safer-studio-logo.png" alt="more than just great dancing logo" class="img-fluid" style="max-height: 150px;">
                            <div class="d-flex justify-content-end">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                        <div class="pop-bg-blue flip-card-back rounded shadow p-3">
                            <p class="fw-bold mb-0" style="font-size: 1.25em;">What does that mean?</p>
                            <p class="mt-0">
                                Wellness Checks For Staff
                                <br>Enhanced Cleaning Procedures
                                <br>Social Distancing Practices
                                <br>Touch-less Payment Options
                                <br>Gradual Re-Opening
                                <br>Continuous Communication
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm text-center m-1 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front rounded shadow">
                            <p class="fw-bold" style="font-size: 1.5em;">Studio <span class="font-red">3</span> Dance is a...</p>
                            <img src="/images/ypad-logo.png" alt="more than just great dancing logo" class="img-fluid" style="max-height: 150px;">
                            <div class="d-flex justify-content-end">
                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>
                            </div>
                        </div>
                        <div class="pop-bg-blue flip-card-back rounded shadow p-3">
                            <p class="fw-bold mb-0" style="font-size: 1.25em;">What does that mean?</p>
                            <p class="mt-0">To earn the designation, studios must complete training in CPR, First Aid, dance education and safety injury prevention, emergency preparedness, abuse awareness and prevention, dancer wellness and development, social media safety, nutrition and disordered eating, bullying and conflict resolution.</p>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row my-2">--}}
{{--                <div class="col-sm text-center m-1 flip-card">--}}
{{--                    <div class="flip-card-inner">--}}
{{--                        <div class="flip-card-front rounded shadow">--}}
{{--                            <p class="fw-bold" style="font-size: 1.5em;">Studio <span class="font-red">3</span> Dance is a...</p>--}}
{{--                            <img src="/images/tech-enabled-logo.png" alt="more than just great dancing logo" class="img-fluid" style="max-height: 150px;">--}}
{{--                            <div class="d-flex justify-content-end">--}}
{{--                                <ion-icon name="information-circle-outline" class="info-icon"></ion-icon>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="pop-bg-blue flip-card-back rounded shadow p-3">--}}
{{--                            <p class="fw-bold mb-0" style="font-size: 1.25em;">What does that mean?</p>--}}
{{--                            <p class="mt-0">S3D is a tech-enabled studio with live streaming equipment for our dance rooms for students to participate in class via our distance learning format as well as the opportunity for parents to watch from their cars as our lobby is closed.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
        </div>

        <section id="acroarts" class="container mb-5 pb-5">
            <div class="d-flex align-items-center justify-content-center">
                <div class="gradient-turq rounded"></div>
                <div class="row">
                    <div class="col-sm">
                        <div class="shadow p-5 mx-sm-5 my-5 rounded bg-white" style="max-width: 500px;">
                            The program is based on safe and effective progressions with proven results in five divisions of AcroDance: Flexibility, Strength, Balancing, Limbering and Tumbling. Simple thoughtful progressions take the beginner preschool level dancer from log rolls and summersaults to the advanced dancer tumbling effortlessly across the stage!
                        </div>
                    </div>
                    <div class="col-sm d-flex align-items-center">
                        <img src="/images/acrobatic-arts-logo.png" alt="ballet" style="max-height: 350px; width: auto;" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>

    </x-app-layout>
