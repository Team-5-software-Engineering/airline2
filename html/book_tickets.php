<?php
  session_start();
  if(!$_SESSION["username"])
  {
    header('Location: http://localhost/airline/html/index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Flight ticket booking</title>
    <base href="http://localhost/airline/" /> 
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<link type="text/css" rel="stylesheet" href="css/style3.css" />

</head>

<body>
	<div id="booking" class="section">
        <div class="dropdown">
         <button onclick="myFunction()" class="dropbtn"><?php echo $_SESSION["name"]; ?><h6>&darr;</h6></button>
         <div id="myDropdown" class="dropdown-content">
          <a href="#">Profile</a>
          <a href="#">My Flights</a>
          <a href="html/logout.php">Logout</a>
         </div>
        </div> 
		<div class="section-center">
			<div class="container">
				<h1>Air ticket Reservation</h1>
				<div class="row">
					<div class="booking-form">
						<form>
							<div class="form-group">
                                <?php 
                                   echo "<h3 style='color:white;margin-top:0px'>Where do you want to go today  " . $_SESSION["name"] ."?</h3>";
                                ?> 
								<div class="form-checkbox">
									<label for="roundtrip">
										<input type="radio" id="roundtrip" name="flight-type">
										<span></span>Roundtrip
									</label>
									<label for="one-way">
										<input type="radio" id="one-way" name="flight-type">
										<span></span>One way
									</label>
									<label for="multi-city">
										<input type="radio" id="multi-city" name="flight-type">
										<span></span>Multi-City
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying from</span>
										<select class="form-control">
											<option value="Chennai">Chennai</option>
											<option value="Coimbatore">Coimbatore</option>
											<option value="Salem">Salem</option>
											<option value="Trichy">Trichy</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying to</span>
										<select class="form-control">
											<option value="Chennai">Chennai</option>
											<option value="Coimbatore">Coimbatore</option>
											<option value="Salem">Salem</option>
											<option value="Trichy">Trichy</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										<select class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
										<select class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Travel class</span>
										<select class="form-control">
											<option>Economy class</option>
											<option>Business class</option>
											<option>First class</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>

								<div class="row">
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Show flights</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</form>	
		</div>
	</div>
</body>

</html>
<script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
           var openDropdown = dropdowns[i];
           if (openDropdown.classList.contains('show')) {
             openDropdown.classList.remove('show');
           }
        }
      }
    }
</script>