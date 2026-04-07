<?php

$conn = mysqli_connect('localhost', 'root', '', 'livros');


mysqli_query($conn, "INSERT INTO famosos (id, name) VALUES (DEFAULT, 'Josimar')");

mysqli_close($conn);