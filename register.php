<?php
include "db.php";

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama     = $_POST['nama'];
    $level    = 'admin';

    $query = mysqli_query($conn, "INSERT INTO tb_user(nama, username, password, level) VALUES('$nama', '$username', '$password', '$level')");

    if ($query) {
        echo "<script>alert(\"Registrasi Berhasil\"); location.href=\"index.php\"</script>";
    } else {
        echo "<script>alert(\"Registrasi Gagal\")</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-floating mb-3 mb-md-3">
                                            <input class="form-control" name="nama" id="namaLengkap" type="text" placeholder="Enter your first name" />
                                            <label for="inputFirstName">Nama Lengkap</label>
                                        </div>

                                        <div class="form-floating mb-3 mb-md-3">
                                            <input class="form-control" name="username" id="username" type="text" placeholder="Enter your first name" />
                                            <label for="inputFirstName">Username</label>
                                        </div>

                                        <div class="form-floating mb-3 mb-md-3">
                                            <input class="form-control" name="password" id="password" type="password" placeholder="Create a password" />
                                            <label for="password">Password</label>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-block">Create Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>