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


<div class="main-content position-relative max-height-vh-100 h-100 " id="cheacklist">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom ">
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
                        <p class="mb-0 font-weight-bold text-sm" id="cluster_score">
                        <?php echo 'Totle Score '.$arr_cluster[ $cluster_id ]->cluster_score.' $E' ?>
                        </p>
                    </div>
                </div>


                <div class="col-auto my-auto">
                    <!-- <div class="h-100"> -->
                    <a href="<?php echo site_url() . '/UserController/show_cluster_detail/' . $cluster_id; ?>">

                        <button class="btn" type="button" style="margin-bottom: 0px;">
                            <i class="fa fa-users"></i> challenger2
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
                            <li><a class="dropdown-item" href="../show_cluster_item/0">Cluster 0</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/1">Cluster 1</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/2">Cluster 2</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/3">Cluster 3</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/4">Cluster 4</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/5">Cluster 5</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/6">Cluster 6</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/7">Cluster 7</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/8">Cluster 8</a></li>
                            <li><a class="dropdown-item" href="../show_cluster_item/9">Cluster 9</a></li>

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


                    <div class="card-body ">
                        <div class="tab-content " id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">


                                <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">

                                 
                                        <h4> Cluster Item</h4>
                     

                                    <hr>

                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        #</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Item Name</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Item Price</th>

                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < count($arr_item); $i++) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">

                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    <?php echo $i + 1 ?></p>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            <?php echo $arr_item[$i]->item_name ?></p>

                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            <?php echo $arr_item[$i]->item_price.' $E' ?></p>
                                                    </td>

                                                    <td class="align-middle text-center" id="<?php echo $arr_item[$i]->item_cluster_id?>">

                                                        <?php if( $arr_item[$i]->item_cluster_status == 1 ){?>
                                                            <p class="text-xs font-weight-bold mb-0" style="color:green">
                                                            <?php echo ' Approve success' ?></p>
                                                        <?php }else if( $arr_item[$i]->item_cluster_status == 2 ){ ?>
                                                            <p class="text-xs font-weight-bold mb-0" style="color:red">
                                                            <?php echo ' Order disapproved ' ?></p>

                                                        <?php }else{?>
                                                            <button type="button" class="btn btn-success btn-2" onclick=" approve_item(<?php echo $arr_item[$i]->item_cluster_id?>) "
                                                            data-toggle="modal"
                                                            data-target="#edit_modal<?php echo $i ?>"> <i
                                                                class="fa fa-check"></i></button>

                                                       
                                                                <button type="button" class="btn btn-danger btn-2" onclick=" cancel_item( <?php echo $arr_item[$i]->item_cluster_id?>,<?php echo $arr_item[$i]->item_price?>)" > <i
                                                                        class="fa fa-close"></i></button>
                                                            
                                                        <?php }?>
                                                    </td>

                                                </tr>



                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>





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
    $('#myTable').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 20, 30, -1], //-1 = show all
                    [10, 20, 30, "ทั้งหมด"]
                ],
                // responsive: true,
                language: {
                    infoFiltered: "",
                    paginate: {
                        "first": "",
                        "last": "",
                        "next": ">",
                        "previous": "<"
                    },
                },
            });
            $('#member_table_wrapper').addClass('p-0');



    
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



function approve_item(item_cluster_id) {
    item_cluster_status = 1;
    Swal.fire({
        title: 'Do you want to approve <br> this order ?',
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
                url: "<?php echo site_url() . '/SqlController/change_cluster_item_ajax'; ?>",
                data: {
                    'item_cluster_id': item_cluster_id,
                    'item_cluster_status': item_cluster_status
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
                        $('#'+item_cluster_id).html( '<p class="text-xs font-weight-bold mb-0" style="color:green"> Approve success</p>');

                        // get_activity_cluster();
                    }
                }
            });
        }
        /* End Change status */
    })
    $(".swal2-cancel").css("border", "1px solid #A79E9E");

}

cluster_score = <?php echo json_encode( $arr_cluster[$cluster_id]->cluster_score )  ?>

function cancel_item(item_cluster_id,item_price) {

    cluster_id2 =   <?php  echo  $cluster_id  ?>
    


    console.log(item_cluster_id);
    item_cluster_status = 2;
    Swal.fire({
        title: 'Do you want to cancel <br> this order ?',
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
        cluster_score = parseInt(cluster_score) + parseInt(item_price);

        if (result.value) {
            $.ajax({
                type: 'post',
                url: "<?php echo site_url() . '/SqlController/change_cluster_item_ajax'; ?>",
                data: {
                    'item_cluster_id': item_cluster_id,
                    'item_cluster_status': item_cluster_status,
                    'cluster_id': cluster_id,
                    'cluster_score': cluster_score

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
                        $('#'+item_cluster_id).html( '<p class="text-xs font-weight-bold mb-0" style="color:red">Order disapproved</p>');
                        // get_activity_cluster();
                        $('#cluster_score').html('Totle Score '+cluster_score+' $E')

                    }
                }
            });
        }
        /* End Change status */
    })
    $(".swal2-cancel").css("border", "1px solid #A79E9E");

}
</script>