<?php
session_start();
include('template/headerLogin.php');
require('function.php');

if (isset($_SESSION['name'])) {
    header('Location: admin');
}

?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-md-8 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                        </div>
                        <form class="user" action="" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <button name="login" type="submit" class="btn btn-primary btn-user btn-block">
                                Masuk
                            </button>
                            <hr>
                        </form>
                        <hr>
                        <!-- <div class="text-center">
                            <a class="small" href="register.php">Buat Akun</a>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php include('template/footerLogin.php') ?>