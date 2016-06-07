<!DOCTYPE html>

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

        <a name="airport"></a>
        <h2>Search for Flights</h2>
        <form  method="post" action="main.php"  id="searchform">
            <fieldset>
            <table style="width:100%">
                <tr>    
                    <td><label>Origin</label></td>
                    <td><input name="origincity" id="origin" type="text" placeholder = "From" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Destination</label></td>
                    <td><input name="destinationcity" id="destination" type="text" placeholder = "To" size="50" required/></td>
                </tr>
                
                <tr>
                    <td><label>Date</label></td>
                    <td><input name="date" type="date" size ="50" required /> </td>
                </tr>
                <br>
                <tr><td> <br></td></tr>
                <tr>
                    <td><input type="Submit" value="Search" /></td>
                </tr>    
            </table>         
            </fieldset>   
        </form>
       </div> 
       </div> 
       </div> 
    </div>
    </body>
</html>