        <!-- Header  -->
    <?php include 'includes/header.php';?>
    <!-- Header  End-->
        <section class="innarBanner">
            <div class="bnrImg">
                <img src="public/assets/img/loginBnr.jpg" alt="">
                <div class="page_titleRap loginPageTtl">
                    <div class="container">
                        <h1 class="page_title">Login
                            <span class="login-banner">Call:<a href="tel:504-822-6900">504-822-6900</a></span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal" id="passwordModal" style="z-index: 99999;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <strong class="modal-title">Forgot Password</strong>
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    </div>
                    <form id="frmSubscriptionRequest" method="post" action="javascript:void(0)">
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="form-group text-center">
                                <label>Enter registered email</label>
                                <input type="email" name="email" id="forgot_email" class="form-control" required>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer ">
                            <a href="javascript:void(0)" class="btn btn-more btn-forgot-password" style="margin-right: 20px;" data-dismiss="modal"> Submit</a>
                            <a href="javascript:void(0)" class="btn btn-danger btn-close" data-dismiss="modal">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="wraper loginRaper">
            <div class="container">
                <div class="loginRapInr">
                    <h3>Login Now</h3>
                    <form id="frmLogin" action="https://doculoss.com/login/login-validate" method="post">
                        <div class="msg_tab">
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="email" id="email" value="" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password">
                        </div>
                        <div class="from-footer">
                            <button class="btn" type="submit"><span>Submit</span></button>
                            <div class="forgotPass"><a href="javascript:void(0)" class="forgot-password">forgot your password</a></div>
                            <span>Not a Member? <a href="purchase-subscription.php">Register</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <section class="contactDtls">
            <div class="container">
                <h2>Call Us On
                    <a href="tel:504-822-6900">504-822-6900</a>
                </h2>
                <p>Mail Us: <a href="mailto:info@doculoss.com">info@doculoss.com</a></p>
                <a class="btn" href="purchase-subscription.php"><span>Subscribe Now</span></a>
			</div>
		</section>


	

<!-- <script src=" http://code.jquery.com/jquery-3.4.1.min.js"> </script> -->
                    <script src="public/assets/js/jquery-3.4.1.js"></script>
                    <script src="public/validation/js/jquery.validate.js"></script>
                    <script>
                    $.noConflict();
                    $(document).ready(function() {
                        $(document).ajaxStart(function() {
                            $(".loading-class").show();
                        });

                        $(document).ajaxComplete(function() {
                            $(".loading-class").hide();
                        });
                    })
                    $("#frmLogin").validate({
                        rules: {
                            email: "required",
                            password: "required",
                        },
                        messages: {
                            email: { required: "User Name field is required" },
                            password: { required: "Password field is required" }
                        },
                        submitHandler: function(form) {
                            form.submit();
                        }
                    });

                    jQuery('.forgot-password').on('click', function() {
                        jQuery('#forgot_email').val('');
                        jQuery('#passwordModal').modal('toggle');
                    })

                    $('.btn-forgot-password').on('click', function() {
                        var email = $('#forgot_email').val().trim();
                        if (email == "") {
                            $('#forgot_email').focus();
                            return false;
                        }
                        $('#passwordModal').modal('toggle');
                        $.ajax({
                            url: "https://doculoss.com/register/forgot_password",
                            type: "POST",
                            data: { "email": email },
                            dataType: "JSON",
                            success: function(response) {
                                swal(response.message);
                            }
                        })
                    })
                    </script>
     <!-- Footer  -->
    <?php include 'includes/footer.php';?>
    <!-- Footer  End-->