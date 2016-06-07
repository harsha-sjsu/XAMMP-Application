<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Airlines Reservation System</title>
    <meta name="description" content="Free airport and airline data with IATA, ICAO, latitude, longitude, elevation, timezone, DST information">
    <link rel="stylesheet" href="./css/style_reset.css" type="text/css">
    <link rel="stylesheet" href="./css/help.css" type="text/css">
    <link rel="stylesheet" href="./css/openflights.css" type="text/css">
  <style type="text/css"></style>
  <link href="jquery-ui.min.css" rel="stylesheet" type="text/css" />
   <!-- load jquery library -->
        <script src="jquery-1.11.3.min.js"></script>
        <!-- load jquery ui js file -->
        <script src="jquery-ui.min.js"></script>

  	<script type="text/javascript">
        $(function() {
            var availableTags = <?php include('airlinesearch.php'); ?>;
            $("#airlineinput").autocomplete({
                source: availableTags,
                autoFocus:true
            });
        });
    </script>
</head>

  <body>
    <div id="mainContainer">
      <div id="sideBarContentWrapper">
	  
	<div id="contentContainer">
	  <div id="nonmap">

	    <h1>Airlines Reservation System</h1>

	    <a href="Home.php">
        Home</a> | <a href="view.php">
        View Reservation</a> |<a href="Airport.php">
        Airport</a> | <a href="Airline.php">
        Airline</a> | <a href="Route.php">
        Route</a> | <a href="Analytical.php">
        Analytical Operations</a>

	    <a name="airline"></a>
	    <h2>Airline database</h2>

	    <p>Our Airlines Database contains <b>5888</b> airlines.  Each entry contains the following information:</p>

	    <table>
		<tr>
		  <td class="head">Airline ID</td>
		  <td class="data">Unique OpenFlights identifier for this airline.
		</tr>
		<tr>
		  <td class="head">Name</td>
		  <td class="data">Name of the airline.
		</tr>
		<tr>
		  <td class="head">IATA</td>
		  <td class="data">2-letter IATA code, if available.</td>
		</tr>
		<tr>
		  <td class="head">ICAO</td>
		  <td class="data">3-letter ICAO code, if available.<br>
		</tr>
		<tr>
		  <td class="head">Country</td>
		  <td class="data">Country or territory where airline is incorporated.</td>
		</tr>
	    </table>
	    <br>

	    <h4>Sample entries</h4>
	    <pre>792,"Access Air","ZA","CYD","United States"
412,"Aerolineas Argentinas",\N,"AR","ARG","Argentina"
413,"Arrowhead Airways",\N,"","ARH","United States"</pre>
</pre>

<form method="post" action="Airlinedisplay.php" id="searchairlines">
<h4> <label> Search for Airline</label> <h4><br>
<input type = "text" name = "airlinename" id="airlineinput" placeholder="Enter Airline Name" size = "50" required>
<input type="Submit" value="Search" />
<br><br>


 </div> 
       </div> 
       </div> 
    </div>

</body>
</html>