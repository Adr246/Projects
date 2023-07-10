<?php

    $dbhost='localhost';
    $dbuser='root';
    $dbpass='';
    $dbname='test';

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn)
    {
        die("Database Connection Failed!".$conn->connect_error);
    }

    $qry="select * from register";
    $result=mysqli_query($conn,$qry);

    echo'<table border=1>
    
    <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>phone</th>
        <th>password</th>
    </tr>
    ';
    

    while($res=mysqli_fetch_array($result))
    {
        echo '<tr>';
            echo '<td>'.$res["firstname"].'</td>';
            echo '<td>'.$res["lastname"].'</td>';
            echo '<td>'.$res["email"].'</td>';
            echo '<td>'.$res["phone"].'</td>';
            echo '<td>'.$res["passwd"].'</td>';
        
        
        
        echo '</tr>';
    }

    echo '</table>';

    $conn->close();

?>