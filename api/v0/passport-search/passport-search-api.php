<?php

include './../../../config.php';

//get the q parameter from URL
$q = $_GET["q"];




//lookup all links from the xml file if length of q>0
if (strlen($q) > 0) {
    $hint = [];

    $sql = "SELECT * FROM `passport` WHERE `name` LIKE '%" . $q . "%' OR `passNum` LIKE '%" . $q . "%' OR `mobile` LIKE '%" . $q . "%' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($hint, [$row['id'], $row['name']]);
        }
    }

    $conn->close();
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint == "") {
    $response = "no suggestion";
} else {
    $response = $hint;
}

//output the response
echo json_encode($response);
