<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Itenary details</title>
        <link rel="stylesheet" href="./css/style_reset.css" type="text/css">
        <link rel="stylesheet" href="./css/help.css" type="text/css">
        <link rel="stylesheet" href="./css/openflights.css" type="text/css">
        <style type="text/css"></style>
        <style>
            table, th, td {
            border: 1px solid black;
            }
        </style>       
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
        <h2>Itenary details</h2>
<?php
   
    $name = filter_input(INPUT_POST,"name");
    $age = filter_input(INPUT_POST,"age");
    $gender = filter_input(INPUT_POST,"gender");
    $nationality = filter_input(INPUT_POST,"nationality");
    $mobile = filter_input(INPUT_POST,"mobile");
    $email = filter_input(INPUT_POST,"email");
    $street = filter_input(INPUT_POST,"street");
    $state = filter_input(INPUT_POST,"state");
    $country = filter_input(INPUT_POST,"country");
    $credit = filter_input(INPUT_POST,"credit");
    $expiry = filter_input(INPUT_POST,"expiry");
    $cvv = filter_input(INPUT_POST,"cvv");
    $Airlinename = filter_input(INPUT_POST,"Airlinename");
    $scity = filter_input(INPUT_POST,"scity");
    $Origin = filter_input(INPUT_POST,"Origin");
    $dcity = filter_input(INPUT_POST,"dcity");
    $destination = filter_input(INPUT_POST,"destination");
    $fare = filter_input(INPUT_POST,"fare");
    $date = filter_input(INPUT_POST,"date");

    $random = substr(md5(rand()), 0, 7);
    //print "$random";

    $con = new PDO("mysql:host=localhost; dbname=projectinclude",
                    "root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);

    if(is_null($name))
    {
       echo "<h4><b>Something went wrong. seems like you redirects to this page directly.<b></h4>"; 
    }
    else
    {
        try 
        {
            $sql = "INSERT INTO Customers (Confirmation, Name, Age, Gender, Nationality, mobile, email, street, state, country, credit, expiry, cvv)
                    VALUES ('$random','$name','$age','$gender','$nationality','$mobile','$email','$street','$state','$country','$credit','$expiry','$cvv')";

            $query = "INSERT INTO Transaction(Name, Random, Airlinename, scity, origin, dcity, destination, fare, `date`)
                    VALUES ('$name','$random','$Airlinename','$scity','$Origin','$dcity','$destination','$fare','$date')";
            $result = $con->query($sql);
            $result1 =$con->query($query);

        }

        catch (PDOException $e)
        {
            $output = 'There is a problem: '.$e->getMessage();
            echo $output;
            exit();
        }
        echo "<h4><b>Your Reservation is confirmed. Your iternary details are given below.<b></h4>";
        echo "<h3>Note:&nbspPlease note down your confirmation number which is required if you want to view your reservation at later time.</h3>";
        echo "<br>";
        $d ="$";
        echo "<h5>Passenger:&nbsp&nbsp{$name}</h5>";
        echo "<h5>Confirmation&nbspNumber:&nbsp{$random}</h5>";
        echo "<h5>Route: &nbsp {$scity} &nbsp → &nbsp {$dcity}</h5>";
        echo "<h5>Travel&nbspDate:&nbsp{$date}</h5>";
        echo "<h5>Airlines:&nbsp{$Airlinename}</h5>";
        echo "<h5>Depart:&nbsp{$Origin},&nbsp{$scity}</h5>";
        echo "<h5>Arrive:&nbsp{$destination},&nbsp{$dcity}</h5>";
        echo "<h5>Ticket&nbspCost:&nbsp${d}{$fare}</h5>";
        echo "<br><br>";
        
        echo '<button onclick="myFunction()">Print this page</button>';

        echo "<script>";
        echo "function myFunction() {";
        echo "window.print()";
    echo "}";
    echo "</script>";
}
?>
 </div> 
       </div> 
       </div> 
    </div>    
</body>
</html>