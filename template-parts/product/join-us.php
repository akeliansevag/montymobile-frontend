<?php
    $items = get_field("product_info_join_us_section_items");
?>

<?php if($items):?>
    <section class="join-us-section py-5 bg-white">
        <div class="join-us-section-content my-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="title-col container-margin">
                            <h2 class="fw-bold mb-0"><?=get_field("product_info_join_us_section_title")?></h2>
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8 pe-5">
                        <ul class="join-us-items pt-4">
                            <?php foreach($items as $key=>$item):?>
                                <li class="h5"><?=$item['title'];?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>