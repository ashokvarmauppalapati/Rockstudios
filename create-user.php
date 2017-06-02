<?php
   include('session.php');
?>
<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Create user</b></h4>
                                
                    <form action="#" id="user-cre" data-parsley-validate novalidate>
                        <div class="form-group col-md-6">
                            <label for="fullName">Full Name*</label>
                            <input type="text" name="fullName" parsley-trigger="change" required placeholder="Enter Full name" class="form-control" id="fullName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Username*</label>
                            <input type="text" name="userName" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailAddress">Email address*</label>
                            <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contactNumber">Contact No*</label>
                            <input data-parsley-type="number" type="number"  id="contact" class="form-control" required placeholder="123456789" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="userlevel">Select User level*</label>
                            <select class="form-control" id="userlevel" required="">
                                <option value="">Select</option>
                                <option value="student">Student</option>
                                <option value="trainee">Trainee</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="address">Address*</label>
                            <input data-parsley-type="address" type="text"  id="address" class="form-control" required placeholder="Address" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pass1">Password*</label>
                            <input id="pass1" type="password" placeholder="Password" required class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="passWord2">Confirm Password *</label>
                            <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" id="passWord2">
                        </div>

                        <div class="form-group text-right m-b-0">
                            <input type="submit" id="submit" value="Submit" class="btn btn-primary waves-light">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</div> <!-- content -->
<?php include 'inc/footer.php'; ?>