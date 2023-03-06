<?php
    if (isset($_POST['Input']))
{
    $nama = $_POST['nama']; 
    echo "Nama Anda : <b>$nama</b>";

    $umur = $_POST['umur']; 
    echo "Umur Anda : <b>$umur</b>";
    
    $hobi = $_POST['hobi']; 
    echo "Hobi Anda : <b>$hobi</b>";
}
?>