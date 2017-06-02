<?php
    session_start();
    if(isset($_SESSION['usr']) && isset($_SESSION['pswd'])){
    header("Location: home.php");
    }
?>
<?php include 'inc/head.php'; ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
    <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center">ROCK STUDIOS</h3>
            </div> 


            <div class="panel-body">
            <form class="form-horizontal m-t-20" action="login.php" method="post">
                <div class="error-message">
                 <?php if(isset($_SESSION['message'])) {echo '<p class="error">'.$_SESSION['message'].'</p>';}?>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" name="username" type="text" required placeholder="User Name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" required placeholder="Password">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <input name="submit" type="submit" value=" Login " class="btn btn-pink btn-block text-uppercase waves-light">
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form> 
            
            </div>   
            </div>                              
        </div>
        
        

        
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    
    </body>
</html>