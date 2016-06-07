<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Analytical Operation - Drill Up</title>
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

        <a name="airport"></a>
        <h2>Analytical Operations - Drill Up</h2>
        <form method="post" action="drillup.php" id="drill">
        <label> Year </label>
        <select name="year" >
          <option  value="2015">2015</option>
          <option  value="2014">2014</option>
        </select>
        <label> Quater/month </label>
        <select name="month">
          <option  value="quater">Quater</option>
          <option  value="month">Month</option>
        </select>
        <input type="submit" value="submit"/>
    </form>  
    <br><button onclick="location.href='Analytical.php'">Go Back</button>
    </div> 
       </div> 
       </div> 
    </div>
</body>
</html>