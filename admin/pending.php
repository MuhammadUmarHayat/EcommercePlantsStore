<!-- PHP  -->
<?php  include '../config.php';
 
$id= $_GET['id'];//query string 
$statusMsg ="";

$insert = $con->query("update `orders` set `status`='pending' WHERE `order_id`='$id'"); 
             if($insert){ 
               
                 $statusMsg = "Record is updated successfully."; 
            }else{ 
                $statusMsg = "Failed, please try again."; 
            }  

?>


<?php include("header.php")?>
<br><br><br>
<div class ="center">
    <?php echo $statusMsg;?>
        </div>