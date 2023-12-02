   
    <?php 
    $pageTitle = 'ADD NEW PRODUCTS';
    require ('./include/header.php'); 
    $uploadSuccess = false; 
    $valid_file=true;
    ?>
        <section class="form-register">
            <form method="post" action="add.php" class="myForm" enctype="multipart/form-data">
                <h2>ADD NEW PRODUCT </h2>
                    <div class="form-group">
                        <label for="date" class="col-sm-2 control-label">REGISTER DATE</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" class="form-control" id="input1" value="<?php echo date('Y-m-d'); ?>" >
                        </div>
                    </div>
					 <div class="form-group">
						 <label for="name" class="col-sm-2 control-label">WATCH NAME</label>
						 <div class="col-sm-10">
							 <input type="text" name="name" class="form-control" id="input2" placeholder="Wrtite watch name">
						 </div>
					 </div>
                     <div class="form-group">
                        <label for="color" class="col-sm-2 control-label">COLOR</label>
                        <div class="col-sm-10">
                        <select name="color" class="form-control">
                                <option>Product Color</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                                <option value="Black">Black</option>
                                <option value="White">White</option>
                                <option value="Copper">Copper</option>
                                <option value="Blue">Blue</option>
                                <option value="Red">Red</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="category" class="col-sm-2 control-label">CATEGORY</label>
                        <div class="col-sm-10">
                            <select name="category" class="form-control">
                                <option>Product Category</option>
                                <option value="Quartz Watch">Quartz Watch</option>
                                <option value="Mechanic Watch">Mechanic Watch</option>
                                <option value="Automatic Watch">Automatic Watch</option>
                                <option value="Necklace">Necklace</option>
                                <option value="Bracelet">Bracelet</option>
                                <option value="Ring">Ring</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand" class="col-sm-2 control-label">BRAND</label>
                        <div class="col-sm-10">
                            <input type="text" name="brand" class="form-control" id="input5" placeholder="Onola, Pagani, Lige, etc.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">PRODUCT DESCRIPTION</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" cols="50" rows="5" placeholder="Write the product description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label">PRODUCT PHOTO</label>
                        <div class="col-sm-10">
                            <input type='file' name='files[]' />
                        </div>
                    </div>
					<div class="form-group">
						 <input type="submit" name="Submit "class="addButton" value="Add">
                         <input type="reset" class="resetButton" value="Clear">
					</div>

            </form>
            <div class="form-group submit-message">
            </div>
        </section>
    </main>
    <?php require ('./include/footer.php'); ?>
    <!-- <footer>
        <p>Copyright © 2023 4Revolution store – 4Revolution Store.</p>
    </footer>
</body>
</html> -->