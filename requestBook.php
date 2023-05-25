<?php
include('sql_query\config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $BOOKID =  $_POST['Accessioninput'];
     
     $result = mysqli_query($conn,"SELECT * FROM `books` WHERE `Accession_no`=$BOOKID");
     $row = mysqli_fetch_assoc($result);
     $BookTitle = $row['Title'];
     $ReciverPin = $_SESSION['username'];
     $transactionsID = 'testID001';
     $sql = "INSERT INTO `transactions` (
                    `Transaction_id`, 
                    `Accession_no`, 
                    `Title`, 
                    `Reciver_pin-no`, 
                    `issuance_date`, 
                    `Reurn_date`, 
                    `Status`
                ) 
                    VALUES (
                        '$transactionsID',
                        '$BOOKID','$BookTitle','$ReciverPin','not issued','not issued','waiting for admin to accept')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: /student.php");
    }
}
?>
