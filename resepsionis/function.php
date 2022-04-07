<?php

// koneksi ke databse
$conn = mysqli_connect("localhost", "root", "", "hotel");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function cari($keyword )
{
    $query = "SELECT * FROM customer 
WHERE nama_tamu LIKE '%$keyword%' OR tgl_cekin
 LIKE '%$keyword%'";
    return query($query);
}
