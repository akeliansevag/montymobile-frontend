<?php
    $scrollID = get_field("scroll_to_id");
?>

<?php if($scrollID):?>
    <div class="h-0" id="<?=$scrollID?>"></div>
<?php endif;?>