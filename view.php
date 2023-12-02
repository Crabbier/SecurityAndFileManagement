<?php
	require_once('database.php');
	$res = $database->read_products();
?>
<?php 
    $pageTitle = 'VIEW PRODUCTS';
    require ('./include/header.php'); 
    ?>
        <div class="container">
            <div class="row">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Watch Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Registration Date</th>
                        <th>Product Photo</th>
                    </tr>
                    <?php

                        while($r = mysqli_fetch_assoc($res)){
                    ?>
                            <tr>
                                <td><?php echo $r['id']; ?></td>
                                <td><?php echo $r['name'], " ", $r['color']; ?></td>
                                <td><?php echo $r['category'] ?></td>
                                <td><?php echo $r['brand'] ?></td>
                                <td><?php echo $r['description'] ?></td>
                                <td><?php echo $r['date'] ?></td>
                                <td><img src="<?=$r['image_route']?>" title="<?=$r['image_name'] ?>" class="img-view" height="100px" border-radius="30%"></td>
                            </tr>
                        <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </main>
<?php require ('./include/footer.php'); ?>
