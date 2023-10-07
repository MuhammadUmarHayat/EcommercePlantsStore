
<?php include '../config.php';

// Get image data from database 
$result = $con->query("SELECT * FROM `orders`where `status`='paid' or `status`='pending'");

?>


<?php include("header.php")?>
<br><br><br><br>
</center>
<h2>Customer  Pending Orders</h2><br><br><br>
<table border=1>
                    <tr>
                        <th>Order Number</th>
                        <th> CustomerName </th>
                       
                        <th> Plant Number</th>
                        <th>Price </th>
                        <th>Quantity </th>
                        <th>Total </th>
                        <th>Status </th>
                        <th> </th>
                        
                        
                    </tr>
                    <?php if ($result->num_rows > 0) { ?>



                        <?php while ($row = $result->fetch_assoc()) { ?>


                            <tr>
                                <td><?php echo $row['order_id'] ?></td>
                                <td><?php echo $row['customerid'] ?></td>
                              
                                <td><?php echo $row['plant_id'] ?></td>
                                <td><?php echo $row['unitPrice'] ?></td>
                                <td><?php echo $row['quantity'] ?></td>
                                <td><?php echo $row['total'] ?></td>

                                <td><?php echo $row['status'] ?></td>
                              
<td>Change status: 

<?php echo '<a style="background-color:MediumSeaGreen; color:white; text-decoration: none;pedding:10px;" href="completed.php?id=' . $row['order_id'] . '">Completed</a>';


                                    ?>
                                 <?php echo '<a style="background-color:Tomato;color:white; text-decoration: none;pedding:10px;" href="canceled.php?id=' . $row['order_id'] . '">Canceled</a>';
                                        ?>
                                          <?php echo '<a style="background-color:DodgerBlue;color:white; text-decoration: none;pedding:10px;" href="pending.php?id=' . $row['order_id'] . '">Still Pendeing</a>';
                                        ?>


</td>

                                
                            </tr>
                        <?php



                        } ?>

                    <?php } else { ?>
                        <p class="status error">Image(s) not found...</p>
                    <?php } ?>

                </table> 
                </center>
</body>
</html>