<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Airlines Reservation System</title>
    <link rel="stylesheet" href="./css/style_reset.css" type="text/css">
    <link rel="stylesheet" href="./css/help.css" type="text/css">
    <link rel="stylesheet" href="./css/openflights.css" type="text/css">
  <style type="text/css"></style>
  <!-- load jquery ui css-->
        <link href="jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- load jquery library -->
        <script src="jquery-1.11.3.min.js"></script>
        <!-- load jquery ui js file -->
        <script src="jquery-ui.min.js"></script>

        <script type="text/javascript">
            $(function() {
                var availableTags = <?php include('search.php'); ?>;
                $("#origin").autocomplete({
                    source: availableTags,
                    autoFocus:true
                });
                $("#destination").autocomplete({
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
	    
	    <h2>Route database</h2>

	    <p><center><a href="images/openflights-routedb-2048.png"><img src="images/openflights-routedb.png" width="512" height="256"></a><br>(click to enlarge)</center></p>

	    <p>Our Route Database contains <b>65036</b> routes between <b>3209</b> airports on <b>531</b> airlines spanning the globe, as shown in the map above.  Each entry contains the following information:</p>

	    <table>
		
		<tr>
		  <td class="head">Airline ID</td>
		  <td class="data">Unique OpenFlights identifier for airline (see <a href="./airline.html">Airline</a>).
		</tr>
		<tr>
		  <td class="head">Airline Name </td>
		  <td class="data">Name of the airline.
		</tr>
		<tr>
		  <td class="head">Source airport</td>
		  <td class="data">3-letter (IATA) or 4-letter (ICAO) code of the source airport.<br>
		</tr>
		<tr>
		  <td class="head">Source airport ID</td>
		  <td class="data">Unique OpenFlights identifier for source airport (see <a href="./airport.php">Airport</a>)
		</tr>
		<tr>
		  <td class="head">Destination airport</td>
		  <td class="data">3-letter (IATA) or 4-letter (ICAO) code of the destination airport.<br>
		</tr>
		<tr>
		  <td class="head">Destination airport ID</td>
		  <td class="data">Unique OpenFlights identifier for destination airport (see <a href="./airport.php">Airport</a>)
		</tr>
		<tr>
	    </table>
	    <br>

	    <h4>Sample entries</h4>
	    <pre>410,Aerocondor,NBC,6969,DME,4029
4178,Regional Express,ADL,3341,CPD,6253
1654,Cargoitalia,IKT,2937,ODO,8944
</pre>

<h4> Search for Routes </h4>
<form method="post" action="Routesdisplay.php" id="searchroutes">
	<table style="width:100%">
                <tr>    
                    <td> <label>Origin</label> </td>
                    <td> <input name="origincity" id="origin" type="text" placeholder = "From" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Destination</label></td>
                    <td><input name = "destinationcity" id="destination" type="text" placeholder = "To" size="50" required/></td>
                </tr>
                <br>
                <tr><td> <br></td></tr>
                <tr>
                    <td><input type="Submit" value="Search" /></td>
                </tr>   
    </table>
    <p><br></p>
</form>    
 </div> 
       </div> 
       </div> 
    </div>

</body>
</html>