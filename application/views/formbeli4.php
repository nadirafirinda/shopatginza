<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Form Pembelian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href=<?php echo base_url() . "assets/bootstrap/bootstrap.min.css" ?> />
    <link rel="stylesheet" type="text/css" href=<?php echo base_url() . "assets/font-awesome/css/font-awesome.min.css" ?> />

    <script type="text/javascript" src=<?php echo base_url() . "assets/js/jquery-1.10.2.min.js" ?>></script>
    <script type="text/javascript" src=<?php echo base_url() . "assets/bootstrap/js/bootstrap.min.js" ?>></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Form Pembelian <small>Do contact us after you have filled this form for confirmation!</small></h1>
    <?php echo form_open(base_url('Welcome/createBeli'));?>
</div>

<!-- Registration form - START -->

<div class="container">
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Nama Barang</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="namabarang" id="" value="BECCA x Chrissy Teigen Glow Face Palette" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Merk</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="merk" value="BECCA COSMETICS" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Harga</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="harga" value="400000" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Jumlah</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="jumlah" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Kategori</label>
                    <!-- <p><label for="InputEmail">(Tulis Salah Satu; Cosmetics, Hair, Skin Care)</label></p> -->
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="kategori" value="Cosmetics" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Tanggal</label>
                    <p><label for="InputEmail">(DD/MM/YYYY)</label></p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="tanggal" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Nomor Telepon Pembeli</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="notelp" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Alamat</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="alamat" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Kode Pos</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="kodepos" placeholder="Enter Text" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                <?php echo form_close(); ?>
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <!--<div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
            </div>-->
        </div>
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>