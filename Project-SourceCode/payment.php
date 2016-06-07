<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Airlines Reservation System</title>
        <link rel="stylesheet" href="./css/style_reset.css" type="text/css">
        <link rel="stylesheet" href="./css/help.css" type="text/css">
        <link rel="stylesheet" href="./css/openflights.css" type="text/css">
        <style type="text/css"></style>
        <link href="jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- load jquery library -->
        <script src="jquery-1.11.3.min.js"></script>
        <!-- load jquery ui js file -->
        <script src="jquery-ui.min.js"></script>      
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

        <a name="airport Information"></a>
        <h2>Payment</h2>
        <?php
           if (!isset($_POST["path"]))
            {
                echo "<h4><b>Something went wrong. seems like you redirects to this page directly.<b></h4>";
                exit();
            }
            $array = unserialize(base64_decode($_POST["path"]));
            //print_r($array);
                
        ?>
        <form  method="post" action="iternary.php"  id="searchform">
            <fieldset>
            <h3>Personal Details</h3>
            <table style="width:100%">
                <tr>    
                    <td><label>Full Name</label></td>
                    <td><input name="name" id="name" type="text" placeholder = "Full Name" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Age</label></td>
                    <td><input name="age" id="age" type="text" placeholder = "Age" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Gender</label></td>
                    <td><input name="gender" id="gender" type="text" placeholder = "Gender" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Nationality</label></td>
                    <td><input name="nationality" id="natinality" type="text" placeholder = "Nationality" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Mobile Number</label></td>
                    <td><input name="mobile" id="mobile" type="text" placeholder = "Mobile Number" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Email</label></td>
                    <td><input name="email" id="email" type="text" placeholder = "Email" size="50" required/></td>
                </tr>
                
                 <tr>
                    <td><label>Street</label></td>
                    <td><input name="street" id="street" type="text" placeholder = "Street" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>State</label></td>
                    <td><input name="state" id="state" type="text" placeholder = "State" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Country</label></td>
                    <td><input name="country" id="Country" type="text" placeholder = "Country" size="50" required/></td>
                </tr>  
            </table> 
            <br> <br>
            <h2>Credit card details</h2>
            <table style="width:80%">
                <tr>    
                    <td><label>Credit Card Number</label></td>
                    <td><input name="credit" id="credit" type="text" placeholder = "Credit Card Number" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Expiry Date</label></td>
                    <td><input name="expiry" id="expiry" type="text" placeholder = "Expiry Date" size="50" required/></td>
                </tr>

                <tr>
                    <td><label>Cvv</label></td>
                    <td><input name="cvv" id="cvv" type="text" placeholder = "Cvv" size="50" required/></td>
                </tr>
            
            </table>    
            <br>
            <input type="hidden" name="Airlinename" value="<?php echo htmlspecialchars($array["Airline Name"]); ?>" />
            <input type="hidden" name="scity" value="<?php echo htmlspecialchars($array["scity"]); ?>" />
            <input type="hidden" name="Origin" value="<?php echo htmlspecialchars($array["Origin Airport Name"]); ?>" />
            <input type="hidden" name="dcity" value="<?php echo htmlspecialchars($array["dcity"]); ?>" />
            <input type="hidden" name="destination" value="<?php echo htmlspecialchars($array["Destination Airport Name"]); ?>" />
            <input type="hidden" name="fare" value="<?php echo htmlspecialchars($array["fare"]); ?>" />
            <input type="hidden" name="date" value="<?php echo htmlspecialchars($array["date"]); ?>" />
            <input type="Submit" value="Make Reservation" />         
            </fieldset>   
        </form>
        
 </div> 
       </div> 
       </div> 
    </div>    
</body>
</html>