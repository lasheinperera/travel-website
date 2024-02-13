<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'dbconfig.php';

$sql = "SELECT * FROM booking";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Bookings</title>
	<style>
		table {
		  font-family: Arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
          margin-top: 50px
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #f2f2f2;
		}

		th {
		  background-color: #3C486B;
		  color: white;
		}
        #updatebtn{

            margin-top: 60px;display: inline-block;
            padding: 20px 30px;
            background-color: #3C486B;
            color: #fff;
            border-radius: 4px;
            margin-right: 25px
        }
        #deletebtn{

            margin-top: 60px;display: inline-block;
            padding: 20px 30px;
            background-color: #3C486B;
            color: #fff;
            border-radius: 4px;
            margin-left: 25px

           }        
        #logoutbtn{

            margin-top: 60px;display: inline-block;
            padding: 20px 30px;
            background-color: #3C486B;
            color: #fff;
            border-radius: 4px;
            margin-left: 50px

}        
    
	</style>
</head>
<body>

<table>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Number of Pax</th>
    <th>Package</th>
    <th>Date From</th>
    <th>Date To</th>
    <th>Country</th>
    <th>Contact Number</th>
    <th>Email</th>
    <th>Message</th>
    <th>Tour ID</th>
    <th>Status</th>
    <th>Guide ID</th>
    <th>Guide Status</th>
  </tr>
  <?php while($row = $result->fetch_assoc()): ?>
  <tr>
    <td><?php echo $row['tour_id']; ?></td>
    <td><?php echo $row['first_name']; ?></td>
    <td><?php echo $row['last_name']; ?></td>
    <td><?php echo $row['no_of_pax']; ?></td>
    <td><?php echo $row['package']; ?></td>
    <td><?php echo $row['date_from']; ?></td>
    <td><?php echo $row['date_to']; ?></td>
    <td><?php echo $row['country']; ?></td>
    <td><?php echo $row['tp']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['message']; ?></td>
    <td><?php echo $row['tour_id']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><?php echo $row['guide_id']; ?></td>
    <td><?php echo $row['guide_status']; ?></td>
  </tr>
  <?php endwhile; ?>
</table>
<center>
    <button id="updatebtn" onclick="location.href='update.php'">Update Data</button>
    <button id="deletebtn" onclick="location.href='delete.php'">Delete Data</button>
    <button id="logoutbtn" onclick="location.href='home.html'">Log out</button>

</center>

</body>
</html>
