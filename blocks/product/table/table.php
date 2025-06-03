<?php
$table = get_field("block_product_table_table");
$backgroundColor = get_field("block_background_color");
?>

<?php if ($table) : ?>
    <section class="py-5" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
        <div class="container">
            <div class="table-responsive table-wrapper <?= get_field("table_dark") ? "table-dark" : "" ?>">
                <table class="table table-block">
                    <?php $thead = $table['header']; ?>
                    <thead>
                        <tr>
                            <?php foreach ($thead as $key => $th) : ?>
                                <th class="p-3 fs-5" scope="col-md-4"><?= $th['c'] ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <?php $tbody = $table['body']; ?>
                    <tbody>
                        <?php foreach ($tbody as $key => $tb) : ?>
                            <tr>
                                <?php foreach ($tb as $td) : ?>
                                    <td class="p-3"><?= $td['c']; ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


        </div>
    </section>
<?php endif; ?>