<?php
include "dbconnection.php";
$query = "SELECT * FROM `client_entry` WHERE `status`=0";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->


            <ul class="navbar-nav ml-auto">
                <!-- fullscreen -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Panel</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Research Project</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link active">
                                <p>
                                    Visit Website
                                </p>
                            </a>
                </nav>
            </div>
        </aside>

        <!-- Content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1> Client Entries</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <script>
                function deleteEntry(id) {
                    $("#delete-id").val(id);
                    $("#delete-form").submit();
                }
            </script>

            <!-- Main content -->
            <section class="content">
                <form style="display: none;" id="delete-form" method="POST" action="delete_entry.php">
                    <input type="text" name="id" id="delete-id" />
                </form>
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Projects</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 20%">
                                        Name of Author
                                    </th>
                                    <th style="width: 20%">
                                        Title Of Paper
                                    </th>
                                    <th style="width: 20%">
                                        Type of Intrest
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        Uploads
                                    </th>
                                    <th style="width: 40%">
                                    </th>
                                </tr>
                            </thead>
                            <script>
                                var entries = {};
                            </script>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <script>
                                    var entry = {
                                        fname: '<?php echo $rows["fname"] ?>',
                                        ftitle: '<?php echo $rows["ftitle"] ?>',
                                        ftype: '<?php echo $rows["ftype"] ?>',
                                        ffile: '<?php echo $rows["ffile"] ?>',
                                    };
                                    entries[<?php echo $rows["id"] ?>] = entry;
                                </script>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $rows["id"] ?>
                                        </td>
                                        <td>
                                            <a>
                                                <?php echo $rows["fname"] ?>
                                            </a>
                                        </td>

                                        <td>
                                            <a>
                                                <?php echo $rows["ftitle"] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a>
                                                <?php echo $rows["ftype"] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a>
                                                <?php echo $rows["ffile"] ?>
                                            </a>
                                        </td>
                                        <td class="project-actions text-right">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $rows["id"] ?>">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </button>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#" onclick='deleteEntry(`<?php echo $rows["id"] ?>`)'>
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal<?php echo $rows["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> <?php echo $rows["fname"] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 class="modal-title" id="exampleModalLabel"> Title Of Paper</h6>
                                                    <?php echo $rows["ftitle"] ?>
                                                    <h6 class="modal-title" id="exampleModalLabel"> Type Of Intrest</h6>
                                                    <?php echo $rows["ftype"] ?>

                                                    <a target="_blank" href="uploads/<?php echo $rows["ffile"] ?>"><button type="button" class="btn btn-primary">Open PDF</button></a>
                                                    <?php echo $rows["ffile"] ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" onclick='push(`<?php echo $rows["id"] ?>`)'>Approve</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                                ?>

                                </tbody>
                        </table>
                        <form action="push.php" id="form2" method="POST" style="display: none;">
                            <input type="text" id="pid" name="pid">
                        </form>
                        <script>
                            function push(id) {
                                document.getElementById("pid").value = id;
                                document.getElementById("form2").submit();
                            }
                        </script>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>