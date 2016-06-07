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
        <h2>Available Flights Information</h2>
<?php
   /* $connection = mysqli_connect("localhost","username","password","employee") or die("Error " . mysqli_error($connection));

    //fetch department names from the department table
    $sql = "select department_name from department";
    $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
    */
    $origin = filter_input(INPUT_POST,"origincity");
    $destination = filter_input(INPUT_POST,"destinationcity");
    $date = filter_input(INPUT_POST,"date");
    $con = new PDO("mysql:host=localhost; dbname=projectinclude",
                    "root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);

    try 
    {
        $sql = "SELECT r.Name as `Airline Name`, s.City as scity, s.Name as `Origin Airport Name`,d.City as dcity,d.Name as `Destination Airport Name`, Round(SQRT((POWER((s.Latitude-d.Latitude), 2)+POWER((s.Longitude-d.Longitude), 2)))*10,2) as fare FROM Airports s, Airports d, Finalroutes r WHERE s.City = '$origin' and d.City = '$destination' and s.`Airport ID` = r.`Source ID` and d.`Airport ID` = r.`Destination ID` ";

        $result = $con->query($sql);
    }

    catch (PDOException $e)
    {
        $output = 'There is a problem: '.$e->getMessage();
        echo $output;
        exit();
    }

    $temp = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        $temp[] = $row;
    }
    if(count($temp) > 0)
     {
        echo "<br>";
        echo '<form  method="post" action="payment.php"  id="searchform">';
        echo '<table style="width:100%">';
        echo '<tr><th>select</th><th>Airline Name</th><th> Origin City Name </th><th> Origin Airport Name </th><th> Destination City Name </th><th> Destination Airport Name </th><th> Fare </th><th> Date </th></tr>';
        $i=0;
        foreach($temp as $key => $value)
        {
            $temp[$i]["date"] = $date;
            echo '<tr><td><input name="path" type="radio" value ="'.base64_encode(serialize($temp[$i++])).'" required /></td><td>'.$value['Airline Name'].'</td><td>'.$value['scity'].'</td><td>'.$value['Origin Airport Name'].'</td><td>'.$value['dcity'].'</td><td>'.$value['Destination Airport Name'].'</td><td>'.$value['fare'].'</td><td>'.$date.'</td></tr>';
        };
        //print_r($temp);
        echo '</table>';
        echo '<br>';
        echo '<input type="Submit" value="Make Reservation" />&nbsp&nbsp<button onclick="location.href=\'home.php\'">Go Back</button>';
        echo '</form>';

      }
      else
      {
        echo '<h4>No routes are Avaiable for this combination. Try Again with other combinations by clicking on back button.<h4>';
      }
      //echo '<button onclick="location.href=\'home.php\'">Go Back</button>';
    ?>
   
 </div> 
       </div> 
       </div> 
    </div>    
</body>
</html>