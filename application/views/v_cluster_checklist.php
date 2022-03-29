<style>
.card.card-profile-bottom {
    margin-top: 5em;
}
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


<!-- <div class="position-absolute w-100 min-height-300 top-0"
    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
</div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">

            <span class="ms-1 font-weight-bold"> Scrum</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="../pages/profile.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-dark  text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Cluster</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/sign-in.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Ativity</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link " href="../pages/profile.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User</span>
                </a>
            </li> -->




</aside>


<div class="main-content position-relative max-height-vh-100 h-100" id="cheacklist">
    <!-- Navbar -->
    <nav
        class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
        <div class="container-fluid py-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
                </ol>
                <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
            </nav>
            <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4"
                            aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="" id="" class="avatar avatar-sm me-3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm bg-gradient-dark me-3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">

                    <div class="avatar avatar-xl position-relative">
                        <img id="cluster_image" src="<?php echo base_url() . '/uploads/image_demo.jpg' ?>"
                            alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            <?php echo 'Cluster ' . $cluster_id ?>
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm" id="score_total">

                        </p>
                    </div>
                </div>


                <div class="col-auto my-auto">
                    <!-- <div class="h-100"> -->
                    <a href="<?php echo site_url() . '/UserController/show_cluster_detail/' . $cluster_id; ?>">

                        <button class="btn" type="button" style="margin-bottom: 0px;">
                            <i class="fa fa-users"></i> challenger
                        </button>
                    </a>
                    <!-- </div> -->
                </div>


                <div class="col-auto my-auto">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" style="margin-bottom: 0px;"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Choose Cluster
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="../show_cluster_checklist/0">Cluster 0</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/1">Cluster 1</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/2">Cluster 2</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/3">Cluster 3</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/4">Cluster 4</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/5">Cluster 5</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/6">Cluster 6</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/7">Cluster 7</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/8">Cluster 8</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_checklist/9">Cluster 9</a></li>

                        </ul>
                    </div>
                </div>








                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                    id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home"
                                    role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span class="ms-2">Sprint 1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile"
                                    role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span class="ms-2">Sprint 2</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    id="custom-tabs-one-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                                    aria-selected="false">
                                    <i class="ni ni-calendar-grid-58"></i>
                                    <span class="ms-2">Sprint 3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-md-12 ">

                <div class="card card-primary card-tabs">

                    <!-- <div class="card-header p-0 pt-1">
<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Sprint 1 </a>
</li>
<li class="nav-item">
<a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Sprint 2</a>
</li>
<li class="nav-item">
<a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Sprint 3</a>
</li>
<li class="nav-item">
<a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Sprint 4</a>
</li>
</ul>
</div> -->
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0"> Thursday 07 April 2022</p>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Ativity </th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Score</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Update By</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                                                                Update Date</th>
                                                            <th class="text-secondary opacity-7"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_2022-04-07">



                                                    </tbody>
                                                </table>



                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0"> Friday 08 April 2022</p>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Ativity </th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Score</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Update By</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Update Date</th>
                                                            <th class="text-secondary opacity-7"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_2022-04-08">

                                                    </tbody>
                                                </table>



                                            </div>
                                        </div>
                                    </div>

                                    <!-- 
                                    <div class="d-flex align-items-center" style="margin-top : 20px;">
                                        <p class="mb-0"> </p>
                                        <button class="btn btn-primary btn-sm ms-auto"> Save</button>
                                    </div> -->
                                </div>

                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-one-profile-tab">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0"> Saturday 09 April 2022</p>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Ativity </th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Score</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Update By</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Update Date</th>
                                                            <th class="text-secondary opacity-7"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_2022-04-09">



                                                    </tbody>
                                                </table>



                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0"> Sunday 10 April 2022</p>
                                                </div>
                                            </div>
                                            <div class="card-body" id="table_2022-04-10">

                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Ativity </th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Score</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Update By</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Update Date</th>
                                                            <th class="text-secondary opacity-7"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_2022-04-10">



                                                    </tbody>
                                                </table>



                                            </div>
                                        </div>
                                    </div>


                                    <!-- <div class="d-flex align-items-center" style="margin-top : 20px;">
                                        <p class="mb-0"> </p>
                                        <button class="btn btn-primary btn-sm ms-auto"> Save</button>
                                    </div> -->

                                </div>


                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                aria-labelledby="custom-tabs-one-messages-tab">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0"> Monday 11 April 2022</p>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <table class="table align-items-center mb-0" id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Ativity </th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Score</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Update By</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Update Date</th>
                                                            <th class="text-secondary opacity-7"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_2022-04-11">



                                                    </tbody>
                                                </table>



                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header pb-0">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0"> Tuesday 12 April 2022</p>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Ativity </th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Score</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Update By</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Update Date</th>
                                                            <th class="text-secondary opacity-7"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table_2022-04-12">



                                                    </tbody>
                                                </table>



                                            </div>
                                        </div>
                                    </div>


                                    <!-- <div class="d-flex align-items-center" style="margin-top : 20px;">
                                        <p class="mb-0"> </p>
                                        <button class="btn btn-primary btn-sm ms-auto"> Save</button>
                                    </div> -->
                                </div>



                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                                aria-labelledby="custom-tabs-one-settings-tab">
                                Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus
                                turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis
                                vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum
                                pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget
                                aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac
                                habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>



    </div>
