<?php
	require_once('database.php');
	$res = $database->read_products();
?>
<?php require ('./include/header.php'); ?>
    <main>
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
                            </tr>
                        <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </main>
    <?php require ('./include/footer.php'); ?>
