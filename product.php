<div class="prodcut-grid">
        <div class="txt-heading">Products</div>
        <?php 
        $product_arr = $db_handle->runQuery("SELECT * FROM products ORDER BY id ASC");
        if(! empty($product_arr)){
            foreach ($product_arr as $key => $value) {
         ?>
         <div class="product-item">
            <form method="post" action="index.php?action=add&id=<?php echo $product_arr[$key]["id"]; ?>">
                <div class="product-image">
                    
                </div>
                <div class="product-title-foter">
                    <div class="product-title" ><?php echo $product_arr[$key]["name"]; ?></div>
                    <div class="product-title" ><?php echo $product_arr[$key]["date"]; ?></div>
                    <div class="cart-action">
                        <input type="text" class="product-quantity" name="quantity" value="1" size="1" >
                        <input type="submit" name="" id="" value="Add to cart" class="btnAddAction">
                    </div>
                </div>
            </form>
         </div>
         <?php 
        }
    }
          ?>
    </div>