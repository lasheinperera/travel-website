<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'dbconfig.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $guide_id = $_POST['guide_id'];
    $guide_status = $_POST['guide_status'];
    
    $sql = "UPDATE booking SET status='$status', guide_id='$guide_id', guide_status='$guide_status' WHERE tour_id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$sql = "SELECT * FROM booking";
$result = $conn->query($sql);
?>

<!doctype html>
<html>
  <head>
    <title>update Bookings</title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 50px:
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #3C486B;
}

th,text{
  color: white;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

form {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
#backbtn{

margin-top: 60px;display: inline-block;
padding: 20px 30px;
background-color: #3C486B;
color: #fff;
border-radius: 4px;
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
    <th>num of pax</th>
    <th>package</th>
    <th>date from</th>
    <th>date to</th>
    <th>country</th>
    <th>tp</th>
    <th>email</th>
    <th>message</th>
    <th>tour id</th>
    <th>status</th>
    <th>guide id</th>
    <th>guide status</th>
    <th>Update</th>
  </tr>
  <?php while($row = $result->fetch_assoc()): ?>
  <tr>
    <form method="post" action="">
      <td><?php echo $row['tour_id']; ?><input type="hidden" name="id" value="<?php echo $row['tour_id']; ?>"></td>
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
      <td><input type="text" name="status" value="<?php echo $row['status']; ?>"></td>
      <td><input type="text" name="guide_id" value="<?php echo $row['guide_id']; ?>"></td>
      <td><input type="text" name="guide_status" value="<?php echo $row['guide_status']; ?>"></td>
      <td><input type="submit" name="update" value="Update"></td>
    </form>
  </tr>
  <?php endwhile; ?>
</table>
<center>
    <button id="backbtn" onclick="location.href='view.php'">Go Back</button>
    <button id="logoutbtn" onclick="location.href='home.html'">Log out</button>
</center>
  </body>
  </html>