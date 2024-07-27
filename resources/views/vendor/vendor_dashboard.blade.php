@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<header>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</header>
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard v4</h3>
                    @if(session('vendor_id'))
                    <p>{{ session('vendor_id') }}</p>
                    @endif
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard v3
                        </li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-6">

                    <div class="card mb-4">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">

                                <a href="{{ url('hotel_registration_form')}}">
                                    <button>Add Hotel </button>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">

                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Hotel Rooms</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">

                                <div class="row">

                                    <ul id="room-list">



                                        </li>

                                    </ul>

                                    <div id="room-form-template" style="display: none;">

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>