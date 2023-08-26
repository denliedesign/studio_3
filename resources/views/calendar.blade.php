@extends('layouts.app')

    @section('title', 'Calendar | Studio 3 Dance | Plano, Texas')
    @section('description', 'Our easy-to-follow infographic gives you everything to know to be ready for your child\'s first dance class at S3D!')
@section('content')
    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <section id="enrollment" class="container my-5" style="font-size: 1.25em;">
        <div class="stand-out text-capitalize text-center">
            Fall 2023-24 registration open now!
        </div>
        <p class="text-center">
            Fall classes begin August 5th
        </p>
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="text-left">
                <div>
                    <span class="stand-out">Upcoming Dates</span>
{{--                    <span class="purple-txt">February 20</span> - S3D is OPEN for President's Day--}}
{{--                    <br>--}}
{{--                    <span class="purple-txt">March 6 - 11</span> - S3D is CLOSED for PISD Spring Break--}}
{{--                    <br>--}}
{{--                    <span class="purple-txt">March 20 - May 13</span> - Spring Mini Mester Classes begin--}}
{{--                    <br>--}}
{{--                    <span class="purple-txt">April 8</span> - S3D is closed for Easter Weekend--}}
{{--                    <br>--}}
{{--                    <span class="purple-txt">May 25</span> - Last Day of Spring Semester Classes--}}
{{--                    <br>--}}
{{--                    <span class="purple-txt">May 30 - 31</span> - Individual Recital Photos @ Studio 3--}}
{{--                    <br>--}}
{{--                    <span class="purple-txt">June 1 - 4</span> - Spring Recitals at The Eisemann in RIchardson--}}
{{--                    <br>--}}
                    <br><span class="purple-txt">August 3</span> - Back to Dance Night
                    <br><span class="purple-txt">August 5</span> - Fall classes begin
                    <br><span class="purple-txt">September 1-4</span> - Closed for Labor Day Weekend
                    <br><span class="purple-txt">October 9-13</span> - Closed for Fall Break (along with PISD)
                    <br><span class="purple-txt">October 22</span> - Snow Queen Tea
                    <br><span class="purple-txt">October 28</span> - Trunk or Treat
                    <br><span class="purple-txt">October 31</span> - Closed for Halloween
                    <br><span class="purple-txt">November 11-12</span> - Snow Queen Ballet
                    <br><span class="purple-txt">November 20-25</span> - Closed for Thanksgiving week
                    <br><span class="purple-txt">December 2</span> - Plano Christmas parade
                    <br><span class="purple-txt">December 22 - January 7</span> - Closed for Winter Break

                </div>
            </div>
        </div>
    </section>

@endsection
