<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Codeigniter MongoDB Create Read Update Delete Example</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container pt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1>Codeigniter MongoDB Create Read Update Delete Example</h1>
            </div>
            <div class="card-body">
                <div>
                    <a href="<?php echo site_url() . '/usercontroller'; ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;Back to Users</a>
                </div>
                <!-- <div>
                    <?php echo anchor('/usercontroller', 'Back to Users'); ?>
                </div> -->
                <br>
                <div id="body">
                    <?php
                    if (isset($error)) {
                        echo '<p style="color:red;">' . $error . '</p>';
                    } else {
                        echo validation_errors();
                    }
                    ?>

                    <?php
                    $attributes = array('name' => 'form', 'id' => 'form');
                    echo form_open($this->uri->uri_string(), $attributes);
                    ?>

                    <div class="row g-3 align-items-center">
                        <div class="col-7">
                            <h5>Full Name</h5>
                            <input type="text" name="name" class="form-control" placeholder="Firstname & Lastname" value="<?php echo set_value('name'); ?>" size="50" />
                        </div>
                        <div class="col-7">
                            <h5>Email Address</h5>
                            <input type="text" name="email" class="form-control" placeholder="Your Email address" value="<?php echo set_value('email'); ?>" size="50" />
                        </div>
                    </div>
                    <br>
                    <p><input type="submit" name="submit" class="btn btn-success" value="Submit" /></p>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>