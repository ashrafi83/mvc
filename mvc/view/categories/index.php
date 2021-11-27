<div class="categories container">
    <div class="row">
        <?php
            foreach ($data['categories'] as $item):
        ?>
        <div class="categories-item-p col-2">
            <div class="categories-item">
                <a href="categories/categories/<?php echo $item['url']; ?>">
                    <img class="category-img" src="<?php echo $item['img']; ?>">
                    <p class="category-title"><?php echo $item['title']; ?></p>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>