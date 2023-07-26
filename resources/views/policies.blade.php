<x-app-layout>

    @section('title', 'Policies | Studio 3 Dance | Plano, Texas')
    @section('description', 'Welcome to our dance family! Everything you need to know to get your child started with their dance journey here at S3D.')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div id="general-section" class="my-5 container">
        <h1>Policies</h1>
        <div class="d-flex justify-content-center">
            <a href="/images/23-policies.pdf" target="_blank">
                <button class="btn btn-lg btn-danger shadow mb-4">View Policies PDF For 2023-2024</button>
            </a>
        </div>
        <div class="row m-0 p-0">
            <div class="col-sm rotated-bg-blue rounded my-5">
                <img src="/images/23-policies.jpg" alt="studio policies" class="p-5 rerotate img-fluid">
            </div>
{{--            <div class="col-sm rotated-bg-red rounded my-5">--}}
{{--                <a href="/images/covid-info.png" target="_blank"><img src="/images/covid-info.png" alt="studio covid info" class="p-5 rerotate img-fluid"></a>--}}
{{--            </div>--}}
        </div>
{{--        <div class="bg-blue py-4 rounded">--}}
{{--            <p class="text-center text-dark">--}}
{{--                <a href="/images/waiver-2021.pdf" target="_blank" class="text-dark">Studio 3 Dance COVID-19 Release Waiver Rules Procedures</a> (2021)--}}
{{--            </p>--}}
{{--        </div>--}}
    </div>

</x-app-layout>
