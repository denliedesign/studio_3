@extends('layouts.app')

@section('title', 'Summer Dance Plano TX | Studio 3 Dance')
@section('description', 'Join Studio 3 Dance this Summer for fun Plano dance classes, camps, intensives, and workshops.')
@section('content')
    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div id="general-section" class="container">
        <h1 class="mt-5">2023 S3D Summer Camps</h1>
        <p class="text-center">
            Summer Dance Classes in Plano begin June 6th
        </p>
        {{--        <h1 class="mt-5">2022 S3D Summer Camps, Classes, Intensives, & Workshops</h1>--}}
        {{--        <div class="row mb-4">--}}
        {{--            <div class="col-sm mb-4">--}}
        {{--                <a href="/images/summer-classes-22.pdf" target="_blank">--}}
        {{--                    <img src="/images/summer-classes-22-1.jpg" alt="summer classes" class="img-fluid shadow rounded">--}}
        {{--                </a>--}}
        {{--                <div class="d-flex justify-content-center mt-3">--}}
        {{--                    <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
        {{--                        <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
        {{--                    </a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="col-sm mb-4">--}}
        {{--                <a href="/images/summer-classes-22.pdf" target="_blank">--}}
        <div class="row">
            <div class="col-sm">
                <div class="d-flex justify-content-center my-4">
                    <img src="/images/2023-summer-camps.png" alt="summer camps" class="img-fluid shadow rounded">
                    {{--            <img src="/images/summer-july-classes.jpg" alt="summer classes" class="img-fluid shadow rounded" style="max-width: 750px; width: 100%; height: auto;">--}}
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center my-4">
                    <img src="/images/2023-summer-class-list.png" alt="summer classes" class="img-fluid shadow rounded">
                </div>
            </div>
        </div>
        {{--                </a>--}}
        <div class="d-flex justify-content-center">
            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">
                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
            </a>
        </div>
        <div class="row my-4">
            <div class="col-sm">
                <img src="/images/june-9-23.jpg" alt="june 9 summer workshop" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm">
                <img src="/images/drill-team-23.png" alt="drill team" class="img-fluid shadow rounded">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">
                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
            </a>
        </div>
        <div class="row my-4">
            <div class="col-sm">
                <img src="/images/2023-snow-queen-workshop.png" alt="snow queen workshop" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">
                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
            </a>
        </div>
    </div>
    {{--            </div>--}}
    {{--        <div class="my-5">--}}
    {{--            <span class="text-purple lead">1 DAY PRINCESS CAMPS - $38</span>--}}
    {{--            <br>Ages 3 through first grade--}}
    {{--            <br>Join our enchanted world of castles, royal balls and a touch of magic. Each themed princess camp brings--}}
    {{--            a new adventure in creative movement, ballet, theatre related activities, games and crafts--}}
    {{--            <br><br>--}}
    {{--            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                <button class="btn btn-danger shadow mb-4">Register Now</button>--}}
    {{--            </a>--}}
    {{--            <br><span class="text-purple lead">3 DAY PRESCHOOL/KINDER CAMP - $140</span>--}}
    {{--            <br>Ages 3 through first grade--}}
    {{--            <br><span class="text-purple"><u>THE SNOWFLAKE SPECTACULAR:</u></span> Ballet & Tap - July 13 - 15--}}
    {{--            <br>This camp will be love at frost sight for young dancers who love Olaf, Anna, Elsa and friends! You’ll--}}
    {{--            sparkle with excitement as each day is filled with whimsical dancing, wondrous wintry games and sparkling--}}
    {{--            crafts.--}}
    {{--            <br>We'll learn choreography for our winter ballet, Snow Queen, for those interested in participating.--}}
    {{--            <br><br>--}}
    {{--            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                <button class="btn btn-danger shadow mb-4">Register Now</button>--}}
    {{--            </a>--}}
    {{--            <br><span class="text-purple lead">3 DAY ELEMENTARY CAMPS - $140</span>--}}
    {{--            <br>For dancers that have completed Kindergarten through 5th grade--}}
    {{--            <br><span class="text-purple"><u>MARQUEE MIX UP:</u></span> Jazz & Musical Theatre - June 8 - 10--}}
    {{--            <br>This fun, Broadway-themed camp will explore musical theater and jazz dancing while learning fun facts--}}
    {{--            about popular shows, including Wicked, Matilda, and Annie. Your Broadway performers will light up the stage--}}
    {{--            with their Marquee Mix-Up crafts and dance activities.--}}
    {{--            <br><span class="text-purple"><u>BOHO DESERT BASH:</u></span> Jazz & Acro - June 15-17--}}
    {{--            <br>Get ready for a dance party like no other at the Boho Desert Bash! Dancers will move wild and free in--}}
    {{--            this high-energy Jazz and Acro dance camp. Dancers will make dream catching crafts and sparkling props.--}}
    {{--            <br><span class="text-purple"><u>PASTEL POP STARS & RAINBOW ROCKERS:</u></span> Jazz & Hip Hop - July 20-22--}}
    {{--            <br>If you're a super fan of Taylor Swift, Jojo or the Descendants, then you need to jump right on this--}}
    {{--            trendy tour bus as one of the topnotch dance crew members for Pastel Pop Stars and Rainbow Rockers! You’ll--}}
    {{--            learn Jazz and Hip Hop dances, make crafts and a chance to film your very own dance video!--}}
    {{--            <br><br>--}}
    {{--            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                <button class="btn btn-danger shadow mb-4">Register Now</button>--}}
    {{--            </a>--}}
    {{--            <br><span class="text-purple lead">DANCE INTENSIVE:  June 28 - July 1</span>--}}
    {{--            <br>Classes in Jazz, Ballet, Tap, Technique, Acro and Musical Theatrefor all ages--}}
    {{--            <br>Additional classes in Modern/Lyrical/Contemporary for ages 10+--}}
    {{--            <br><br>--}}
    {{--            June 28 - July 1: 4 day camp for ages 10+ 10:00 - 4:00 $375--}}
    {{--            <br>June 29 - 30: 2 day camp for ages 6+ 10:00 - 2:00 $125--}}
    {{--            <br><br>--}}
    {{--            <span>Dance Intensive is Recommended for all Performance teams and Required for all Competition teams.</span>--}}
    {{--            <br><br>--}}
    {{--            Performance and Competition Team Placement will take place the afternoon of June 30th for those interested.--}}
    {{--            <br>OKLA will do the Thursday camp classes - included in the week’s intensive tuition.--}}
    {{--            <br><br>--}}
    {{--            <a href="/images/dance-intensive-ok-la.pdf" target="_blank"><img src="/images/dance-intensive-ok-la.jpg" alt="okla workshop info" class="img-fluid" style="max-width: 700px; width: 100%;"></a>--}}
    {{--            <br><br>--}}
    {{--            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                <button class="btn btn-danger shadow mb-4">Register Now</button>--}}
    {{--            </a>--}}
    {{--            <br><span class="text-purple lead">SNOW QUEEN WORKSHOP:  July 12 - 15</span>--}}
    {{--            <br>Dancers will learn choreography for our winter ballet, Snow Queen with auditions on the last day.--}}
    {{--            <br><br>--}}
    {{--            July 12 -15: 4 day for ages 10+ that have completed Ballet II 12:30 - 2:30 - $160--}}
    {{--            <br>July 12 - 15: 4 day add on camp for ages Soloists ages 13+ 2:30 - 4:00 - $90--}}
    {{--            <br>July 13-14: 2-day for ages 6+ 9:30 - 11:30 - $90--}}
    {{--            <br><br>--}}
    {{--            <span class="text-purple"><u>Attire for Princess & 3 day camps:</u></span> Dancewear, shorts & shirt or--}}
    {{--            princess dress and ballet shoes.--}}
    {{--            <br><span class="text-purple"><u>Attire for Elementary Camps:</u></span> Dancewear, leotard & tights OR cami--}}
    {{--            and leggings with jazz shoes/tennis shoes--}}
    {{--            <br><br>--}}
    {{--            Dancers should bring a water bottle & snack for 2 hour camps - Water bottle & lunch for Dance Intensive.--}}
    {{--            <br><br>--}}
    {{--            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                <button class="btn btn-danger shadow mb-4">Register Now</button>--}}
    {{--            </a>--}}
    {{--        </div>--}}


    <!-- 2022 BELOW -->

    {{--        <div>--}}
    {{--            <div class="row m-0 p-0">--}}
    {{--                <div class="col-sm">--}}
    {{--                    <img src="/images/summer-22-a.png" alt="summer sign up" class="img-fluid shadow rounded mb-4">--}}
    {{--                    <div class="d-flex justify-content-center">--}}
    {{--                        <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                            <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm">--}}
    {{--                    <img src="/images/summer-22-b.png" alt="summer sign up" class="img-fluid shadow rounded mb-4">--}}
    {{--                    <div class="d-flex justify-content-center">--}}
    {{--                        <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                            <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row mt-4">--}}
    {{--                <div class="col-sm">--}}
    {{--                    <img src="/images/summer-22-c.png" alt="summer sessions 1"--}}
    {{--                         class="img-fluid shadow rounded mb-4">--}}
    {{--                    <div class="d-flex justify-content-center">--}}
    {{--                        <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                            <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm">--}}
    {{--                    <img src="/images/summer-22-d.png" alt="summer sessions 2"--}}
    {{--                         class="img-fluid shadow rounded mb-4">--}}
    {{--                    <div class="d-flex justify-content-center">--}}
    {{--                        <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                            <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row mt-4">--}}
    {{--                <div class="col-sm">--}}
    {{--                    <div class="d-flex justify-content-center">--}}
    {{--                        <img src="/images/2022-dance-intensive.JPG" alt="summer sessions 3"--}}
    {{--                             class="img-fluid shadow rounded mb-4" style="max-height: 50%;">--}}
    {{--                    </div>--}}
    {{--                    <div class="d-flex justify-content-center">--}}
    {{--                        <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">--}}
    {{--                            <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection
