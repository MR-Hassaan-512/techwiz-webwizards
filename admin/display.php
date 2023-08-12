<!DOCTYPE html>
<html>
<head>
    <title>Song List</title>
</head>
<body>
    <h1>Song List</h1>
    
    <?php
    include('connect.php');
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, title, singer, audio FROM audio";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<h2>' . $row['title'] . '</h2>';
            echo '<p>Artist: ' . $row['artist'] . '</p>';
            echo '<audio controls>';
            echo '<source src="' . $row['audio'] . '" type="audio/mpeg">';
            echo 'Your browser does not support the audio element.';
            echo '</audio>';
        }
    } else {
        echo "No songs found.";
    }

    $conn->close();
    ?>
</body>
</html>
