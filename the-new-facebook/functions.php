<?php

function getstatusupdate($_conn, $_username)
{
    $query = "SELECT * FROM status WHERE username = '$_username' ORDER BY TIME_STAMP DESC";

    if(!$result = $_db->query($query))
    {
        die('There was an error running the query [' . $_db->error . ']');
    }

    $output = '';
    while($row = $result->fetch_assoc())
    {

        $output = $output . '<div><div><div> Posted by ' . $row['username']
        . '</div><div><br /><p>' . $row['status_update'] . '</p></div></div></div>' ;
    }

    return $output;
}

 ?>
