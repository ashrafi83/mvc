<?php
    $product = $data['product'];
?>
<div class="container">
    <div class="row">
        <div class="section-product-single">
            <div class="img col-lg-4 col-mg-6 col-12">
                <img src="<?php echo $product['image_address']; ?>">
            </div>
            <div class="col-lg-4 col-mg-6 col-12" style="padding: 0 10px;">
                <p class="title"><?php echo $product['title']; ?></p>
                <hr>
                <p class="price"><?php echo fa_number(number_format($product['price'])) . ' تومان'; ?></p>
            </div>
            <div class="col-lg-4 col-mg-6 col-12" style="border-right: 1px solid #212529;padding: 0 10px;">
                <ul>
                    <li>فروشنده: <span style="font-weight: bold;">تهران موبایل</span></li>
                    <li>گارانتی: <span style="font-weight: bold;">گارانتی ۱۸ ماهه مدیا پردازش</span></li>
                </ul>
                <hr>
                <div style="text-align: center;">
                    <a href="cart/add/<?php echo $product['id']; ?>" class="btn btn-primary text-lite" style="width: 100%;height:45px;padding: 10px 0;">افزودن به سبد خرید</a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="product-single-description col-12">
            <p><h5>توضیحات:</h5></p>
            <?php echo $product['description']; ?>
        </div>
    </div>
</div>