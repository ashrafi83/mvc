<div class="container">
    <div class="row">
        <div class="c-checkout_group col-lg-9 col-md-9 col-12">
            <div class="c-checkout_items">
                <ul>
                    <?php
                        if(!empty($data)):

                        foreach($data['products'] as $item):
                    ?>
                    <li>
                        <div class="c-product_img">
                            <img src="<?php echo $item['image_address']; ?>">
                        </div>
                        <div style="display: flow-root;">
                            <div class="c-product_title"><?php echo $item['title']; ?></div>
                            <br>
                            <p class="text-bold"><?php echo fa_number(number_format($item['price'])).' تومان'; ?></p>
                        </div>
                        
                    </li>
                    <?php endforeach; endif;?>
                </ul>
            </div>
        </div>
        <aside class="c-checkout-aside col-lg-3 col-md-3 col-12">
            <div class="c-checkout-bill">
                <ul class="c-checkout-bill_summary">
                    cart bill
                </ul>
            </div>
        </aside>
    </div>
</div>