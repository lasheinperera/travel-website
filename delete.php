<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'dbconfig.php';
$tour_id = $_POST['tour_id'] ?? "";
$sql = "delete from booking where tour_id= $tour_id";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete a booking record
if(isset($_POST['delete_booking'])) 
    $tour_id = $_POST['tour_id'];
    
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("DELETE FROM booking WHERE tour_id=?");
    $stmt->bind_param("i", $tour_id);

    // Execute the SQL statement
    if ($stmt->execute() === TRUE) {
        echo "Booking record deleted successfully.";
    } else {
        echo "Error deleting booking record: " . $conn->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
?>

<!doctype html>
<head>
    <title>delete booking</title>
    <style>
        #backbtn{
            margin-top: 60px;display: inline-block;
            padding: 20px 30px;
            background-color: #3C486B;
            color: #fff;
            border-radius: 4px;
        }
        #headin{
            margin-top: 100px;
        }
        #submitbtn{
            margin-top: 60px;
            margin: left 50px;
            display: inline-block;
            padding: 20px 30px;
            background-color: #3C486B;
            color: #fff;
            border-radius: 4px;
        }
        
    </style>
</head>
<body>
    <center>
    <h2 id="headin">Delete Bookings</h2>
    <form id="form1" action="" method="post">
    <label for="tour_id">Enter Tour ID:</label>
    <input type="number" id="tour_id" name="tour_id" min="1" required>
    <button id="submitbtn" type="submit" name="delete_booking">Delete Booking</button>
    </form>
    <button id="backbtn" onclick="location.href='view.php'">View bookings</button>
    </center>

</body>
</html>