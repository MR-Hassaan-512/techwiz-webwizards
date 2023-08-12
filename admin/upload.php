<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "streamvibes";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$artist = $_POST['artist'];

$audio_file = $_FILES['audio']['name'];
$audio_tmp = $_FILES['audio']['tmp_name'];
$audio_url = 'audio/' . $audio_file;  // Change 'audio/' to your actual directory

move_uploaded_file($audio_tmp, $audio_url);

$sql = "INSERT INTO audio (song_name,singer, audio) VALUES ('$title', '$artist', '$audio_url')";
if ($conn->query($sql) === TRUE) {
    echo "Song uploaded successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

