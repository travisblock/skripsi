<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Pendaftaran Vendor</title>
    <!-- Custom CSS -->
    <link href="../assets/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/3.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <h2 class="mt-3 text-center">Pendaftaran Vendor</h2><p>Silahkan daftarkan vendor anda dan tunggu verifikasi dari kami</p>
                        <form class="mt-4" enctype="multipart/form-data" action="auth/daftar.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                                    </div>
                                </div>
																<div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
																<div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="nama_vendor" placeholder="Nama Vendor" required>
                                    </div>
                                </div>
																<div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="pemilik_vendor" placeholder="Nama Pemilik Vendor" required>
                                    </div>
                                </div>
																<div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="alamat_vendor" placeholder="Alamat Vendor" required>
                                    </div>
                                </div>
																<div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="telp" placeholder="Nomor Hp" required>
                                    </div>
                                </div>
																<div class="col-lg-12">
                                    <div class="form-group">
																				<label style="float:left">Upload KTP</label>
                                        <input class="form-control" type="file" name="ktp" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Daftar</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Sudah punya akun? <a href="#" class="text-danger">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
</body>

</html>
