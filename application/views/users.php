<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Scrumification OSSD#10</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css">
  <link href='https://fonts.googleapis.com/css?family=Chakra Petch' rel='stylesheet'>
  <style>
    body {
      font-family: 'Chakra Petch';
      font-size: 22px;
    }
  </style>
</head>

<body>
  <div class="container pt-4">
    <div class="card">
      <div class="card-header text-white" style="background-color:#3282b8" >
        <h1>Scrumification OSSD#10</h1>
      </div>
      <div class="card-body">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
          <div class="card">
            <div class="box box-widget widget-user" style="border-radius: 5%;border: 5px solid #29ab87  !important;background-color:#29ab87">
              <div class="widget-user-header" style="border-radius: 5px 5px 0px 0px;background: url('https://se.buu.ac.th/gami_ossd/assets/dist/img/cluster/cluster0.png') center center;background-color: #d0f0c0 ;height: 180px;background-size: contain;background-origin: content-box;background-repeat: no-repeat;">
              </div>
              <div class="box-footer bg-maroon card-header-font text-white" style="background-color:#29ab87  !important;text-align: center;padding-top: 0px;border-top: 0px !important">
                Cluster 0
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
          <div class="card">
            <div class="box box-widget widget-user" style="border-radius: 5%;border: 5px solid #29ab87  !important;background-color:#29ab87">
              <div class="widget-user-header" style="border-radius: 5px 5px 0px 0px;background: url('https://se.buu.ac.th/gami_ossd/assets/dist/img/cluster/cluster1.png') center center;background-color: #d0f0c0 ;height: 180px;background-size: contain;background-origin: content-box;background-repeat: no-repeat;">
              </div>
              <div class="box-footer bg-maroon card-header-font text-white" style="background-color:#29ab87  !important;text-align: center;padding-top: 0px;border-top: 0px !important">
                Cluster 1
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
          <div class="card">
            <div class="box box-widget widget-user" style="border-radius: 5%;border: 5px solid #29ab87  !important;background-color:#29ab87">
              <div class="widget-user-header" style="border-radius: 5px 5px 0px 0px;background: url('https://se.buu.ac.th/gami_ossd/assets/dist/img/cluster/cluster2.png') center center;background-color: #d0f0c0 ;height: 180px;background-size: contain;background-origin: content-box;background-repeat: no-repeat;">
              </div>
              <div class="box-footer bg-maroon card-header-font text-white" style="background-color:#29ab87  !important;text-align: center;padding-top: 0px;border-top: 0px !important">
                Cluster 2
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
          <div class="card">
            <div class="box box-widget widget-user" style="border-radius: 5%;border: 5px solid #29ab87  !important;background-color:#29ab87">
              <div class="widget-user-header" style="border-radius: 5px 5px 0px 0px;background: url('https://se.buu.ac.th/gami_ossd/assets/dist/img/cluster/cluster3.png') center center;background-color: #d0f0c0 ;height: 180px;background-size: contain;background-origin: content-box;background-repeat: no-repeat;">
              </div>
              <div class="box-footer bg-maroon card-header-font text-white" style="background-color:#29ab87  !important;text-align: center;padding-top: 0px;border-top: 0px !important">
                Cluster 3
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
          <div class="card">
            <div class="box box-widget widget-user" style="border-radius: 5%;border: 5px solid #29ab87  !important;background-color:#29ab87">
              <div class="widget-user-header" style="border-radius: 5px 5px 0px 0px;background: url('https://se.buu.ac.th/gami_ossd/assets/dist/img/cluster/cluster4.png') center center;background-color: #d0f0c0 ;height: 180px;background-size: contain;background-origin: content-box;background-repeat: no-repeat;">
              </div>
              <div class="box-footer bg-maroon card-header-font text-white" style="background-color:#29ab87  !important;text-align: center;padding-top: 0px;border-top: 0px !important">
                Cluster 4
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="card-footer">

        <div id="body">
          <?php
          if ($users) {
          ?>
            <table class="table table-success table-striped" id="example" style="width:100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Acions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                $num = 1;
                foreach ($users as $user) {
                  $col_class = ($i % 2 == 0 ? 'odd_col' : 'even_col');
                  $i++;
                ?>
                  <tr class="<?php echo $col_class; ?>">
                    <td>
                      <?php echo $num++; ?>
                    </td>
                    <td>
                      <?php echo $user->name; ?>
                    </td>
                    <td>
                      <?php echo $user->email; ?>
                    </td>
                    <td>
                      <a href="<?php echo site_url() . '/UserController/update/' . $user->_id; ?>" class="btn btn-warning"><i class="fas fa-edit"></i>&nbsp;&nbsp;Update</a>
                      <a href="<?php echo site_url() . '/UserController/delete/' . $user->_id; ?>" onclick="submitResult(event)" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>

                      <!-- <?php echo anchor('/UserController/update/' . $user->_id, 'Update'); ?>
                      <?php echo anchor('/UserController/delete/' . $user->_id, 'Delete', array('onclick' => "return confirm('Do you want delete this record')")); ?> -->
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          <?php
          } else {
            echo '<div style="color:red;"><p>No Record Found!</p></div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
  <script>
    // data table
    $(document).ready(function() {
      var table = $('#example').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
      });

      table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
    });

    // sweet alert
    function submitResult(e) {
      e.preventDefault();
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "Do you want delete this record!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
      }).then((result) => {
        if (result.isConfirmed) {
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your record has been deleted.',
            'success'
          )
          setTimeout(function() {
            window.location.href = "<?php echo site_url() . '/UserController/delete/' . $user->_id; ?>"
          }, 2500);
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your record is safe :)',
            'error'
          )
        }
      })
    }
  </script>

</body>

</html>