</div>


<script>
$(document).ready(function() {
    get_activity_cluster();
    // $('.table').DataTable();
});


function get_activity_cluster() {

    cluster_id = <?php echo $cluster_id ?>;

    $.ajax({
        type: 'post',
        url: "<?php echo site_url() . '/SqlController/get_activity_cluster_ajax'; ?>",
        data: {
            'cluster_id': cluster_id,
        },
        dataType: 'json',
        success: function(data) {
            console.log('get_channel : ', data);
            for (let index = 7; index <= 9; index++) {
                $('#table_2022-04-0' + index).html('');
            }
            for (let index = 10; index <= 14; index++) {
                $('#table_2022-04-' + index).html('');
            }


            create_checklist(data['jason_channel']);
            plus_score();
            $('#cluster_image').attr('src',
                '<?php echo base_url() . 'uploads/cluster' . $cluster_id . '.jpg' ?>');


        }
    })



}


/*
 * create_table
 * ตารางแสดงข้อมูลฟอร์มรับสมัครงาน
 * @input 	arr_form
 * @output   -
 * @Author   62160011 Supawit Niramonpanich
 * @Create Date 2564-08-13	
 */
function create_checklist(arr_form) {

    let html_code = ''; //html_code : string for add elements



    // for (let index = 0; index < arr_form.length; index++) {
    //     html_code =''; 
    //     console.log('frame');
    //     html_code += '    <tr>';
    //     html_code += '        <td>';
    //     html_code += '            <div class="d-flex px-2 py-1">';
    //     html_code += '                <div';
    //     html_code += '                    class="d-flex flex-column justify-content-center">';
    //     html_code += '                    <h6 class="mb-0 text-sm">Best Team</h6>';
    //     html_code += '                    <!-- <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p> -->';
    //     html_code += '                </div>';
    //     html_code += '             </div>';
    //     html_code += '         </td>';
    //     html_code += '         <td>';
    //     html_code += '             <p class="text-xs font-weight-bold mb-0"> ' +  (index +1) + ' $E </p>';
    //     html_code += '        </td>';
    //     html_code += '        <td>';
    //     html_code += '            <div class="d-flex px-2 py-1">';
    //     html_code += '                <div';
    //     html_code += '                    class="d-flex flex-column justify-content-center">';
    //     html_code += '                     <p class="text-xs text-secondary mb-0"></p>';
    //     html_code += '                </div>';
    //     html_code += '             </div>';
    //     html_code += '        </td>';
    //     html_code += '        <td>';
    //     html_code += '            <div class="d-flex px-2 py-1">';
    //     html_code += '                     <span class="text-secondary text-xs font-weight-bold"></span>';
    //     html_code += '         </td>';
    //     html_code += '        <td class="align-middle">';
    //     html_code += '           <div class="form-check form-switch">';
    //     html_code += '               <input class="form-check-input" type="checkbox"';
    //     html_code += '                    id="rememberMe">';
    //     html_code += '            </div>';
    //     html_code += '        </td>';
    //     html_code += '    </tr>';

    //     $('#table_2022-04-07').append(html_code);

    // }



    arr_form.forEach((row_form, index_form) => {
        html_code = '';
        console.log('frame');
        html_code += '    <tr>';
        html_code += '        <td>';
        html_code += '            <div class="d-flex px-2 py-1">';
        html_code += '                <div';
        html_code += '                    class="d-flex flex-column justify-content-center">';
        html_code += '                    <p class="text-xs  font-weight-bold mb-0 "> ' + row_form[
            'activity_name'] + ' </p>';
        html_code +=
            '                    <!-- <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p> -->';
        html_code += '                </div>';
        html_code += '             </div>';
        html_code += '         </td>';
        html_code += '         <td>';
        html_code += '         <input type="hidden" name="score" value="' + row_form['activity_score'] + '">';
        html_code += '             <p class="text-xs font-weight-bold mb-0 score" > ' + row_form[
            'activity_score'] + ' $E </p>';
        html_code += '        </td>';
        html_code += '        <td>';
        html_code += '            <div class="d-flex px-2 py-1">';
        html_code += '                <div';
        html_code += '                    class="d-flex flex-column justify-content-center">';
        if (row_form['date_update'] != '0000-00-00') {
            html_code += '                     <p class="text-xs text-secondary mb-0"> ' + row_form[
                'date_update'] + ' </p>';
        } else {
            html_code += '                     <p class="text-xs text-secondary mb-0"></p>';
        }
        html_code += '                </div>';
        html_code += '             </div>';
        html_code += '        </td>';
        html_code += '        <td>';
        html_code += '            <div class="d-flex px-2 py-1">';
        if (row_form['date_update'] != '0000-00-00') {
            html_code += '                     <span class="text-secondary text-xs font-weight-bold"> ' +
                row_form['user_name'] + ' ' + row_form['user_lastname'][0] + '. </span>';
        } else {
            html_code += '                     <span class="text-secondary text-xs font-weight-bold"></span>';
        }
        html_code += '         </td>';
        html_code += '        <td class="align-middle">';
        html_code += '           <div class="form-check form-switch">';
        html_code += '               <input class="form-check-input" name="checkbox" id="status' + row_form[
                'activity_cluster_id'] + '" onclick="cheack_activity(' + row_form['activity_cluster_id'] +
            ')" type="checkbox"';

        if (row_form['activity_cluster_status'] == 1) {
            html_code += '      checked       >';
        } else {
            html_code += '                    >';
        }

        html_code += '            </div>';
        html_code += '        </td>';
        html_code += '    </tr>';

        $('#table_' + row_form['activity_cluster_day']).append(html_code);
    });






    //     arr_form.forEach((row_form, index_form) => {
    //     html_code += '   <tr> ';
    //     html_code += '   <td class="text-center">  ' +  (index_form +1) + '  </td> ';


    //     html_code += '  <td style="padding-left:19px">' + row_form['form_name']  + '</td> ';
    //     html_code += '  <td class="text-center">' + row_form['create_first'] + " " + row_form['create_last'][0] + ".<br>" + convert_date(row_form['date_create']) + ' </td> ';
    //     /* Start data have update first and update last */
    //     if(row_form['update_first'] != null){
    //     html_code += '  <td class="text-center"> ' + row_form['update_first'] + " " + row_form['update_last'][0] + ".<br>" + convert_date(row_form['date_update']) +'</td>';
    //     }
    //     /* End data have update first and update last */
    //     /* Start data don't have update first and update last */
    //     else{
    //     html_code += '  <td class="text-center"> - </td> ';
    //     }        
    //     /* End data don't have update first and update last */



    //     html_code += ' <td class="text-center"> ';
    //     html_code += ' <a type="button" class="btn btn-default" href="<?php echo site_url() . '/Form/Form_manage/show_form_info/' ?>' + row_form['form_id'] + '<?php; ?>"title="View"> ';
    //     html_code += '  <i class="fas fa-search"></i> ';
    //     html_code += '  </a> ';
    //     html_code += '<a style="margin-right:3px;" type="button" title="Duplicate" class="btn btn-default" href="<?php echo site_url() . '/Form/Form_manage/show_form_duplicate/' ?>' + row_form['form_id'] + '<?php; ?>">';
    //     html_code += '<i class="fas fa-clone"></i>';
    //     html_code += '</a>';
    //     html_code +=' <a type="button" class="btn btn-default" href="<?php echo site_url() . '/Form/Form_manage/show_form_edit/' ?>' + row_form['form_id'] + '<?php; ?>" title="Edit">';
    //     html_code +=' <i class="fas fa-edit" ></i>' ;
    //     html_code +=' </a>' ;
    //     html_code += '  <button type="button" class="btn btn-default" onclick="delete_form('+row_form['form_id']+')" title="Delete"> ';
    //     html_code += '  <i class="fas fa-trash-alt"></i> '; 
    //     html_code += '  </button> '    ;
    //     html_code += '  </a> ';
    //     html_code += '  </td> ';
    //     html_code += '  </tr> ' ;
    //     });

    //     html_code += '  </tbody> ';
    //     html_code += '  </table> ';

    //     $('#create_table').html(html_code);

}
</script>



