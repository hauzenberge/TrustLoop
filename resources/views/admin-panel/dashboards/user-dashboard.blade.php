@extends('admin-panel.layouts.app')

@section('content')

<!-- Title -->
<h1 class="h2">
    <br>
    {{ $title }}
</h1>

<div class="row">
    <div class="col-xxl-5 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase ps-lg-1">
                    LATEST REVIEWS
                </h2>

                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-gray-500" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                            <g>
                                <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                                <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
                            </g>
                        </svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="javascript: void(0);" class="dropdown-item">
                            Export report
                        </a>
                        <a href="javascript: void(0);" class="dropdown-item">
                            Share
                        </a>
                        <a href="javascript: void(0);" class="dropdown-item">
                            Action
                        </a>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table id="projectsTable" class="table align-middle text-center table-edge table-nowrap mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Review</th>
                            <th>Name</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">
                                <span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span>
                            </td>
                            <td class="text-muted">Jon Richardson</td>
                            <td class="text-muted">28.02.23</td>
                        </tr>
                        <tr>
                            <td class="text-start">
                                <span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span>
                            </td>
                            <td class="text-muted">Alba Monday</td>
                            <td class="text-muted">28.02.23</td>
                        </tr>
                        <tr>
                            <td class="text-start">
                                <span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span>
                            </td>
                            <td class="text-muted">Rose Watson</td>
                            <td class="text-muted">28.02.23</td>
                        </tr>
                        <tr>
                            <td class="text-start">
                                <span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span>
                            </td>
                            <td class="text-muted">Levente Kosa</td>
                            <td class="text-muted">28.02.23</td>

                        </tr>
                        <tr>
                            <td class="text-start">
                                <span class="stars-reviews">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                    <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                </span>
                            </td>
                            <td class="text-muted">Andy Webb</td>
                            <td class="text-muted">28.02.23</td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- / .table-responsive -->
        </div>
    </div>

    <div class="col-xxl-7 d-flex">

        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">

                <!-- Title -->
                <h2 class="card-header-title h4 text-uppercase ps-lg-1">
                    REVIEWS PER DAY
                </h2>

            </div>

            <div class="card-body d-flex flex-column px-lg-6">

                <!-- Chart -->
                <div class="chart-container flex-grow-1 h-275px">
                    <canvas id="reviewsChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div> <!-- / .row -->

<div class="row">
    <div class="col mt-2 mb-6 pb-2">

        <div class="mb-6">
            <h2 class="d-inline me-4">Your ID:</h2>
            <p class="d-inline fs-3">UA-172504677-1</p>
        </div>
        <p class="fs-3 fw-semibold">Website Tracking</p>
        <p class="fs-3 fw-semibold">Please add to site &lt;HEAD&gt; (trustloop.js)</p>
        <div class="row">
            <div class="col-12 col-xl-9">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor
                    incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="fs-11 border border-dark rounded py-4 px-5">
                    <!--
                    <p class="m-0">&lt;!DOCTYPE html&gt;</p>
                    <p class="m-0">&lt;html lang="en"&gt;</p>
                    <p class="m-0">&lt;head&gt;</p>
                    <p class="m-0">&lt;meta charset="UTF-8"&gt;</p>
                    <p class="m-0">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</p>
                    <p class="m-0">&lt;meta name="viewport" content="width=device-width,
                        initial-scale=1.0"&gt;</p>
                    <p class="m-0">&lt;title&gt;Jadoo&lt;/title&gt;</p>
                    <p class="m-0">&lt;link rel="stylesheet" href="styles.css"&gt;</p>
                    <p class="m-0">&lt;link rel="preconnect" href="https://fonts.googleapis.com"&gt;</p>
                    <p class="m-0">&lt;link rel="preconnect" href="https://fonts.gstatic.com"
                        crossorigin&gt;</p>
                    <p class="m-0">&lt;link
                        href="https://fonts.googleapis.com/css2?
                        family=Poppins:wght@400;500;600;700&family=Volkhov
                        :wght@700&display=swap"rel="stylesheet"&gt;
                    </p>
                    <p class="m-0">&lt;/head&gt;</p>
-->
                    <p class='m-0'>&lt;!DOCTYPE html&gt;</p>
                    <p class='m-0'>&lt;html lang=&quot;en&quot;&gt;</p>

                    <p class='m-0'>&lt;head&gt;</p>
                    <p class='m-0'> &lt;meta charset=&quot;UTF-8&quot;&gt;</p>
                    <p class='m-0'> &lt;title&gt;Survey Form&lt;/title&gt;</p>
                    <p class='m-0'> &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css&quot;&gt;</p>
                    <p class='m-0'> &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js&quot;&gt;&lt;/script&gt;</p>
                    <p class='m-0'> &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;</p>
                    <p class='m-0'>&lt;/head&gt;</p>

                    <p class='m-0'>&lt;body&gt;</p>
                    <p class='m-0'> &lt;div class=&quot;container mt-5&quot;&gt;</p>
                    <p class='m-0'> &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-toggle=&quot;modal&quot; data-target=&quot;#survey-modal&quot;&gt;</p>
                    <p class='m-0'> Open Survey</p>
                    <p class='m-0'> &lt;/button&gt;</p>
                    <p class='m-0'> &lt;/div&gt;</p>

                    <p class='m-0'> &lt;div class=&quot;modal fade&quot; id=&quot;survey-modal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;surveyModalLabel&quot;</p>
                    <p class='m-0'> aria-hidden=&quot;true&quot;&gt;</p>
                    <p class='m-0'> &lt;div class=&quot;modal-dialog modal-dialog-centered&quot; role=&quot;document&quot;&gt;</p>
                    <p class='m-0'> &lt;div class=&quot;modal-content&quot;&gt;</p>
                    <p class='m-0'> &lt;div class=&quot;modal-header&quot;&gt;</p>
                    <p class='m-0'> &lt;h5 class=&quot;modal-title&quot; id=&quot;surveyModalLabel&quot;&gt;Survey Form&lt;/h5&gt;</p>
                    <p class='m-0'> &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;</p>
                    <p class='m-0'> &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;</p>
                    <p class='m-0'> &lt;/button&gt;</p>
                    <p class='m-0'> &lt;/div&gt;</p>
                    <p class='m-0'> &lt;div class=&quot;modal-body&quot;&gt;</p>
                    <p class='m-0'> &lt;!-- Survey form goes here --&gt;</p>
                    <p class='m-0'> &lt;/div&gt;</p>
                    <p class='m-0'> &lt;/div&gt;</p>
                    <p class='m-0'> &lt;/div&gt;</p>
                    <p class='m-0'> &lt;/div&gt;</p>

                    <p class='m-0'> &lt;script src=&quot;https://code.jquery.com/jquery-3.6.0.min.js&quot;&gt;&lt;/script&gt;</p>
                    <p class='m-0'> &lt;script src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;</p>
                    <p class='m-0'> &lt;script&gt;</p>
                    <p class='m-0'> $(document).ready(function () {</p>

                    <p class='m-0'> $.ajax({</p>
                    <p class='m-0'> url: &#039;{{url('api/surveys/' . Auth::user()->id )}}&#039;,</p>
                    <p class='m-0'> type: &#039;GET&#039;,</p>
                    <p class='m-0'> success: function (data) {</p>
                    <p class='m-0'> var surveyId = data[0].id;</p>
                    <p class='m-0'> </p>
                    <p class='m-0'> var formHtml = &#039;&lt;form id=&quot;survey-form&quot;&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;input type=&quot;hidden&quot; name=&quot;surveyId&quot; value=&quot;&#039; + data[0].id + &#039;&quot;&gt;&#039;;</p>

                    <p class='m-0'> </p>
                    <p class='m-0'> formHtml += &#039;&lt;input type=&quot;hidden&quot; name=&quot;answers&quot; value=&quot;&quot;&gt;&#039;;</p>

                    <p class='m-0'> $.each(data[0].questions, function (index, question) {</p>

                    <p class='m-0'> if (question.type === &#039;question&#039;) {</p>
                    <p class='m-0'> formHtml += &#039;&lt;div class=&quot;form-group&quot;&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;label&gt;&#039; + question.text + &#039;&lt;/label&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;input type=&quot;text&quot; name=&quot;answers[&#039; + index + &#039;][value]&quot; class=&quot;form-control&quot;&gt;&#039;;</p>
                    <p class='m-0'> </p>
                    <p class='m-0'> formHtml += &#039;&lt;input type=&quot;hidden&quot; name=&quot;answers[&#039; + index + &#039;][question_id]&quot; value=&quot;&#039; + question.id + &#039;&quot;&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;/div&gt;&#039;;</p>
                    <p class='m-0'> } else if (question.type === &#039;rating&#039;) {</p>
                    <p class='m-0'> formHtml += &#039;&lt;div class=&quot;form-group&quot;&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;label&gt;&#039; + question.text + &#039;&lt;/label&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;select name=&quot;answers[&#039; + index + &#039;][value]&quot; class=&quot;form-control&quot;&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;option value=&quot;&quot;&gt;-- Choose a rating --&lt;/option&gt;&#039;;</p>
                    <p class='m-0'> for (var i = 1; i &lt;= 10; i++) {</p>
                    <p class='m-0'> formHtml += &#039;&lt;option value=&quot;&#039; + i + &#039;&quot;&gt;&#039; + i + &#039;&lt;/option&gt;&#039;;</p>
                    <p class='m-0'> }</p>
                    <p class='m-0'> formHtml += &#039;&lt;/select&gt;&#039;;</p>
                    <p class='m-0'> </p>
                    <p class='m-0'> formHtml += &#039;&lt;input type=&quot;hidden&quot; name=&quot;answers[&#039; + index + &#039;][question_id]&quot; value=&quot;&#039; + question.id + &#039;&quot;&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;/div&gt;&#039;;</p>
                    <p class='m-0'> }</p>

                    <p class='m-0'> });</p>

                    <p class='m-0'> formHtml += &#039; &lt;div class=&quot;d-flex justify-content-center&quot;&gt;&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Send the review&lt;/button&gt;&lt;/div&gt;&#039;;</p>
                    <p class='m-0'> formHtml += &#039;&lt;/form&gt;&#039;;</p>



                    <p class='m-0'> $(&#039;#survey-modal .modal-body&#039;).html(formHtml);</p>
                    <p class='m-0'> // $(&#039;#survey-modal&#039;).modal(&#039;show&#039;);</p>
                    <p class='m-0'> }</p>
                    <p class='m-0'> });</p>

                    <p class='m-0'> $(document).on(&#039;submit&#039;, &#039;#survey-form&#039;, function (e) {</p>
                    <p class='m-0'> e.preventDefault();</p>
                    <p class='m-0'> var formData = $(this).serializeArray();</p>

                    <p class='m-0'> var errors = [];</p>
                    <p class='m-0'> $.each(formData, function (index, field) {</p>
                    <p class='m-0'> var fieldNameParts = field.name.split(&#039;-&#039;);</p>
                    <p class='m-0'> var questionId = fieldNameParts[1];</p>

                    <p class='m-0'> if (field.value === &#039;&#039; &amp;&amp; $(&#039;#question-&#039; + questionId).data(&#039;required&#039;) === true) {</p>
                    <p class='m-0'> errors.push(&#039;You have not filled in the answer to the question &quot;&#039; + $(&#039;#question-&#039; + questionId).data(&#039;text&#039;) + &#039;&quot;.&#039;);</p>
                    <p class='m-0'> }</p>
                    <p class='m-0'> });</p>

                    <p class='m-0'> if (errors.length &gt; 0) {</p>
                    <p class='m-0'> var errorHtml = &#039;&lt;ul&gt;&#039;;</p>
                    <p class='m-0'> $.each(errors, function (index, error) {</p>
                    <p class='m-0'> errorHtml += &#039;&lt;li&gt;&#039; + error + &#039;&lt;/li&gt;&#039;;</p>
                    <p class='m-0'> });</p>
                    <p class='m-0'> errorHtml += &#039;&lt;/ul&gt;&#039;;</p>

                    <p class='m-0'> $(&#039;#survey-form .alert-danger&#039;).html(errorHtml).show();</p>
                    <p class='m-0'> $(&#039;#survey-form .alert-success&#039;).hide();</p>
                    <p class='m-0'> } else {</p>
                    <p class='m-0'> </p>
                    <p class='m-0'> $.ajax({</p>
                    <p class='m-0'> url: &quot;{{url('/api/surveys/')}}&quot; + formData.find(x =&gt; x.name === &#039;surveyId&#039;).value + &quot;/responses&quot;,</p>
                    <p class='m-0'> type: &quot;POST&quot;,</p>
                    <p class='m-0'> data: formData,</p>
                    <p class='m-0'> dataType: &quot;json&quot;,</p>
                    <p class='m-0'> success: function (response) {</p>
                    <p class='m-0'> </p>
                    <p class='m-0'> $(&#039;#survey-modal&#039;).modal(&#039;hide&#039;);</p>
                    <p class='m-0'> $(&#039;.modal-backdrop&#039;).remove();</p>
                    <p class='m-0'> },</p>
                    <p class='m-0'> error: function (jqXHR, textStatus, errorThrown) {</p>
                    <p class='m-0'> console.log(errorThrown);</p>
                    <p class='m-0'> }</p>
                    <p class='m-0'> });</p>
                    <p class='m-0'> }</p>
                    <p class='m-0'> });</p>
                    <p class='m-0'> });</p>

                    <p class='m-0'> &lt;/script&gt;</p>
                    <p class='m-0'>&lt;/body&gt;</p>
                    <p class='m-0'>&lt;/html&gt;</p>

                </div>
            </div>
        </div>
    </div>
</div> <!-- / .row -->

@endsection