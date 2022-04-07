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
function cari($search )
{
    $query = "SELECT * FROM fs_hotel
WHERE nama_fasilitas LIKE '%$search%' OR id
 LIKE '%$search%'";
    return query($query);
}
