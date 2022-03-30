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
                        <img id="cluster_image" src="<?php echo base_url().'/uploads/image_demo.jpg' ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            <?php echo 'Cluster 1 ' ?>
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm" id="score_total">
                            
                        </p>
                    </div>
                </div>



                








            </div>
        </div>
    </div>


    <div class="container-fluid py-4">

    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">ITEM SHOP</p>
              </div>
            </div>
            <div class="card-body">

            <div class="row" id="item_list">

            </div>





            </div>
          </div>
        </div>

      </div>


    </div>



</div>


<script>

$(document).ready(function() {
    get_item_ajax();
    // $('.table').DataTable();
});


function get_item_ajax() {

    $.ajax({
        type: 'post',
        url: "<?php echo site_url() . '/SqlController/get_item_ajax'; ?>",
        data: {
        },
        dataType: 'json',
        success: function(data) {
            console.log('get_channel : ', data);
            create_checklist(data['jason_channel']);
            
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
    function create_checklist(arr_form){

        let html_code = ''; //html_code : string for add elements

        arr_form.forEach((row_form, index_form) => {

            // html_code += '                    <p class="text-xs  font-weight-bold mb-0 "> ' + row_form['activity_name']  + ' </p>';


            html_code += ' <div class="col-md-4">';
            html_code += '         <div class="card">';
            html_code += '             <div class="card-body pb-2">';
            html_code += '                 <a href="javascript:;" class="card-title h5 d-block text-darker">';
            html_code += '                    ' + row_form['item_name'] + '';
            html_code += '                 </a>';
            html_code += '                 <p class="card-description mb-4">';
            html_code += '                     ราคา : ' + row_form['item_price'] + ' $E';
            html_code += '                 </p>';

            html_code += '                 <div class="author align-items-center">';
            if( row_form['item_num'] == 0 ){
                html_code += '                 <div class="text-gradient text-danger text-uppercase text-xs font-weight-bold my-2  mr-auto"> สิ้นค้าหมด </div>';
            }else{
                html_code += '                 <div class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">จำนวนคงเหลือ : ' + row_form['item_num'] + ' ชิ้น</div>';
                html_code += '                     <button class="btn btn-primary btn-sm ms-auto" onclick="buy_item(' + row_form['item_id'] + ',' + row_form['item_num'] + ')"> BUY </button>';
            }
            html_code += '                 </div>';
            html_code += '             </div>';
            html_code += '         </div>';
            html_code += '      </div>';


            
        });
        $('#item_list').html(html_code);


    }





  </script>



<script>




function buy_item(item_id,item_num) {

    cluster_id = 1;
    console.log(item_id);

    Swal.fire({
        title: 'Do you want to buy <br> this item ?',
        icon: 'warning',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#5e72e4',
        cancelButtonColor: ' white ',
        confirmButtonText: 'Yes',
        cancelButtonText:  '<Font color=black> No <Font>',
        reverseButtons: true
    }).then((result) => {
        /* Start Change status */
        if (result.value) {
            $.ajax({
                type: 'post',
                url: "<?php echo site_url() . '/SqlController/buy_item_ajax'; ?>",
                data: {
                    'item_id': item_id,
                    'cluster_id': cluster_id,
                    'item_num':item_num
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
                        get_item_ajax();
                    }
                }
            });
        }
        /* End Change status */
    })
    $(".swal2-cancel").css("border", "1px solid #A79E9E");

}


</script>


