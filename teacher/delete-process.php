<?php
include('connect.php');

$sql = "DELETE FROM students WHERE st_id='" . $_GET["userid"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>