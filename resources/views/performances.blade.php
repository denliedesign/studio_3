@extends('layouts.app')

    @section('title', 'Performances | Studio 3 Dance | Plano, Texas')
{{--    @section('description', '')--}}
@section('content')
{{--    <video width="100%" height="auto" poster="/images/video-pre-load.JPG" controls>--}}
{{--        <source src="/images/spring-recital.mp4" type="video/mp4">--}}
{{--    </video>--}}

{{--    <iframe width="100%" height="600" src="https://www.youtube.com/embed/z9ffqWkyBzw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
    <iframe width="100%" height="600" src="https://www.youtube.com/embed/FGjGH-kXB_w?si=rx8QHGwe9Htypa4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div class="container mt-5" id="performances">
        <h1>Performances</h1>
        <div class="row my-5">
            <div class="col-sm">
                <span class="stand-out">Spring Recital</span>
                <div class="d-inline">
                    <a href="/images/2023-recital.pdf" target="_blank" style="border: 1px solid black; text-decoration: none;" class="rounded shadow p-2 mx-2">2023 Recital Info Handout</a>
                </div>
                <p class="mt-2">
                    For the past 24 years, Studio 3 Dance has provided dancers with an exciting performance experience through its end of the year Recital. The performance offers our dancers a chance to shine in front of family and friends and it is truly the highlight of the dance school year. The Recital offers our students a professionally directed performance that allows them the opportunity to present the results of their year’s hard work, dedication, and progress.
                    <br><br>
                    A big part of the dance training process includes learning through performance. The experience helps build self-esteem, self-assurance, and contributes to a sense of confidence. Although performance opportunities can help prepare some students for a possible career in dance, they also contribute to success in non-dance activities. That onstage experience can result in better in-school presentations and improved social skills. The rehearsal process helps develop retention skills, and by working with their classmates on a group performance, they learn the positive aspects of working as a team to create the best end result.  Recital commitment is the responsibility of both students and their parents.
                    <br><br>
                    Our goal is to make the recital an organized, exciting experience for everyone involved.
                </p>
            </div>
            <div class="col-sm">
                <img src="/images/recital-1.jpg" alt="recital" class="img-fluid shadow rounded">
            </div>
        </div>
        <div class="row rounded rotated-bg-red p-0 m-0">
{{--            <div class="rerotate col-sm p-3 mx-sm-3 my-3 shadow rounded" style="background: white;">--}}
{{--                <strong>Financial Commitment for Spring Recital 2022</strong>--}}
{{--                <p>--}}
{{--                    11/15/21 - 1/2 Costume Fee--}}
{{--                    <br>12/15/21 - Costume Balance--}}
{{--                    <br>1/15/22 - Spring Recital Fee $85 ($65 for additional children)--}}
{{--                </p>--}}
{{--                <img src="/images/recital-hip-hop.JPG" alt="recital hip hop" class="img-fluid">--}}
{{--            </div>--}}
            <div class="rerotate col-sm p-3 mx-sm-3 my-3 shadow rounded" style="background: white;">
                <strong>Recital Fee and Date</strong>
                <p>
                    The Recital Fee is the fee charged each dancer for participation in our Spring Recital.  The Recital Fee is a NON-REFUNDABLE fee confirming your commitment to be a part of our performance. The recital fee is due in January.  It is $85 for the first child in the family and $65 for each additional child in the same family.  This fee does not include tickets to the performance.
                    <br><br>
                    Recital Dates TBD
                    <br><br>
                    <em>We will have details on specific recital times for each individual class after our production meeting with the Eisemann in early March.</em>
                    <br><br>
                    The recital is not mandatory for any dancer, but more than 98% of our dancers in recital classes do make the choice to participate. If you'd like to opt your dancer out of recital, please print and fill out
                    <a href="/images/spring-recital-form.jpg" target="_blank">this form.</a>
                </p>
            </div>
        </div>
        <div class="row" style="padding: 20px 0;">
            <div class="col-sm mx-sm-3 my-3 p-3 shadow rounded">
                <strong>Costumes</strong>
                <p>
                    The staff at Studio 3 spends many hours selecting costumes for each class. They are always age-appropriate and of the highest quality possible.  Students will need one costume for each subject they train in. All classes participate in the recital except Stretch and Flex, Technique and Mommy & Me. Combo classes only perform one dance.  <u>Costume prices include tax, shipping and handling, as well as all accessories (tights, hats, gloves, etc.).</u>
                    <br><br>
                    In an effort to ensure that costumes are delivered in time for an organized distribution to our students before portrait day, rehearsals, and performances, costume orders are placed during our Thanksgiving break.  <u>Costume manufacturers do not accept cancellations or offer refunds; therefore Studio 3 Dance does not refund costume deposits or payments.</u>
                    <br><br>
                    Preschool & 30-minute Children’s Classes - $80.00 per costume
                    <br>Levels I-II -III Classes - $95.00 per costume
                    <br>Levels IV-VII and Pointe Classes - $105.00 per costume
                    <br><br>
                    Costumes will not be ordered until Costumes fees are paid in full.
{{--                    December 15, 2021 is the final day for payments to be made for our bulk costume order.   --}}
                    Parents or guardians accept full responsibility for all expenses, including surcharges and postage for costumes that are paid for and ordered after the December 15 deadline. The additional fee for late orders is $25.00 per costume. Studio 3 Dance does not accept responsibility if costumes are not received in time for the Recital due to late payments and add on orders placed after this deadline.
                    <br><br>
                    Costumes are always age-appropriate and of the highest quality possible.
                </p>
            </div>
            <div class="col-sm">
                <img src="/images/recital-2.jpg" alt="recital" class="img-fluid shadow rounded">
            </div>
        </div>
        <div class="row rounded rotated-bg-blue">
            <div class="rerotate col-sm mx-sm-3 my-3 p-3 shadow rounded" style="background: white;">
                <strong>Sizing</strong>
                <p>
                    Measuring for costumes is during October and early November during scheduled class times. Each child will be measured in order to determine his or her proper costume size(s). We always add 1-2 inches to allow for growth.  If you wish to check the costume size being ordered for your dancer, please check at the front desk in early December.
                </p>
            </div>
            <div class="rerotate col-sm mx-sm-3 my-3 p-3 shadow rounded" style="background: white;">
                <strong>Alterations</strong>
                <p>
                    Although rare, minor alterations are sometimes needed after the costumes have been distributed and are the responsibility of the student’s parent or guardian.
                </p>
            </div>
            <div class="rerotate col-sm mx-sm-3 my-3 p-3 shadow rounded" style="background: white;">
                <strong>Distribution</strong>
                <p>
                    Costumes will be handed out the week of May 1
                    <br><br>
                    All accounts must have a zero balance to receive costumes.
                    <br><br>
{{--                    <em>The deadline for tuition and other balances for the dance season is April 10, 2022.</em>--}}
{{--                        <em>April and May tuition are both due in April.</em>--}}
                        <em>April tuition is due April 1 and May tuition is due in April 15</em>
                    <br><br>
                    Students should not wear their costumes, accessories, or tights prior to portrait day, dress rehearsal, or performance.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/recital-3.JPG" alt="recital" class="img-fluid shadow rounded">
                        <img src="/images/recital-5.JPG" alt="recital" class="img-fluid shadow rounded mt-5">
                    </div>
                    <div class="col-sm">
                        <img src="/images/recital-4.JPG" alt="recital" class="img-fluid shadow rounded">
                    </div>
                </div>
            </div>
        </div>
        <div class="row rotated-bg-white">
            <div class="rerotate col-sm mx-sm-3 my-3 p-3 shadow rounded">
                <strong>Withdrawal</strong>
                <p>
                    No refunds will be made if a parent or guardian withdraws a child from Studio 3 after costumes have been ordered.
{{--                    Parents or guardians may pick up purchased costumes at Studio 3 after June 6, 2022.  Costumes not picked up will be donated to charity after June 30, 2022.--}}
                </p>
            </div>
            <div class="rerotate col-sm mx-sm-3 my-3 p-3 shadow rounded">
                <strong>Updates</strong>
                <p>
                    As the season progresses, additional recital information or updates will be emailed, posted on the Studio 3 Dance website, studio3dance.com, in monthly emailed newsletters, and on the studio bulletin board. Make it your responsibility to keep abreast of this important information. Our goal is to make the Recital an organized, exciting experience for everyone involved.It’s a team effort; students, parents, teachers, and the director are all key players in the show’s success.
                </p>
            </div>
            <div class="rerotate col-sm mx-sm-3 my-3 p-3 shadow rounded">
                <strong>Tickets</strong>
                <p>
                    Performance tickets will be sold through the Eisemann ticket center in early May.
{{--                    Ticket prices will be available in early April 2022.--}}
                </p>
            </div>
        </div>

        <iframe width="100%" height="638px" src="https://www.yumpu.com/en/embed/view/abWPEXSGtxydrUfQ" frameborder="0" allowfullscreen="true"  allowtransparency="true"></iframe>
{{--        <br><a href="https://www.yumpu.com/en/document/view/66939822/s3d-recital-2022" title="S3D RECITAL 2022" target="_blank">S3D RECITAL 2022</a>--}}
{{--        <iframe width="100%" height="638px" src="https://www.yumpu.com/en/embed/view/TtGsL1PIB3HnoUZr" frameborder="0" allowfullscreen="true"  allowtransparency="true"></iframe>--}}

        <span class="stand-out">Plano Christmas Parade</span>
        <p>
            March with Studio 3 in the 2024 Plano Christmas Parade on Saturday, December 14th at 2:00pm.  Costume and 2 rehearsals required  on Friday, Dec 6th and 13th from 5:30 - 6:30. Sign up on or before October 12th so costumes can be ordered. Fee TBD.
        </p>
        <div class="row d-flex justify-content-center mb-5 rotated-bg-red rounded">
            <div class="rerotate col-sm"><img src="/images/plano-christmas-parade.jpg" alt="plano christmas parade" class="img-fluid shadow rounded" style="max-height: 275.44px;"></div>
            <div class="rerotate col-sm"><img src="/images/plano-christmas-parade-2.jpg" alt="plano christmas parade" class="img-fluid shadow rounded" style="max-height: 275.44px;"></div>
            <div class="rerotate col-sm"><img src="/images/plano-christmas-parade-3.jpg" alt="plano christmas parade" class="img-fluid shadow rounded" style="max-height: 275.44px;"></div>
        </div>
        <span class="stand-out">Snow Queen</span>
        <p>
            Snow Queen 2025 information coming spring of 2025.
{{--            We present our winter ballet, Snow Queen every other year.--}}
{{--            Snow Queen 2023 will be held the weekend of November 11th and 12th at the Eisemann Bank of America Theatre in Richardson. We have openings for dancers ages 3 - 18. If you are interested in auditioning, join us August 5th or August 12th at 1:00pm.  Please call or email the studio for additional information.--}}
{{--            Rehearsals begin Friday August 18th.--}}
            {{--            Dates for our next ballet are November 13, 14, 2021. Auditions are August 14th at 1:00pm at the studio.--}}
{{--        <span class="text-capitalize">View The <a href="/images/snow-queen-rehearsal-schedule.pdf" target="_blank">Rehearsal schedule for the fall</a></span>--}}
        </p>
{{--        <div class="row my-3">--}}
{{--            <div class="col-md"><img src="/images/23-snow-queen-rehearsal-1.jpg" alt="snow queen" class="img-fluid"></div>--}}
{{--            <div class="col-md"><img src="/images/23-snow-queen-rehearsal-2.jpg" alt="snow queen" class="img-fluid"></div>--}}
{{--        </div>--}}
        <div class="row d-flex justify-content-center">
            <div class="col-sm">
                <video width="100%" height="auto" controls class="rounded shadow">
                    <source src="/images/snowqueen-23.mp4" type="video/mp4">
                </video>
                <p class="text-center">Snow Queen 2023</p>
            </div>
            <div class="col-sm">
                <video width="100%" height="auto" controls class="rounded shadow">
                    <source src="/images/snow-queen-1.mp4" type="video/mp4">
                </video>
                <p class="text-center">Snow Queen 1</p>
            </div>
            <div class="col-sm">
                <video width="100%" height="auto" controls class="rounded shadow">
                    <source src="/images/snow-queen-2.mp4" type="video/mp4">
                </video>
                <p class="text-center">Snow Queen 2</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-sm">
                <img src="/images/snow-queen-1.jpg" alt="snow queen ballet performance" class="img-fluid mb-3">
            </div>
            <div class="col-sm">
                <img src="/images/snow-queen-2.jpg" alt="snow queen ballet performance" class="img-fluid mb-3">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-sm">
                <img src="/images/snow-queen-3.jpg" alt="snow queen ballet performance" class="img-fluid mb-3">
            </div>
            <div class="col-sm">
                <img src="/images/snow-queen-4.jpg" alt="snow queen ballet performance" class="img-fluid">
            </div>
        </div>
    </div>


@endsection
