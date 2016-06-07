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
            var availableTags = <?php include('airportsearch.php'); ?>;
            $("#airportinput").autocomplete({
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

	    <a name="airport"></a>
	    <h2>Airport database</h2>

	    <p></p><center><a href="images/openflights-apdb-2048.png"><img src="./images/openflights-apdb.png" width="512" height="256"></a><br>(click to enlarge)</center><p></p>

	    <p>Our Airports Database contains <b>8107</b> airports spanning the globe, as shown in the map above.  Each entry contains the following information:</p>

	    <table>
		<tbody><tr>
		  <td class="head">Airport ID</td>
		  <td class="data">Unique OpenFlights identifier for this airport.
		</td></tr>
		<tr>
		  <td class="head">Name</td>
		  <td class="data">Name of airport.  May or may not contain the <b>City</b> name.</td>
		</tr>
		<tr>
		  <td class="head">City</td>
		  <td class="data">Main city served by airport.  May be spelled differently from <b>Name</b>.</td>
		</tr>
		<tr>
		  <td class="head">Country</td>
		  <td class="data">Country or territory where airport is located.</td>
		</tr>
		<tr>
		  <td class="head">IATA/FAA</td>
		  <td class="data">3-letter FAA code, for airports located in <b>Country</b> "United States of America".<br>
		    3-letter IATA code, for all other airports.<br>
		    Blank if not assigned.</td>
		</tr>
		<tr>
		  <td class="head">ICAO</td>
		  <td class="data">4-letter ICAO code.<br>
		    Blank if not assigned.</td>
		</tr>
		<tr>
		  <td class="head">Latitude</td>
		  <td class="data">Decimal degrees, usually to six significant digits.  Negative is South, positive is North.</td>
		</tr>
		<tr>
		  <td class="head">Longitude</td>
		  <td class="data">Decimal degrees, usually to six significant digits.  Negative is West, positive is East.</td>
		</tr>
		  
	    </tbody></table>
	    <br>

	    <h4>Sample entries</h4>
	    <pre>507,"Heathrow","London","United Kingdom","LHR","EGLL",51.4775,-0.461389
26,"Kugaaruk","Pelly Bay","Canada","YBB","CYBB",68.534444,-89.808056
3127,"Pokhara","Pokhara","Nepal","PKR","VNPK",28.200881,83.982056</pre>

<form method="post" action="Airportdisplay.php" id="searchairport">
<h4><label> Search for Airport</label><h4><br>
<input type = "text" name = "airportname" id="airportinput" placeholder="Enter Airport Name" size = "50" required>
<input type="Submit" value="Search" />
<br><br>
 </div> 
       </div> 
       </div> 
    </div>

</body>
</html>