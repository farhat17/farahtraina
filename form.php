<


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" 
    integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
    	$(document).ready(function()
    	{
    		setInterval(function(){
    			$("#show").load("timer.php");
    		},1000);
    	});
    </script>
</head>
<body>
<div class="section" style="margin-left: 200px;">
	<div class="container">
		<div class="row-justify-content-center">
			<div class="col-md-10 my-11 bg-dark">
				<div class="card my-10">
					<div class="card-header bg-light">
						<h5 style="text-align: center;">Fill Your Details Before Timer Runs Out!</h5>
					</div>		
					<div class="card-header bg-light">
						<p id="show">
							<?php
								include("timer.php");
							?>
						</p>
					</div>
						<form action="code.php" method="POST" >
                        <div class="form-group">
								<label for="name"><strong>Name</strong></label>
								<input type="name" name="name" placeholder="Enter Your Name" class="form-control" required>
						  </div>
							<div class="form-group">
								<label for="email"><strong>Email</strong></label>
								<input type="email" name="email" placeholder="Enter Your email" class="form-control"required>
							 </div>
							 <div class="form-group">
								<label for="dob"><strong>Date Of Birth</strong></label>
								<input type="date" name="dob" placeholder="Enter Your Date Of Birth" class="form-control"required>
							 </div>
                          <div class="form-group">
								<label for="addrerss"><strong>Tell Us About Yourself</strong></label>
								<textarea name='about' placeholder="About Yourself" class="form-control" required></textarea>
						  </div><div class="form-group">
						  	<div class="row">
						  		<div  class="col-lg-6">
								<label for="addrerss"><strong>CapTcha</strong></label>
								<input type="captcha" name="captcha" placeholder="Enter CaPtCha Here" class="form-control" required/>
							</div>
						  		<div  class="col-lg-2" style="margin-top:27px;">
						  			<img src="captcha.php">
						  		</div>
						  </div>
						</div>
						  <hr>
						  <div class="form-group">
						  <button type="submit" name='submit' class="btb btn-primary btn-block" class="form-control">Submit</button>
						  </div>
					    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>