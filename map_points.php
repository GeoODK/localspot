<?php

include("db.php");


// Select all the rows in the markers table
$query = "SELECT * FROM local_spot ORDER BY category";
$result = mysql_query($query);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<localspots>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  echo '<spot ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'address="' . $row['address'] . '" ';
  echo 'category="' . $row['category'] . '" ';
  echo 'description="' . $row['description'] . '" ';
  echo 'date="' . $row['submit_date'] . '" ';
  echo 'title="' .$row['title']. '" ';
  echo '/>';
}

// End XML file
echo '</localspots>';

?>