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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: white" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="welcome">Shop at Ginza</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a></a>
                    </li>
                    <li>
                        <a class="navbar-brand2" href="contacts">About us!</a>
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
                <img class="img-responsive" src=<?php echo base_url() . "assets/gambar/" .$data[0]['gambarbanner']; ?> alt="" width=100%></img>
                <h1 class="page-header">“I love the confidence that makeup gives me.”
                    <small>- Tyra Banks</small>
                </h1>
            </div>
        </div>

        <!-- /.row -->
		
		
        <!-- Project One -->
        <p> </p>
        <?php foreach ($data as $x) { ?>
        <div class="row2">
            <div class="col-md-7">
				<a href="#">
                    <img class="img-responsive" src=<?php echo base_url() . "assets/gambar/" . $x['gambar']; ?> alt="">
                </a>
            </div>
			

            <div class="col-md-5">
			  
                <h3 class="namabarang"><?= $x['namabarang'] ?></h3>
                <h4 class="merk"><?= $x['merk'] ?></h4>
				 
                <p class="deskripsi"><?= $x['deskripsi'] ?></p>
                <h4 class="harga">Price(IDR) <?= $x['harga'] ?></h4>
				
                <div>
                    <a class="button" href="formbeli?kat=<?= $_GET['kat'] ?>&id=<?= $x['kodebarang']?>" <strong>BUY NOW</strong></a>
                </div>
                <p></p>
                <div class="well">



                    
                   
                    <h3 class="review-editor">Editor's Review</h3>
					
                    <hr>
					

                    
					<div class="row">
					
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                       
                            <p class="deskripsi-review"><?= $x['review'] ?></p>
                        </div>
                    </div>
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
                    <p class="navbar-brand">Copyright &copy; Shop at Ginza</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>

    <style>
        .navbar-brand {
            font-family: 'Playfair Display SC', serif;
            font-size: 20px;
        }

        .navbar-brand2 {
            font-family: 'Permanent Marker', cursive;
            font-size: 20px;
        }

        .namabarang {
            font-family: 'Playfair Display SC', serif;
            /*font-family: 'Josefin Sans', sans-serif;*/
            font-size: 30px;
        }

        .merk {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 20px;
            color: grey;
        }

        .deskripsi {
            /*font-family: 'Josefin Sans', sans-serif;*/
            /*font-family: 'Lato', sans-serif;*/
            font-family: 'Slabo 27px', serif;
            font-size: 17px;
            text-align: left;
        }

        .harga {
            /*font-family: 'Josefin Sans', sans-serif;*/
            font-family: 'Playfair Display', serif;
            font-size: 20px;
        }

        .page-header {
            font-family: 'Playfair Display SC', serif;
            font-size: 25px;
        }

        .review-editor {
            font-family: 'Playfair Display', serif;
            /*font-family: 'Josefin Sans', sans-serif;*/
            font-size: 25px;
        }

        .deskripsi-review {
            font-family: 'Playfair Display', serif;
        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 100px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            font-family: 'Josefin Sans', sans-serif;
        }

        .row2 {
            background-color: white;
        }

    </style>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=<?php echo base_url() . "assets/js/jquery.js" ?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo base_url() . "assets/js/bootstrap.min.js" ?>></script>

</body>

</html>
