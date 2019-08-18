<?php
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$fromEmailAddress = "From: ".$email;
$message = $name." ".$surname."\n\n".$comment;
$subject = "From my website";
mail("mlamlelibanele@yahoo.com", $subject, $message, $fromEmailAddress);
header("Location: index.php?mailsent");
?>