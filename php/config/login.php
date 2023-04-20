<?php 
// Start session 
		if(!session_id()){ 
		    session_start(); 
		} 
 

		// // Retrieve session data 
		// $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
		 
		// // Get status message from session 
		// if(!empty($sessData['status']['msg'])){ 
		//     $statusMsg = $sessData['status']['msg']; 
		//     $statusMsgType = $sessData['status']['type']; 
		//     unset($_SESSION['sessData']['status']); 
		// } ?>
<body>
    <section class="container-fluid ">
        <div class="row">

            <!--RIGHT PANEL-->
            <div class="col-md-9 text-center">
                <br><br><br><br><br><br>
                <br><br><br><br><br><br>
                Dashboard overview
            </div>

            <!--LEFT PANEL-->
            <div class="col-md-3 text-center border-start">
                <div class="card-body">

                    <!--CARD HEADER-->  
                    <div class="card-header" style="background-color: #fff;">
                        <div class="text-center">
                            <img alt="PUP" class="img-circle mt-5 mb-4" src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png">
                        </div>
                    </div>

                    <!--CARD BODY-->
                    <div class="card-body mt-3">
                        <h5 class="text-center">Welcome to!</h5>
                        <h1 class="text-body text-center text" style="font-size: 2.5rem; font-display: fl;">
                            <b>FAMOS</b><span style="font-size: 12px;">   v2</span>
                        </h1> 
                        
                        <form action="../config/login_dir.php" method="POST">
                            <span class=""><p class="" style="font-size: .8rem;">PUPQC-Faculty Monitoring System</p></span>

                            <div class="">
                                <input type="email" class="form-control mb-2" name="email" id="#" placeholder="Email">
                                <input type="password" class="form-control" name="pwd" id="#" placeholder="Password">
                            </div>

                            <span class="" > <p class=""><a href="" class="m-0" style="font-size: .8rem;">I forgot my password</a></span></p>
                            
                            <div class="row btn-group">
                                <div class="col-6">
                                    <button class="btn btn-primary d-inline-block m-0">Login</button>
                                </div>                           
                            </div>
                        </form>
                    </div>

                    <!-- CARD FOOTER -->
                    <div class="card-footer" style="background-color: #fff;">
                        <p class="" style="font-size: .6rem;">
                            PUP QUEZON CITY - FACULTY MONITORING SYSTEM @2023
                        </p>
                    </div>
                </div>
            </div>
        </div>        
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>