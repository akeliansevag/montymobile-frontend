<?php
$backgroundColor = get_field("block_background_color");
$items = get_field("block_product_accordion_items");
$blockID = $block['id'];
?>

<?php if ($items) : ?>
  <section class="py-4" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
    <div class="container">
      <div class="accordion <?= get_field("accordion_dark") ? "accordion-dark" : "" ?>" id="accordion-<?= $blockID ?>">
        <?php foreach ($items as $key => $item) : ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-<?= $blockID ?>-<?= $key ?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $blockID ?>-<?= $key ?>" aria-expanded="false" aria-controls="collapse-<?= $blockID ?>-<?= $key ?>">
                <strong><?= $item['title'] ?></strong>
              </button>
            </h2>
            <div id="collapse-<?= $blockID ?>-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?= $blockID ?>-<?= $key ?>" data-bs-parent="#accordion-<?= $blockID ?>">
              <div class="accordion-body">
                <?= $item['description'] ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>
<?php endif; ?>