
		


        <!-- Header  -->
    <?php include 'includes/header.php';?>
    <!-- Header  End-->


<style>
    .subscription_2_list p{
        margin-bottom: 0px;
    }
    .error{
      color: #f00;
    }
    	/* Absolute Center Spinner */
	.loading-class {
		position: fixed;
		z-index: 999;
		height: 2em;
		width: 2em;
		overflow: visible;
		margin: auto;
		top: -110px;
		left: 100px;
		bottom: 0;
		right: 0;
		display: none;
	}

	/* Transparent Overlay */
	.loading-class:before {
	content: '';
	display: block;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.3);
	}

	/* :not(:required) hides these rules from IE9 and below */
	.loading-class:not(:required) {
	/* hide "loading..." text */
	font: 0/0 a;
	color: transparent;
	text-shadow: none;
	background-color: transparent;
	border: 0;
	}

	.loading-class:not(:required):after {
	content: '';
	display: block;
	font-size: 10px;
	width: 1em;
	height: 1em;
	margin-top: -0.5em;
	-webkit-animation: spinner 1500ms infinite linear;
	-moz-animation: spinner 1500ms infinite linear;
	-ms-animation: spinner 1500ms infinite linear;
	-o-animation: spinner 1500ms infinite linear;
	animation: spinner 1500ms infinite linear;
	border-radius: 0.5em;
	-webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
	box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
	}

	/* Animation */

	@-webkit-keyframes spinner {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		@-moz-keyframes spinner {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		@-o-keyframes spinner {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
		@keyframes spinner {
			0% {
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				-o-transform: rotate(0deg);
				transform: rotate(0deg);
			}
			100% {
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-ms-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}

</style>
<!-- The Modal -->
<div class="modal" id="customQuoteModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Custom Quote  Request</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <form id="frmCustomRequest" method="post" action="javascript:void(0)" autocomplete="off">
        <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label> Full name : </label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email : </label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">    
                    <label>Phone : </label>
                    <input type="tel" name="phone" id="phone" class="form-control" min="10" required>
                </div>
                <div class="form-group">    
                    <label>Request number of rooms : </label>
                    <input type="number" name="room" id="room" class="form-control" min="26" max="100" required>
                </div>
                <div class="form-group">    
                    <label>Already registered: </label>
                    <input type="radio" name="reg_status" class="" value="1" checked> Yes
                    <input type="radio" name="reg_status" class="" value="0" > No
                </div>    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-more" > Request</button>
                <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
  </div>
</div>



<section class="innarBanner">
            <div class="bnrImg">
                <img src="public/assets/img/innerNoBanner.jpg" alt="">

                <div class="page_titleRap">
                    <div class="container">
                        <h1 class="page_title">PURCHASE SUBSCRIPTION<span>Call:<a href="tel:504-822-6900">
                    504-822-6900</a></span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="keepUpdated">
            <div class="container">
                <div class="keepUpdatedInr">
                    <h2>Keep Youself Updated</h2>
                    <a class="btn" href="purchase-subscription.php"><span>SubsCribe</span></a>
                </div>
            </div>
        </section>

        <div class="wraper subscribRap">
            <div class="container">
            <form method="post" action="https://doculoss.com/register" class="row">
                <h2><span>PURCHASE</span> SUBSCRIPTION</h2>
                <div class="lavels">
                    <h3><input type="radio" name="subscription_level_1" value="1" checked><span>Level 1 :</span> Subscription 
                        <em>Subscriber takes all pictures and prepares all documents and enters them in their password protected account on DocuLoss.com</em>
                    </h3>
                    <h4>1st 100 subscribers $24.95 then $29.95 <span>Included in Level 1 :</span></h4>
                    
                        <ul>
	<li><strong>31 days of Level 2 Cloud Storage (average house in USA is 10 to 14 rooms. This allows a subscriber to document 1 room a day. After 31 days, subscriber loses access to his account. Subscriber needs to download or print his entire file on 31st day that is why we recommend purchasing Level 2 when purchasing Level 1. This gives subscriber time needed for asset documentation of the whole house as well as out buildings (not attached to house).</strong></li>
	<li><strong>24/7 Online Access to your information.</strong></li>
	<li><strong>Forms can be downloaded to your computer in a PDF or JPG (photos) file format or to FedEx or a like service for the first 31 days unless subscriber purchased Level 2.</strong></li>
	<li><strong>Access to the Proprietary App "Room Builder" for the first 31 days unless subscriber purchased Level 2.</strong></li>
</ul>
                    
                </div>
                <div class="lavels lavelstwo">
                    <h3><input type="checkbox" id="subscription_level_2" name="subscription_level_2" value="2" >
                        <span>Level 2 :</span> Subscription Storage Tiers</h3>
                        <h4><span>Rates locked unless you add a room(s ) to the dwelling that puts you into the next Tier of Services.</span></h4>
                      
                                     
                    <ul class="num_list subscription_2_list">

                                            <li><input type="radio" id="subscription_1" name="subscription" value="1" disabled> <strong>
                          <!--  $ 4.95 – 1 to 15 rooms. <span style="color: #85bb65">( 1st 100 subscribers $3.95)</span> -->
                        $3.95 per month - 1st 100 subscribers then  $4.95  <span style="color: #85bb65">(1 to 15 rooms).</span>
                        </strong></li>
                                                 <li><input type="radio" id="subscription_1" name="subscription" value="2" disabled> <strong>
                          <!--  $ 5.95 – 16 to 20 rooms. <span style="color: #85bb65">( 1st 100 subscribers $4.95)</span> -->
                        $4.95 per month - 1st 100 subscribers then  $5.95  <span style="color: #85bb65">(16 to 20 rooms).</span>
                        </strong></li>
                                                 <li><input type="radio" id="subscription_1" name="subscription" value="3" disabled> <strong>
                          <!--  $ 6.95 – 21 to 25 rooms. <span style="color: #85bb65">( 1st 100 subscribers $5.95)</span> -->
                        $5.95 per month - 1st 100 subscribers then  $6.95  <span style="color: #85bb65">(21 to 25 rooms).</span>
                        </strong></li>
                                             </ul>
                                         <h4>26 Rooms or more - Call for a <a id="custom_quote" href="javascript:void(0)">Custom Quote</a>
                    
                    <span>Protect all of your investments and be ready for a disaster</span></h4>
                </div>
                <div class="col-12">
                <div class="btnCol">
                    <!-- <button class="btn" type="submit"><span>Subscribe</span></button> -->
                    <button class="btn"> Subscribe </button>
                </div>
            </div>
            </div>
        </div>

        <section class="contactDtls">
            <div class="container">
                <h2>Call Us On 
                    <a href="tel:504-822-6900">
                    504-822-6900</a>
                </h2>
                <p>Mail Us: <a href="mailto:info@doculoss.com">info@doculoss.com</a></p>
                <a class="btn" href="purchase-subscription.php"><span>Subscribe Now</span></a>
            </div>
        </section>




<div class="loading-class">Loading . . .</div>

<script>
    var custom_room_limit = 26;
    $(document).ready(function() {
        
		$(document).ajaxStart(function(){
			$(".loading-class").show();
		});

		$(document).ajaxComplete(function(){
			$(".loading-class").hide();
		});
    })
    $('#subscription_level_2').on('click', function(){
        if($(this).prop('checked') == true){
            $(".subscription_2_list input[type='radio']").prop('disabled', false);
            $('#subscription_1').prop('checked', true);
        }else{
            $(".subscription_2_list input[type='radio']").prop('checked', false);
            $(".subscription_2_list input[type='radio']").prop('disabled', true); 
        }
    })

    jQuery('#custom_quote').on('click', function(){
        jQuery('#name').val('');
        jQuery('#email').val('');
        jQuery('#phone').val('');
        jQuery('#room').val('');
        jQuery('#customQuoteModal').modal();
    })

    $( "#frmCustomRequest" ).validate( {
			rules: {
				name: "required",
				email: "required",
                phone: {
                        required:  true,
                        number: true
                        },
                room: "required"
			},
			messages: {						
				name: {required:"Full name field is required"},
				email: {required:"Email field is required"},
                phone: {required:"Phone field is required"},
                room: {required:"No of rooms field is required"}		
			},
			errorElement: "em",
			highlight: function ( element, errorClass, validClass ) {
				$( element ).parents( ".form-control" ).addClass( "has-error" ).removeClass( "has-success" );
			},
			unhighlight: function (element, errorClass, validClass) {
				$( element ).parents( ".form-control" ).addClass( "has-success" ).removeClass( "has-error" );
			}

            // submitHandler: function(form) {
            //   form.submit();
            // }

		} );

    $('#frmCustomRequest').on('submit', function(){
        var name = $('#name').val().trim();
        var email = $('#email').val().trim();
        var phone = $('#phone').val().trim();
        var room = $('#room').val().trim();
        if(name==""|| email==""|| phone==""|| room==""){
            return false;
        }
        if(room < custom_room_limit){
            //alert('Please enter min '+custom_room_limit+' for requesting custom quote');
            return false;
        }
        if(confirm('Are you sure to send request to Doculoss?')){
            $('.btn-close').click();
            $.ajax({
                url : "https://doculoss.com/subscription/post_request",
                type: "POST",
                data: $('#frmCustomRequest').serialize(),
                dataType: "JSON",
                success:function(response){
                    // if(response.status==1){

                    // }
                    
                    swal(response.message);
                }
            })
        }
    })  
</script>


  <!-- Footer  -->
    <?php include 'includes/footer.php';?>
    <!-- Footer  End-->