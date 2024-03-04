@extends('layouts.app')

    @section('title', 'Newsletter | Studio 3 Dance | Plano, Texas')
    @section('description', 'See what is new at Studio 3 Dance with our monthly newsletter.')
@section('content')
    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container my-5">
        <h1 class="text-center styled-font fw-bold" style="font-size: 3em;">2023-2024 Newsletters</h1>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
{{--            <x-newsletter image="" month="" preview=""/>--}}
            <x-newsletter image="news-mar-24.jpg" month="march" preview="It’s time to enroll for our next 5 week Mini - Session that starts the first week of April. We’d love to see our previous students as well as some new faces in these Spring Mini-Sessions!"/>
            <x-newsletter image="news-feb-24-a.jpg" month="february" preview="If you missed Monday classes due to the weather on MLK day, you are welcome to schedule a makeup during February BEFORE Spring Break."/>
            <x-newsletter image="news-jan-24-a.png" month="january" preview="Get those dance shoes back out! We’re excited to see everyone the week of Monday, January 8th!"/>
            <x-newsletter image="news-dec-23-a.png" month="december" preview="We hope you enjoy these last few weeks before Winter Break! Read on to find out what we have in store this season"/>
            <x-newsletter image="news-nov-23.png" month="november" preview="This month Studio 3 Dance is getting ramped up for the holiday season! See for involvement opportunities and seasonal breaks."/>
            <x-newsletter image="news-oct-23.png" month="october" preview="The month of October is an exciting time for Studio 3 Dance! Get ready to mark your calendars"/>
            <x-newsletter image="news-sep-23.png" month="september" preview="We’ve had a great month back to dance and hope your classes are going well!  If you are looking to add a new class OR have any questions we can answer for you, please email or call the studio.  We’d love to help!"/>
            <x-newsletter image="news-aug-23.png" month="august" preview="It’s Back to Dance at Studio 3!  We have missed you and look forward to seeing you at our Back to Dance Night at the studio on Thursday, August 3rd from 5:30 - 6:30.  Our staff will be set up with information tables about classes, performance teams, Snow Queen auditions, spin for prizes and more!"/>
        </div>
    </div>

{{--    <div id="general-section">--}}
{{--        <div class="container">--}}
{{--            <h1 class="mt-5">Newsletters</h1>--}}
{{--            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 m-0 p-0">--}}
{{--                <div class="col p-0 rounded shadow news-box">--}}
{{--                    <a href="/news/december" class="de-link">--}}
{{--                        <div>--}}
{{--                            <p class="p-3 bg-blue text-center styled-font">December</p>--}}
{{--                            <p class="px-3 pb-3 text-muted">--}}
{{--                                {!! strip_tags(substr("It's the season of giving! Studio 3 will be collecting items for the Storehouse and Joseph's Coat until December 15th. What to bring?", 0, 150)) . '...' !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col p-0 rounded shadow news-box">--}}
{{--                    <a href="/news/november" class="de-link">--}}
{{--                        <div>--}}
{{--                            <p class="p-3 bg-blue text-center styled-font">November</p>--}}
{{--                            <p class="px-3 pb-3 text-muted">--}}
{{--                                {!! strip_tags(substr("What a great HALLOWEEK of FUN we had at Studio 3. Thanks for dressing up and bringing your friends to share in the fun!", 0, 150)) . '...' !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col p-0 rounded shadow news-box">--}}
{{--                    <a href="/news/october" class="de-link">--}}
{{--                        <div>--}}
{{--                            <p class="p-3 bg-blue text-center styled-font">October</p>--}}
{{--                            <p class="px-3 pb-3 text-muted">--}}
{{--                                {!! strip_tags(substr("October is here and it’s a busy month at Studio 3! Mark your calendars for…", 0, 150)) . '...' !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col p-0 rounded shadow news-box">--}}
{{--                    <a href="/news/september" class="de-link">--}}
{{--                        <div>--}}
{{--                            <p class="p-3 bg-blue text-center styled-font">September</p>--}}
{{--                            <p class="px-3 pb-3 text-muted">--}}
{{--                                {!! strip_tags(substr("Welcome to our new dancers & families and Welcome Back to our returning dancers & families. We have LOVED having YOU back in dance classes!!", 0, 150)) . '...' !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col p-0 rounded shadow news-box">--}}
{{--                    <a href="/news/august" class="de-link">--}}
{{--                        <div>--}}
{{--                            <p class="p-3 bg-blue text-center styled-font">August</p>--}}
{{--                            <p class="px-3 pb-3 text-muted">--}}
{{--                                {!! strip_tags(substr("It is hard to believe we are only 2 weeks from the start of Studio 3’s 24th anniversary season and we hope you will be joining us! We just completed our last week of summer camps, classes and workshops and the studio will have limited office hours through the end of July. However, leave a message at 972-964-3838 or email studio three.dance@gmail.com and we will get back to you asap.", 0, 150)) . '...' !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col p-0 rounded shadow news-box">--}}
{{--                    <a href="/news/april" class="de-link">--}}
{{--                        <div>--}}
{{--                            <p class="p-3 bg-blue text-center styled-font">April</p>--}}
{{--                            <p class="px-3 pb-3 text-muted">--}}
{{--                                {!! strip_tags(substr("Recital plans are firming up with the Eisemann. Specific dates and times for each class’s recital will be emailed over the next week.", 0, 150)) . '...' !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col p-0 rounded shadow news-box">--}}
{{--                    <a href="/news/march" class="de-link">--}}
{{--                        <div>--}}
{{--                            <p class="p-3 bg-blue text-center styled-font">March</p>--}}
{{--                            <p class="px-3 pb-3 text-muted">--}}
{{--                                {!! strip_tags(substr("We hope your family is doing well and survived the crazy Texas weather! We missed having our dancers in class Feb 15 - 20. Due to power outages and dangerous road conditions, the best option was to keep the studio closed, conserve energy and keep our dancers and families safe at home. We will not have the opportunity to make up a full week of classes but will be offering a “Student Appreciation Week” May 24 - 27. More details to come.", 0, 150)) . '...' !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
