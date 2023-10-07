
<?php include '../config.php';

// Get image data from database 
$result = $con->query("SELECT * FROM `orders`");

?>


<?php include("header.php")?>
<br><br><br><br>
<center>
<h2>Customer Orders</h2>

<table border=1>
                    <tr>
                        <th>Order Number</th>
                        <th> CustomerName </th>
                       
                        <th> Plant Number</th>
                        <th>Price </th>
                        <th>Quantity </th>
                        <th>Total </th>
                        <th>Status </th>
                       
                        
                        
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