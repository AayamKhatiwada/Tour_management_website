<?php
include("connection.php");
$num = $_GET['number'];
$data = $_GET['data'];
$delete = "DELETE FROM `$data` WHERE `S no.` = '$num'";
if(mysqli_query($con,$delete)){
    echo "<script>alert('Record is deleted')</script>";
}
if($data=='package'){
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/TMS/code/managePackages.php">
<?php
}
if($data=='user'){
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/TMS/code/manageUser.php">
    <?php
    }
if($data=='booking'){
    ?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/TMS/code/manageBooking.php">
<?php
    }
if($data=='enquiry'){
    ?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/TMS/code/manageEnquiry.php">
<?php
    }

?>
