<?php

$conn = mysqli_connect('localhost', 'root', '', 'livros');

$query = 'SELECT * FROM famosos';

$result = mysqli_query($conn, $query);

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
        print $row['id'] . ' - ' . $row['name'] . '<br>';
  }
}

print_r($row);