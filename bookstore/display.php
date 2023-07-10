<?php

    $dbuser='localhost';
    $username='root';
    $password='';
    $dbname='bookstall';
    $conn=mysqli_connect($dbuser,$username,$password,$dbname);
    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error);
    }
    else
    {
        echo("Connection Established!");
    }
    $sql='select * from books';
    $result=mysqli_query($conn,$sql);

    echo '<table border="1" cellpadding="2" cellspacing="2">
        <tr>
            <th>bookname</th>
            <th>author</th>
            <th>bookprice</th>
            <th>quantity</th>
            <th>dates</th>
        </tr>
    ';
    while($res=mysqli_fetch_array($result))
    {
        echo '<tr>';
        echo '<td>'.$res['bookname'].'</td>';
        echo '<td>'.$res['author'].'</td>';
        echo '<td>'.$res['bookprice'].'</td>';
        echo '</tr>';
    }
    
    echo '</table>';

    $conn->close();
    



?>