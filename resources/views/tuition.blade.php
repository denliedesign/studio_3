@extends('layouts.app')

    @section('title', 'Tuition | Studio 3 Dance | Plano, Texas')
    @section('description', 'Be a member of our dance family today!')
@section('content')
    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div id="general-section" class="container">
        <h1 class="mt-5">Tuition</h1>

        <div class="d-flex justify-content-center">
            <a href="/images/23-tuition.pdf" target="_blank">
                <button class="btn btn-lg btn-danger shadow mb-4">View Tuition PDF For 2023-2024</button>
            </a>
        </div>

        <div>
            <div class="rotated-bg-blue rounded my-5">
                <img src="/images/23-tuition-1.jpg" alt="tuition" class="img-fluid rerotate p-5">
            </div>
            <div class="rotated-bg-blue rounded my-5">
                <img src="/images/23-tuition-2.jpg" alt="tuition" class="img-fluid rerotate p-5">
            </div>
        </div>
{{--        <p>--}}
{{--            All student accounts are REQUIRED to have a credit or debit card (Visa, Mastercard or Discover) saved online for monthly tuition payments.  Your account will be charged the yearly membership fee and 1st month’s tuition before being officially enrolled in class.  Monthly tuition will be auto charged on the first of each month thereafter UNLESS you choose to pay by check, cash or a different credit card by the 25th of the prior month.  Checks from your bank should be scheduled to arrive by the 25th if that is your payment choice.  If your credit card expires or is compromised, it is your responsibility to update your card.--}}
{{--            <br><br>--}}
{{--            A 30-day written notice is required if it becomes necessary to drop a class. You may email the studio at (studiothree.dance@gmail.com) or deliver a note to the front desk.--}}
{{--        </p>--}}
{{--        <div class="rotated-bg-blue rounded">--}}
{{--            <div class="shadow rounded p-3 m-3 rerotate" style="background: white;">--}}
{{--                <p>--}}
{{--                    <span class="stand-out">Non-Refundable Membership Fee</span>--}}
{{--                    <br>Due at registration along with August OR your first month’s tuition--}}
{{--                </p>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm">--}}
{{--                        <p>--}}
{{--                            <strong>New Students:</strong>--}}
{{--                            <br>$45 - 1st child in family--}}
{{--                            <br>$30 - for each additional child--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <p>--}}
{{--                            <strong>Returning Students:</strong>--}}
{{--                            <br>$30 - 1st child in family--}}
{{--                            <br>$25 - for each additional child--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-sm">--}}
{{--                <div class="shadow rounded p-5">--}}
{{--                    <p>--}}
{{--                        <span class="stand-out">Monthly Tuition</span>--}}
{{--                    </p>--}}
{{--                    <table class="table">--}}
{{--                        <tr>--}}
{{--                            <td>30 minutes</td>--}}
{{--                            <td>$60</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>45 minutes</td>--}}
{{--                            <td>$85</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>1 hr</td>--}}
{{--                            <td>$95</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>1 hr 15</td>--}}
{{--                            <td>$112</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>1 hr 30</td>--}}
{{--                            <td>$130</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>1 hr 45 - 2 hr</td>--}}
{{--                            <td>$155</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>2 hr 15 - 2 hr 30</td>--}}
{{--                            <td>$175</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>2 hr 45 - 3 hr</td>--}}
{{--                            <td>$215</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>3 hr 15 - 3 hr 30</td>--}}
{{--                            <td>$248</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>3 hr 45 - 4 hr</td>--}}
{{--                            <td>$275</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>4 hr 15 - 4 hr 30</td>--}}
{{--                            <td>$300</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>4 hr 45 - 5 hr</td>--}}
{{--                            <td>$325</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>5 hr 15 - 5 hr 30</td>--}}
{{--                            <td>$350</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>5 hr 45 - 6 hr</td>--}}
{{--                            <td>$370</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>6 hr 15 - 6 hr 30</td>--}}
{{--                            <td>$385</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>6 hr 45 - 7 hr</td>--}}
{{--                            <td>$395</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>7 hr 15 - unlimited</td>--}}
{{--                            <td>$405</td>--}}
{{--                        </tr>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm">--}}
{{--                <div class="shadow rounded p-5">--}}
{{--                    <p>--}}
{{--                        <span class="stand-out">Private Lesson Rates</span>--}}
{{--                        <br>30 minute - $45--}}
{{--                        <br>60 minute - $90--}}
{{--                        <br>Choreography - $375 (2 hours)--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="rotated-bg-red rounded">--}}
{{--            <div class="shadow rounded p-3 m-3 rerotate" style="background: white;">--}}
{{--                <p>--}}
{{--                    <span class="stand-out">Recital</span>--}}
{{--                    <br>Studio 3 is a “Recital Studio”.  Although participation is not required, it is encouraged.  Dance is a performing art and we believe that the recital experience is a big part of the dance year.--}}
{{--                    <br><br>½ Recital costume(s) payment is due Nov 15 and the balance is due Dec 15. Costumes will be ordered over winter break for all dancers who have paid costume fees in full by Dec 15. <em>Costume refunds are not available after they are ordered.</em>--}}
{{--                </p>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm">--}}
{{--                        <p>--}}
{{--                            <strong>Recital Costumes/Accessories</strong>--}}
{{--                            <br><small class="text-muted">Tights included.  Dance shoes are not included</small>--}}
{{--                            <br>$80 - Children's classes ages 8 & under (30 and 45 minute classes)--}}
{{--                            <br>$95 - Levels I - III--}}
{{--                            <br>$105 Levels IV - VI and pointe classes--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm">--}}
{{--                        <p>--}}
{{--                            <strong>Non-Refundable Recital Fee</strong>--}}
{{--                            <br><small class="text-muted">Due January 15, 2022</small>--}}
{{--                            <br>$85 - first child in family--}}
{{--                            <br>$65 - for each additional child in family--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection
