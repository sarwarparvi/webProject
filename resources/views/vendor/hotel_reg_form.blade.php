<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Vendor Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Login Page v2">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css')}}" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css')}}" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css')}}" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ url('assets/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/ms_form.css')}}">


</head>

<body class="login-page bg-body-secondary">

    <!-- MultiStep Form -->
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-4 col-md-6">
                <form id="msform" action="{{url('/hotel_registration')}}" method="POST">
                    @csrf
                    <!-- progressbar -->
                    <div>
                        <h4>Register Hotel</h4>
                    </div>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Hotel Name</h2>
                        <h3 class="fs-subtitle">Write the hotel name</h3>
                        <input type="text" name="hotel_name" placeholder="Hotel Name" required />
                        <h3 class="fs-subtitle">Write the hotel name</h3>
                        <input type="button" name="next" class="next action-button" value="Next" id="next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Complete Address</h2>
                        <h3 class="fs-subtitle">Write the complete address of your hotel</h3>
                        <input type="text" name="hotel_address" placeholder="Address" required />
                        <input type="text" name="hotel_city" placeholder="City" required />
                        <input type="text" name="hotel_state" placeholder="State" required />
                        <input type="text" name="hotel_country" placeholder="Country" required />
                        <input type="text" name="hotel_phone" placeholder="Phone Number" required />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Description</h2>
                        <label for="freeform" class="fs-subtitle">Write a brief description of the hotel</label>
                        <textarea name="hotel_description" rows="4" cols="50" placeholder="write here...">
                    </textarea>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Hotel Rating</h2>
                        <h3 class="fs-subtitle">Please give Star Rating of your hotel</h3>
                        <div class="rating">
                            <input type="radio" name="hotel_rating" value="5" id="5">
                            <label for="5">☆</label>
                            <input type="radio" name="hotel_rating" value="4" id="4">
                            <label for="4">☆</label>
                            <input type="radio" name="hotel_rating" value="3" id="3">
                            <label for="3">☆</label>
                            <input type="radio" name="hotel_rating" value="2" id="2">
                            <label for="2">☆</label>
                            <input type="radio" name="hotel_rating" value="1" id="1">
                            <label for="1">☆</label>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="submit" name="submit" class="next action-button" value="Submit" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- /.MultiStep Form -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url('assets/js/ms_form.js')}}"></script>

</body><!--end::Body-->

</html>