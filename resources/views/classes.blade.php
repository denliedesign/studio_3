@extends('layouts.app')

    @section('title', 'Dance Classes in Plano Texas | Studio 3 Dance')
    @section('description', 'Positive learning experience with a diverse schedule of dance classes in Plano for children 18mo+')
@section('content')
    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div id="general-section" class="mt-5 container">
        <h1>Leveled Classes</h1>
{{--        <span>--}}
{{--            Enrollment for the 2020-21 Dance Season will be available online July 28. Classes for fall begin August 10, 2020.--}}
{{--            We will offer enrollment through January 2021 in classes with availability.--}}
{{--            We will offer 9 week Virtual class sessions in the fall for dancers who prefer distance learning at this time.--}}
{{--            If you don't see the class you are looking for, please call the studio and let us assist you.--}}
{{--        </span>--}}
        <p>
            Studio 3 takes pride in creating a learning experience that is positive and rewarding for dancers of all ages & levels. We offer a diverse schedule of dance classes in Plano, TX for children ages 18 months and up year round. Our main dance season runs from mid August through the end of May. To get the most out of your dance year, enrollment at the beginning of our season is best.
{{--            <strong>Fall classes begin August 9th.</strong>--}}
        </p>

        <div class="d-flex justify-content-center">
{{--            <a href="/images/23-fall-b.pdf" target="_blank" class="mx-3">--}}
{{--                <button class="btn btn-lg btn-danger shadow mb-4">View 2023-2024 Classes PDF</button>--}}
{{--            </a>--}}
            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank" class="mx-3">
                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
            </a>
        </div>

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
{{--            <img src="/images/23-fall-1.jpg" alt="class schedule" class="img-fluid">--}}
{{--            <img src="/images/23-fall-2.jpg" alt="class schedule" class="img-fluid">--}}
{{--            <img src="/images/23-fall-3.jpg" alt="class schedule" class="img-fluid">--}}
            <img src="/images/24-fall_page-0004.jpg" alt="class schedule" class="img-fluid">
            <img src="/images/24-fall_page-0005.jpg" alt="class schedule" class="img-fluid">
        </div>

        <div class="d-flex justify-content-center">
{{--            <a href="/images/23-fall-b.pdf" target="_blank" class="mx-3">--}}
{{--                <button class="btn btn-lg btn-danger shadow mb-4">View 2023-2024 Classes PDF</button>--}}
{{--            </a>--}}
            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank" class="mx-3">
                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
            </a>
        </div>

{{--        <section id="enrollment">--}}
{{--            <div id="mask-update" class="p-3 m-3 rotated-bg-blue rounded d-flex justify-content-center">--}}
{{--                <div class="text-center rerotate">--}}
{{--                    <span class="stand-out">8 Week Winter Mini Mester</span>--}}
{{--                    <table class="text-center">--}}
{{--                        <tbody>--}}
{{--                        <tr style="border-bottom: 1px solid #dee2e6;">--}}
{{--                            <td class="p-2"><span class="purple-txt">Jan 8th-Feb 26</span></td>--}}
{{--                            <td class="p-2">Sat 11-11:30</td>--}}
{{--                            <td class="p-2"><span style="font-family: 'Sansita Swashed', cursive;">Dance with Me</span></td>--}}
{{--                            <td class="p-2"><small class="text-muted">18mo-2<sup>1/2</sup></small></td>--}}
{{--                        </tr>--}}
{{--                        <tr style="border-bottom: 1px solid #dee2e6;">--}}
{{--                            <td class="p-2"><span class="purple-txt">Jan 8th-Feb 26th</span></td>--}}
{{--                            <td class="p-2">Sat 11:15-11:45</td>--}}
{{--                            <td class="p-2"><span style="font-family: 'Sansita Swashed', cursive;">Teddy Bear Ballet</span></td>--}}
{{--                            <td class="p-2"><small class="text-muted">2<sup>1/2</sup>-3<sup>1/2</sup></small></td>--}}
{{--                        </tr>--}}
{{--                        <tr style="border-bottom: 1px solid #dee2e6;">--}}
{{--                            <td class="p-2"><span class="purple-txt">Jan 8th-Feb 26th</span></td>--}}
{{--                            <td class="p-2">Sat 11:30-12</td>--}}
{{--                            <td class="p-2"><span style="font-family: 'Sansita Swashed', cursive;">Dance Upon A Star</span></td>--}}
{{--                            <td class="p-2"></td>--}}
{{--                        </tr>--}}
{{--                        <tr style="border-bottom: 1px solid #dee2e6;">--}}
{{--                            <td class="p-2"><span class="purple-txt">Jan 11th-March 1st</span></td>--}}
{{--                            <td class="p-2">Tue 6-7</td>--}}
{{--                            <td class="p-2"><span style="font-family: 'Sansita Swashed', cursive;">Drill Team Prep for Spring Auditions</span></td>--}}
{{--                            <td class="p-2"></td>--}}
{{--                        </tr>--}}
{{--                        <tr style="border-bottom: 1px solid #dee2e6;">--}}
{{--                            <td class="p-2"><span class="purple-txt">Jan 12th-March 2nd</span></td>--}}
{{--                            <td class="p-2">Wed 4:30-5</td>--}}
{{--                            <td class="p-2"><span style="font-family: 'Sansita Swashed', cursive;">Princess Ballet</span></td>--}}
{{--                            <td class="p-2"><small class="text-muted">4-6yr</small></td>--}}
{{--                        </tr>--}}
{{--                        <tr style="border-bottom: 1px solid #dee2e6;">--}}
{{--                            <td class="p-2"><span class="purple-txt">Jan 13th-March 3rd</span></td>--}}
{{--                            <td class="p-2">Thu 6-6:45</td>--}}
{{--                            <td class="p-2"><span style="font-family: 'Sansita Swashed', cursive;">Ballet I</span></td>--}}
{{--                            <td class="p-2"><small class="text-muted">7-10yr</small></td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <div class="row m-0 p-0">--}}
{{--            <div class="col-sm">--}}
{{--                <div class="rotated-bg-blue mt-5 mb-3 rounded">--}}
{{--                    <div class="text-center pt-4 stand-out">Children's Classes</div>--}}
{{--                    <a href="/images/childrens-aug-11.pdf" target="_blank"><img src="/images/childrens-aug-11.jpg" alt="childrens classes" class="px-5 pb-5 rerotate img-fluid"></a>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
{{--                        <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <div class="rotated-bg-red mt-5 mb-3 rounded">--}}
{{--                    <div class="text-center pt-4 stand-out text-white">Leveled Classes</div>--}}
{{--                    <a href="/images/leveled-oct-11-21.pdf" target="_blank"><img src="/images/leveled-oct-11-21.jpg" alt="leveled classes" class="px-5 pb-5 rerotate img-fluid"></a>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
{{--                        <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-5">--}}

{{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
{{--                <div class="col text-center">--}}
{{--                    <img src="/images/beginning-1.jpg" alt="childrens class logo" class="img-fluid m-2">--}}
{{--                    <small class="text-muted d-block">ages 7 - 8</small>--}}
{{--                    <p>--}}
{{--                        Introduces the young dancer to the steps and grace of ballet with barre, center work & combinations.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
{{--                <div class="col text-center">--}}
{{--                    <img src="/images/beginning-2.png" alt="childrens class logo" class="img-fluid m-2">--}}
{{--                    <small class="text-muted d-block">ages 7 - 8</small>--}}
{{--                    <p>--}}
{{--                        Introduces young dancers to the fun and rhythm of tap.--}}
{{--                        <br>Co-enrollment with ballet recommended.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="d-flex align-items-center" style="border: 1px solid #747474;">--}}
{{--                <div class="col text-center">--}}
{{--                    <img src="/images/beginning-3.jpg" alt="childrens class logo" class="img-fluid m-2">--}}
{{--                    <small class="text-muted d-block">ages 7 - 8</small>--}}
{{--                    <p>--}}
{{--                        Introduces the young dancer to jazz technique.--}}
{{--                        <br>Co-enrollment with ballet recommended.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
    </div>

@endsection
