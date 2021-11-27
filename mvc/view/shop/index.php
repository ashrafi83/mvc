<div class="shop-products container">
    <div class="row">
        <?php
            $products = $data['products'];
            foreach ($products as $item):
        ?>
        <div class="product-item-p col-lg-3 col-md-4 col-sm-2 col-12">
            <div class="product-item">
                <a href="product/index/<?php echo $item['id']; ?>">
                <div class="product-img">
                    <img  src="<?php echo $item['image_address']; ?>">
                </div>
                <p class="text-center"><?php echo $item['title']; ?></p>
                <p class="product-price text-bold text-center"><?php echo fa_number(number_format($item['price'])) . ' تومان'; ?></p>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>