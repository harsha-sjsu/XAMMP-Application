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
        <h2>Your reservation details</h2>
<?php

   /* $connection = mysqli_connect("localhost","username","password","employee") or die("Error " . mysqli_error($connection));

    //fetch department names from the department table
    $sql = "select department_name from department";
    $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
    */
    $name = filter_input(INPUT_POST,"name");
    $confirmation = filter_input(INPUT_POST,"confirmation");
    $con = new PDO("mysql:host=localhost; dbname=projectinclude",
                    "root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);

    try 
    {
        $sql = "SELECT * from transaction where name ='$name' and random = '$confirmation' ";
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
        
        $d="$";
        foreach($temp as $key => $value)
        {
            //$temp[$i]["date"] = $date;
            //echo '<tr><td><input name="path" type="radio" value ="'.base64_encode(serialize($temp[$i++])).'" required /></td><td>'.$value['Airline Name'].'</td><td>'.$value['scity'].'</td><td>'.$value['Origin Airport Name'].'</td><td>'.$value['dcity'].'</td><td>'.$value['Destination Airport Name'].'</td><td>'.$value['fare'].'</td><td>'.$date.'</td></tr>';
            echo "<h5>Passenger:&nbsp&nbsp{$value['name']}</h5>";
            echo "<h5>Confirmation&nbspNumber:&nbsp{$value['random']}</h5>";
            echo "<h5>Route: &nbsp {$value['scity']} &nbsp → &nbsp {$value['dcity']}</h5>";
            echo "<h5>Travel&nbspDate:&nbsp{$value['date']}</h5>";
            echo "<h5>Airlines:&nbsp{$value['Airlinename']}</h5>";
            echo "<h5>Depart:&nbsp{$value['origin']},&nbsp{$value['scity']}</h5>";
            echo "<h5>Arrive:&nbsp{$value['destination']},&nbsp{$value['dcity']}</h5>";
            echo "<h5>Ticket&nbspCost:&nbsp${d}{$value['fare']}</h5>";
            echo "<br><br>";
        };
        
    }
      else
      {
        echo '<h4>No Reservation is found for this combination. Try Again with correct details by clicking on back button.<h4>';
      }
      echo '<button onclick="location.href=\'view.php\'">Go Back</button>';
    ?>
          
 </div> 
       </div> 
       </div> 
    </div>    
</body>
</html>