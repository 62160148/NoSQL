<div class="position-absolute w-100 min-height-300 top-0"
    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
</div >
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main" style="z-index: auto">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">

            <span class="ms-1 font-weight-bold"> Scrum</span>
        </a>
    </div>
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" >
        <ul class="navbar-nav">
        <hr>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url() . '/SqlController/show_cluster_checklist/0' ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-dark  text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Cluster Checklist</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url() . '/SqlController/show_cluster_item/0' ?> ">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-dark  text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Cluster item</span>
                </a>
            </li>
            <hr>


            <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url() . '/SqlController/show_item_manage/' ?> ">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-basket text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Item management</span>
                </a>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link " href="../show_activity_manage/"> -->
                <a class="nav-link " href="<?php echo site_url() . '/SqlController/show_activity_manage/' ?> ">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-basket text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Activity management</span>
                </a>



       
     </li>
     <li class="nav-item">

<a class="nav-link " href="<?php echo site_url() . '/UserController/show_user_manage/' ?>">
    <div
        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
    </div>
    <span class="nav-link-text ms-1">User management</span>
</a>
</li>
     <hr>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url() . '/UserController/show_login' ?>">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-user-run text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Logout</span>
                </a>
            </li>
    </div>