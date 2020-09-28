<?php
include 'includes/connection.php';
$booking_id= $_GET['booking_id'];
$deletequery="delete from bookings where booking_id=$booking_id";
$query=mysqli_query($conn,$deletequery);
if ($query) {
header('location: bookings.php');
}

$feedid= $_GET['feedid'];
$deletequery2="delete from feedbackform where feedid=$feedid";
$query2=mysqli_query($conn,$deletequery2);
if ($query2) {
header('location: testimonials.php');
}
?>
