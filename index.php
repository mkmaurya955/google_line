<!DOCTYPE html>
<html>
<head>

	<!-- meta -->
	<meta charset="UTF-8">
	
	<!-- stylesheet -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	
	<!-- scripts -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="js/engine.js"></script>

</head>
<body>
<div class="container">
	<table>
	<form class="form-horizontal" id="myForm" method="POST">
		
			<div id="form-box">
			<tr><td>
			<h5>Add your country and number of players</h5></td></tr>

			<!--Alert eror -->
			<tr><td>
			<div class="alert alert-danger" role="alert" id="danger-alert">
  				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
 				<span class="sr-only">Error:</span>
				  Oops! Something going wrong..
			</div>


			<!--Alert eror -->
			<div class="alert alert-success" role="alert" id="success-alert">
  				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
 				<span class="sr-only">Error:</span>
				  Well done! You sent your data!
			</div></td></tr>
				<tr><td>
			  <div class="form-group">		 
			    
			      <input type="text" class="form-control" placeholder="Enter country name" name="country">
			    
			  </div></td></tr>
			  <tr><td>
			  <div class="form-group">		    
			    
			      <input type="text" class="form-control" placeholder="Enter players number" name="players">
			   
			  </div></td></tr>
			  <tr>
			  	<td>
			  <div class="form-group">
			    
			      <button type="submit" class="btn btn-block btn-success" id="submitButton"> 
			      <span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbspSend</button>
			    
			  </div>
			</td></tr>
			</div>  
		</form>
</table>

			<div id="google-chart-box">

			<!--Div that will hold the pie chart-->
   				 <div id="chart_div"></div>

			</div>
		</div>	<!-- End row -->
</div> <!-- End container -->
</body>
</html>