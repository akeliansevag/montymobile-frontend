<?php
    $categories = [
        'nextwAlve',
        'Entertainment',
        'Traditional Services',
        'Cloud Gaming'
    ];
?>

<?php if($categories): ?>
    <section class="product-categories-container bg-gray py-5 overflow-x w-100">
        <div class="container for-overflow"> 
            <ul class="product-categories my-2">
                <?php foreach($categories as $key=>$cat):?>
                    <li class="product-category mx-3">
                        <a href="#"><?=$cat?></a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </section>
<?php endif;?>