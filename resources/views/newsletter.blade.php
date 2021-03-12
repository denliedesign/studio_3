<x-app-layout>

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div id="general-section">
        <div class="container">
            <h1 class="mt-5">Newsletters</h1>
            <div class="row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col rounded shadow news-box">
                    <a href="/news/march" class="de-link">
                        <div>
                            <p class="p-3 bg-blue text-center styled-font">March</p>
                            <p class="px-3 pb-3 text-muted">
                                {!! strip_tags(substr("We hope your family is doing well and survived the crazy Texas weather! We missed having our dancers in class Feb 15 - 20. Due to power outages and dangerous road conditions, the best option was to keep the studio closed, conserve energy and keep our dancers and families safe at home. We will not have the opportunity to make up a full week of classes but will be offering a “Student Appreciation Week” May 24 - 27. More details to come.", 0, 150)) . '...' !!}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
