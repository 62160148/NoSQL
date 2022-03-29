<style>
    .bg {
        background-image: url('<?php echo base_url() ?>assets/template/argon-dashboard-master/assets/img/logo_fac.jpg');
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        function login() { //login user
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url() . '/UserController/login' ?>',
                data: {
                    username: $('#username').val(),
                    password: $('#password').val()
                },
                success: function(data, status) { // function success
                    var obj = JSON.parse(data)
                    if (obj.length != 0) {
                        setTimeout(function() {
                            window.location.href =
                                '<?php echo site_url() . '/UserController/show_user_home/' ?>'
                        }, 500) //function set
                    } //if
                    else {
                        alert('You entered incorrect information.')
                    } //else
                }, //end success
                error: function(status) { //function error
                    alert('You entered incorrect information.')
                } //end error
            });

        } //end login user

        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
</head>

<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h2 class="font-weight-bolder text-info text-gradient">Welcome To TDD</h2>
                                <p class="mb-0">Enter your username and password to sign in</p>
                            </div>
                            <div class="card-body">
                                <form role="form"  action="<?php echo site_url() ?>/UserController/check_login" method="post" enctype="multipart/form-data" name="login">
                                    <label>Username</label>
                                    <div class="mb-3">
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="username-addon" required>
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6 bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<br>
<br>
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright © <script>
                        document.write(new Date().getFullYear())
                    </script> System by TDD Group SE#9
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->