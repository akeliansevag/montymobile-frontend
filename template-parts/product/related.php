<?php 
    $products = "adasd";
?>

<?php if($products):?>
    <section class="related-section pt-5 bg-white">
        <div class="container">
            <h2 class="fw-bold"><?=get_field("related_products_title")?></h2>
        </div>
        <div class="related-products-container bg-gray py-5 mt-3">
            <div class="container">
                <div id="related-products-slider">
                    <?php for($i=1;$i<=10;$i++):?>
                        <a href="" class="product-slider-item mx-3">
                            <div>
                                <h5 class="mb-1 fw-bold">Product #<?=$i?></h5>
                                <p class="mb-0">Lorem Ipsum is simply dummy text printing.</p>
                            </div>
                        </a>
                    <?php endfor;?>
                </div>
            </div>
            <div class="spacer-50"></div>
        </div>
    </section>
<?php endif?>