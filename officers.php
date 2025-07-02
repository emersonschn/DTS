<?php
// Database connection
$servername = "localhost"; // Change to your database server
$username = "root";    // Your database username
$password = "";    // Your database password
$dbname = "dts";           // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch officer data
$sql = "SELECT name, position, grade, bio, image FROM officers";
$result = $conn->query($sql);

?>

<?php
    $name = "Officers"; 
    include_once "quick/header.php";
?>

    <style>
        body {        
            background-color: #f4f4f9;
        }
        .container {
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 250px;
            margin: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }

        .card img {
            width: 150px;
            border-radius: 5%;
            margin-bottom: 10px;
        }
        .card h3 {
            color: #333;
            margin-bottom: 10px;
        }
        .card p {
            margin: 5px 0;
            color: #666;
        }
    </style>

    

    <div class="container">
        <?php
        // Check if there are results
        if ($result->num_rows > 0) {
            // Loop through each officer and display in a card
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                
                // Display the officer's image if it's available
                if (!empty($row['image'])) {
                    echo '<img src="' . htmlspecialchars($row['image']) . '" alt="Officer Image">';
                } else {
                    echo '<img src="images/default.jpg" alt="Default Image">'; // Placeholder image
                }

                // Display the officer's information
                echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                echo '<p><strong>Position:</strong> ' . htmlspecialchars($row['position']) . '</p>';
                echo '<p><strong>Grade:</strong> ' . htmlspecialchars($row['grade']) . '</p>';
                echo '<p><strong>Bio:</strong> ' . nl2br(htmlspecialchars($row['bio'])) . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No officers found.</p>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    
    <?php 
    include_once "quick/footer.php";
    ?>