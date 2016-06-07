<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Airlines Reservation System</title>
        <link rel="stylesheet" href="./css/style_reset.css" type="text/css">
        <link rel="stylesheet" href="./css/help.css" type="text/css">
        <link rel="stylesheet" href="./css/openflights.css" type="text/css">
        <style type="text/css"></style>        
      
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
        <h2>View Reservation</h2>
        <form  method="post" action="reservation.php"  id="viewreservation">
            <fieldset>
            <table style="width:100%">
                <tr>    
                    <td><label>Full Name</label></td>
                    <td><input name="name" id="name" type="text" placeholder = "Full Name" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Confirmation Number</label></td>
                    <td><input name="confirmation" id="confirmation" type="text" placeholder = "Confirmation Number" size="50" required/></td>
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