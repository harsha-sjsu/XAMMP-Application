<!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Analytical Operations</title>
    <link rel="stylesheet" href="./css/style_reset.css" type="text/css">
        <link rel="stylesheet" href="./css/help.css" type="text/css">
        <link rel="stylesheet" href="./css/openflights.css" type="text/css">
        <style type="text/css"></style>
        <style>
.buttons { 
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
}
.buttons button { 
  width: 100%;
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
        <h2>Analytical Operations</h2>
        <fieldset>
          <table class=buttons>
            <tr>
       <td><button onclick="location.href = 'drill.php';" id="myButton" class="float-left submit-button" >Drill operations</button></td>
       <td><button onclick="location.href = 'pivot.php';" id="myButton" class="float-left submit-button" >Pivot</button></td>
       <td><button onclick="location.href = 'slice.php';" id="myButton" class="float-left submit-button" >Slice</button></td>
       <td><button onclick="location.href = 'dice.php';" id="myButton" class="float-left submit-button" >Dice</button></td>
     </tr>
   </table>

   </filedset>
    </form>
    </div> 
       </div> 
       </div> 
    </div>
</body>
</html>
