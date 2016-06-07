<?php
   /* $connection = mysqli_connect("localhost","username","password","employee") or die("Error " . mysqli_error($connection));

    //fetch department names from the department table
    $sql = "select department_name from department";
    $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
    */

    $con = new PDO("mysql:host=localhost; dbname=projectinclude",
                    "root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);

    $query = "SELECT DISTINCT name from airlines";
    $ps = $con->prepare($query);
    // Fetch matching row.
    $ps->execute();
    $data = $ps->fetchAll(PDO::FETCH_ASSOC);
    
    $dname_list = array();
    foreach($data as $row)
    {
        $dname_list[] = $row['name'];
    }
    echo json_encode($dname_list);

?>