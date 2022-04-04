<style>
.card.card-profile-bottom {
    margin-top: 5em;
}

#add_item {
    margin-right: 2em !important;
}

.user {
    text-align: center;
}

.user-detail {
    float: left;
    padding: 10px;
    text-align: center;
}

.user-list {
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}
</style>




</aside>


<div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->

    <div class="card shadow-lg mx-4 card-profile-bottom ">
        <div class="card-body p-3">
            <div class="row gx-4">

                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h2 class="mb-1" >
                            Item Management
                        </h2>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <body>
        <div class="container-fluid py-4">

            <div class="container-fluid">

                <div class="card">
                    <div class="col text">
                        <br>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล Item</h5>
                                    </div>

                                    <div class="modal-body">
                                        <!-- <form action="<?php echo site_url() . '/SqlController/add_item/' ?> " method="post" enctype="multipart/form-data"> -->
                                        <div class="mb-3">
                                            <label for="focusedinput" class="form-label">Item Name </label>
                                            <input type="text" class="form-control" id="name1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="focusedinput" class="form-label">Item Price</label>
                                            <input type="number" class="form-control" id="price1" min="0" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="focusedinput" class="form-label">Item amount</label>
                                            <input type="number" class="form-control" id="num1" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" onclick="add_item()" class="btn btn-success">Save</button>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </div>
                    <div class="row justify-content-center p-4">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">

                                    <row>
                                        <h4>Item List

                                        <button id="add_item" class="btn btn-primary float-end" data-toggle="modal"
                                            data-target="#exampleModalCenter" style="margin-bottom:-70px">Add Item
                                        </button>

                                        </h4>
                                    </row>

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
                                                        Item Amount</th>
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
                                                            <?php echo $arr_item[$i]->item_price ?></p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            <?php echo $arr_item[$i]->item_num ?></p>
                                                    </td>
                                                    <td class="align-middle text-center">

                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#edit_modal<?php echo $i ?>"> <i
                                                                class="fa fa-pencil"></i></button>


                                                        <a
                                                            href="<?php echo site_url() . '/SqlController/delete_item/' . $arr_item[$i]->item_id; ?>">
                                                            <button type="button" class="btn btn-danger btn-sm"> <i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </a>
                                                    </td>

                                                </tr>




                                                <!-- Modal -->
                                                <div class="modal fade" id="edit_modal<?php echo $i ?>" tabindex="-1"
                                                    required role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    แก้ไขข้อมูล Item
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="focusedinput" class="form-label">Item
                                                                        Name </label>
                                                                    <input type="text"
                                                                        id="id_<?php echo $arr_item[$i]->item_id ?>"
                                                                        value="<?php echo $arr_item[$i]->item_id ?>"
                                                                        placeholder="ชื่อ item" hidden>
                                                                    <input type="text"
                                                                        id="name_<?php echo $arr_item[$i]->item_id ?>"
                                                                        value="<?php echo $arr_item[$i]->item_name ?>"
                                                                        placeholder="ชื่อ item" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="focusedinput" class="form-label">Item
                                                                        Price</label>
                                                                    <input type="number"
                                                                        id="price_<?php echo $arr_item[$i]->item_id ?>"
                                                                        min="0"
                                                                        value="<?php echo $arr_item[$i]->item_price ?>"
                                                                        placeholder="ราคา item" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="focusedinput" class="form-label">Item
                                                                        amount</label>
                                                                    <input type="number"
                                                                        id="num_<?php echo $arr_item[$i]->item_id ?>"
                                                                        value="<?php echo $arr_item[$i]->item_num ?>"
                                                                        placeholder="จำนวน item คงเหลือ" required>
                                                                </div>



                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="button"
                                                                    onclick="edit_item(<?php echo $arr_item[$i]->item_id ?>)"
                                                                    class="btn btn-success">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal -->

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
    </body>






</div>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Argon Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0 overflow-auto">
            <!-- Sidebar Backgrounds -->
            <!-- <div>
				<h6 class="mb-0">Sidebar Colors</h6>
			</div>
			<a href="javascript:void(0)" class="switch-trigger background-color">
				<div class="badge-colors my-2 text-start">
					<span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
					<span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
				</div>
			</a> -->
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
                    onclick="sidebarType(this)">White</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                    onclick="sidebarType(this)">Dark</button>
            </div>

            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->

            <hr class="horizontal dark my-sm-4">

            <div class="mt-2 mb-5 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                        onclick="darkMode(this)">

                </div>
            </div>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
                Download</a>
            <a class="btn btn-outline-dark w-100"
                href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View









                documentation</a>






            <div class="w-100 text-center">

















































                <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard"
                    data-icon="octicon-star" data-size="large" data-show-count="true"
                    aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>





















                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard"
                    class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard"
                    class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // $('#myTable').DataTable();
    // $("#myTable_length").css('margin-left', '20px');
    // $("#myTable_info").css('margin-left', '20px');
    // $("#myTable_filter").css('margin-right', '20px');
    // $('#myTable').after('<br>');
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
</script>
<script>
function add_item() {
    var item_name = document.getElementById('name1').value;
    var item_price = document.getElementById("price1").value;
    var item_num = document.getElementById("num1").value;
    // document.getElementById('name1').value = null;
    // document.getElementById("price1").value = null;
    // document.getElementById("num1").value = null;
    console.log(item_name)
    console.log(item_price)
    console.log(item_num)

    // ใช
    //
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/SqlController/add_item",
        data: {
            "item_name": item_name,
            "item_price": item_price,
            "item_num": item_num,
        },
        success: function(data) {
            console.log(data);
            window.location.href = "<?php echo base_url(); ?>index.php/SqlController/show_item_manage";
        }
    })
}

function edit_item(i) {
    // i = i - 1;
    console.log(i)
    var item_name = document.getElementById('name_' + i).value;
    var item_price = document.getElementById("price_" + i).value;
    var item_num = document.getElementById("num_" + i).value;
    var item_id = document.getElementById("id_" + i).value;
    console.log(item_name)
    console.log(item_price)
    console.log(item_num)
    console.log(9999)
    // ใช้ ajax 
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/SqlController/edit_item",
        data: {
            "item_name": item_name,
            "item_price": item_price,
            "item_num": item_num,
            "item_id": item_id,
        },
        success: function(data) {
            console.log(data);
            window.location.href = "<?php echo base_url(); ?>index.php/SqlController/show_item_manage";
        }
    })
}
</script>