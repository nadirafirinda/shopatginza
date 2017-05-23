<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url() . "assets/css/bootstrap.min.css" ?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo base_url() . "assets/css/sb-admin.css" ?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo base_url() . "assets/font-awesome/css/font-awesome.min.css" ?> rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <!-- <li>
                        <a href="admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li> -->
                    <!--<li>
                        <a href="charts"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tabel"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>-->
                    <li class="active">
                        <a href="formadmin"><i class="fa fa-fw fa-edit"></i> Form Create Barang</a>
                    </li>
                    <!--<li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <?php echo form_open_multipart(base_url('Welcome/updatehair/' . $kodebarang));  ?>
                        <form role="form">
                        

                            <!--<div class="form-group">
                                <label>Kode Barang</label>
                                <input class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>-->

                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input class="form-control" input type="text" name="kodebarang" value="<?php echo $kodebarang; ?>" placeholder="Enter text" readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input class="form-control" input type="text" name="namabarang" value="<?php echo $namabarang; ?>" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>Merk</label>
                                <input class="form-control" input type="text" name="merk" value="<?php echo $merk; ?>" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input class="form-control" input type="text" name="harga" value="<?php echo $harga; ?>" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>Jumlah</label>
                                <input class="form-control" input type="text" name="jumlah" value="<?php echo $jumlah; ?>" placeholder="Enter text">
                            </div>

                           <div class="form-group">
                                <label  for="gambar">Gambar</label>
                            <!--         <div class="col-md-12"> -->
                                        <input type="file" name="gambar" size="20" placeholder="Masukkan Harga Produk" >
                                    <!-- </div> -->
                                </div>
                            <!-- <div class="form-group">
                                <label>Gambar</label>
                                <input class="form-control" input type="text" name="gambar" value="<?php echo $gambar; ?>" placeholder="Enter text">
                            </div> -->

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input class="form-control" input type="text" name="deskripsi" value="<?php echo $deskripsi; ?>" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>Review</label>
                                <input class="form-control" input type="text" name="review" value="<?php echo $review; ?>" placeholder="Enter text">
                            </div>
                            <td><input type="hidden" name="is_submit" value="1" /></td>
                            <button type="submit" name="submit" value="Submit" class="btn btn-default">Submit Button</button>
                            <!--<a href="<?php //echo base_url().'Welcome/updatebarang/'?>" ><input type="button" value="Update Barang" class="btn btn-default"></a>-->

                        </form>
                        <?php echo form_close(); ?>

                    </div>
                <!-- /.row -->
                


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=<?php echo base_url() . "assets/js/jquery.js" ?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo base_url() . "assets/js/bootstrap.min.js" ?>></script>

</body>

</html>
