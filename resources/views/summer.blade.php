@extends('layouts.app')

    @section('title', 'Summer Dance Plano TX | Studio 3 Dance')
    @section('description', 'Join Studio 3 Dance this Summer for fun Plano dance classes, camps, intensives, and workshops.')
@section('content')
    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div id="general-section" class="container">
        <h1 class="mt-5">2024 S3D Summer Camps</h1>
        <p class="text-center">
{{--            Summer Dance Classes in Plano begin June 6th--}}
        </p>
        <div class="row">
            <div class="col-sm">
                <div class="d-flex justify-content-center my-4">
                    <img src="/images/2.png" alt="summer camp" class="img-fluid shadow rounded">
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center my-4">
                    <img src="/images/3.png" alt="summer camp" class="img-fluid shadow rounded">
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
                <img src="/images/4.png" alt="summer camp" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm">
                <img src="/images/6.png" alt="summer camp" class="img-fluid shadow rounded">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="https://app.thestudiodirector.com/studio3dance/portal.sd?page=Login" target="_blank">
                <button class="btn btn-lg btn-danger shadow mb-4">Register Now</button>
            </a>
        </div>
    </div>

@endsection
