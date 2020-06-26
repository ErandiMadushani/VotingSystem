<?php include ('header.php');?>
<body>
    <div class="container">
        <div class="row">
		
		<center><h2>Voting Sytem</h2></center>
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h1 class="panel-title"><b> Log In</b></h1></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
					<label for = "username" >NIC No.</label>
					<input class="form-control" placeholder="Please Enter Your NIC Number" name="nic" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
					<label for = "password" >Password</label>
					<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
				<?php include ('login.php');?>
                        </form>
                        <h5><b>Note:</b> <i>One voter can only vote one time!!</i> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>

