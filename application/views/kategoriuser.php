<?php
    //session_start();
    
    if(isset($_SESSION['username'])) {
                
    }
    else {
        //echo "tidak ada session";
        header("Location: index.php");
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kategori</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url() . "assets/css/bootstrap.min.css" ?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo base_url() . "assets/css/1-col-portfolio.css" ?> rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexuser">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		
		<?php foreach ($data as $x) { ?> 
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
				<a href="#">
                    <img class="img-responsive" src=<?php echo base_url() . "assets/gambar/" . $x['gambar']; ?> alt="">
                </a>
            </div>
			

            <div class="col-md-5">
			  
                <h3><?= $x['namabarang'] ?></h3>
                <h4><?= $x['merk'] ?></h4>
				 
                <p><?= $x['deskripsi'] ?></p>
				<div class="well">

                    <div class="text-right">
                        <a class="btn btn-success" href="formbeli">Buy Now with 10% Discount!</a>
                    </div>
					Editor's Review
                    <hr>
					

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            
                            <span class="pull-right">10 days ago</span>
                            <p><?= $x['review'] ?></p>
                        </div>
                    </div>
                <!--<a class="btn btn-primary" href="">Buy Now!<span></span></a>-->
            </div>
        </div>
        <!-- /.row -->

        <hr>
		<?php } ?>
		
        

        <!-- Pagination -->
        <?php echo $this->pagination->create_links(); ?>
		<!--<div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>-->
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=<?php echo base_url() . "assets/js/jquery.js" ?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo base_url() . "assets/js/bootstrap.min.js" ?>></script>

</body>

</html>
