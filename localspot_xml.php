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
  echo '<spot>';
  echo '<lat>' . $row['lat'] . '</lat>';
  echo '<lng>' . $row['lng'] . '</lng>';
  echo '<address>' . $row['address'] . '</address>';
  echo '<category>' . $row['category'] . '</category>';
  echo '<description>' . $row['description'] . '</description>';
  echo '<date>' . $row['submit_date'] . '</date>';
  echo '<title>' .$row['title']. '</title>';
  echo '</spot>';
}

// End XML file
echo '</localspots>';

?>