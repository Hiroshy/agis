<?php 
    include_once("../../controller/info-page.php");
    include_once("../../model/store_info.class.php");
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../part/header/GTM.php") ?>
        <?php include_once("../../part/header/link.php") ?>
        <!-- App css -->
        <?php include_once("../../part/header/meta_head.php") ?>
    </head>

    <body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>
    <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index-2.html">
                                    <span><img src="../../assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center m-auto">
                                    <img src="../../assets/images/mail_sent.svg" alt="mail sent image" height="64" />
                                    <h4 class="text-dark-50 text-center mt-4 font-weight-bold">Please check your email</h4>
                                    <p class="text-muted mb-4">
                                        A email has been send to <b>youremail@domain.com</b>.
                                        Please check for an email from company and click on the included link to
                                        reset your password. 
                                    </p>
                                </div>

                                <form action="https://coderthemes.com/hyper/saas/index.html">
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-home mr-1"></i> Back to Home</button>
                                    </div>
                                </form>

                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card-->
                        
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - 2020 © Hyper - Coderthemes.com
        </footer>
        <!-- bundle -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/app.min.js"></script>

    </body>

</html>