<script>
function plus_score() {

    arr_score = $('#cheacklist').find('input[name="score"]');
    arr_checkbox = $('#cheacklist').find('input[name="checkbox"]');


    console.log(arr_score);

    total_score = 0;

    for (let index = 0; index < arr_score.length; index++) {

        if (arr_checkbox[index].checked) {
            console.log('Score: ' + arr_score[index].value);
            total_score = total_score + Number(arr_score[index].value);
        }
        // total_score = total_score + Number(arr_score[index].value);
    }
    $('#score_total').html('Total Score : ' + total_score + ' $E')
    // $('#total_score').text('Total '+ total_score + ' Points');
    // $('#total_score').attr('value',total_score)

}


function cheack_activity(activity_id) {


    console.log(activity_id);

    if (document.getElementById('status' + activity_id).checked == true) {
        activity_status = 1;
        console.log('true');
        document.getElementById('status' + activity_id).checked = false
    } else {
        activity_status = 0;
        console.log('false');
        document.getElementById('status' + activity_id).checked = true

    }


    Swal.fire({
        title: 'Do you want to change <br> status activity ?',
        icon: 'warning',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#5e72e4',
        cancelButtonColor: ' white ',
        confirmButtonText: 'Yes',
        cancelButtonText: '<Font color=black> No <Font>',
        reverseButtons: true
    }).then((result) => {
        /* Start Change status */
        if (result.value) {
            $.ajax({
                type: 'post',
                url: "<?php echo site_url() . '/SqlController/change_status_ajax'; ?>",
                data: {
                    'activity_id': activity_id,
                    'activity_status': activity_status
                },
                dataType: 'json',
                success: function(data) {
                    /* Start Alert Change status success */
                    if (data['message'] == 'Success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Change status success',
                            type: 'success',
                            showConfirmButton: false,
                            timer: 2000
                        });
                        get_activity_cluster();
                    }
                }
            });
        }
        /* End Change status */
    })
    $(".swal2-cancel").css("border", "1px solid #A79E9E");

}
</script>