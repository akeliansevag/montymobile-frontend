<?php 
    $items = get_field("product_info_solution_items");
    $bg = get_field("product_info_solutions_background_image");
?>
<?php if($items):?>
    <section class="solutions-section position-relative py-5">
        <img src="<?=$bg['sizes']['background']?>" alt="" class="background-image">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="fw-bold"><?=get_field("product_info_solutions_title");?></h2>
                </div>
                <div class="col-sm-8"></div>
            </div>
        </div>
        <div class="container">
            <div class="solution-items pt-3">
                <?php foreach($items as $key=>$item):?>
                    <div class="solution-item">
                        <div>
                            <img src="<?=$item['icon']['url'];?>" alt="">
                            <h5 class="mb-0 mt-2 fw-normal"><?=$item['title'];?></h5>
                        </div> 
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif;?>