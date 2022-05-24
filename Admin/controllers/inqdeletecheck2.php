<?php 

require_once '../models/inq.php';

if (deleteplace($_GET['InquiryQuestion'])) {
    header('Location: ../Views/inq.php');
}

 ?>

?>