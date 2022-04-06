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

    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom ">
        <div class="card-body p-3">
            <div class="row gx-4">

                <div class="col-auto my-auto ">
                    <div class="h-100">
                        <h2 class="mb-1">
                            User Management
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

                    </div>
                    <div class="row justify-content-center p-4">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">

                                    <row>
                                        <h4>Edit User
                                            <a href="<?php echo site_url() . '/Usercontroller/show_user_manage'; ?>" class="btn btn-secondary float-end" style="margin-bottom:-70px">Back to Users</a>

                                        </h4>

                                    </row>

                                    <hr>

                                </div>

                                <div class="card-body px-0 pt-0 pb-2">
                                    <?php
                                    if (isset($error)) {
                                        echo '<p style="color:red;">' . $error . '</p>';
                                    } else {
                                        echo validation_errors();
                                    }
                                    ?>

                                    <?php
                                    $attributes = array('name' => 'form', 'id' => 'form', 'style' => 'margin-left: 2rem');
                                    echo form_open($this->uri->uri_string(), $attributes);
                                    ?>

                                    <div class="col-4">
                                        <h5>Name</h5>
                                        <input type="text" name="name" class="form-control" value="<?php echo isset($user) ? $user->name : set_value('name'); ?>" size="50" />
                                    </div>
                                    <br>

                                    <div class="col-2">
                                        <h5>Cluster</h5>
                                        <input type="number" name="name" class="form-control" value="<?php echo isset($user) ? $user->cluster : set_value('cluster'); ?>" size="50" />
                                    </div>
                                    <br>

                                    <div class="col-2">
                                        <h5>Role</h5>
                                        <input type="number" name="name" class="form-control" value="<?php echo isset($user) ? $user->role : set_value('role'); ?>" size="50" />
                                    </div>
                                    <br>
                                    <br>

                                    <p><input type="submit" name="submit" class="btn btn-success" value="Submit" /></p>

                                    <?php echo form_close(); ?>
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
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
            </div>

            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->

            <hr class="horizontal dark my-sm-4">

            <div class="mt-2 mb-5 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">

                </div>
            </div>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
                Download</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View


                documentation</a>


            <div class="w-100 text-center">


                <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>

                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>