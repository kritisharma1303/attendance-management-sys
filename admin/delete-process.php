<?php
include('connect.php');

$sql = "DELETE FROM teachers WHERE tc_id='" . $_GET["userid"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>