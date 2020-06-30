<?php
date_default_timezone_set('Asia/Jakarta');

///koneksi
$conn = mysqli_connect("localhost", "root", "root", "skripsi");
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
