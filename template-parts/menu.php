<?php
$menu = build_menu_hierarchy(wp_get_nav_menu_items("main-menu"));
$top_level_items = [];
$first_level_items = [];
$second_level_items = [];
$third_level_items = [];

?>

<nav class="main-menu">
    <ul>
        <?php foreach ($menu as $key => $item) : ?>
            <li>
                <?php if ($item['url'] != "#") : ?>
                    <a href="<?= $item['url']; ?>" target="<?= $item['target'] ?>"><span class="dotted-design"><?= $item['title'] ?></span></a>
                <?php else : ?>
                    <div class="no-link-item"><span class="dotted-design"><?= $item['title'] ?></span></div>
                <?php endif; ?>

                <?php if ($item['children']) : ?>
                    <div class="mega-menu-wrapper">
                        <div class="mega-menu">
                            <div class="first-level-items menu-list">
                                <ul class="sub-menu level-one">
                                    <?php foreach ($item['children'] as $first_child) : ?>
                                        <li class="mb-2">
                                            <?php
                                            $rightArrow = "";
                                            if ($first_child['children']) {
                                                $rightArrow = "<span class='right-arrow'><i class='fa fa-chevron-right'></i></span>";
                                            }
                                            ?>
                                            <a class="black-hover" data-level="one" data-menu="menu-<?= $first_child['ID'] ?>" href="<?= $first_child['url']; ?>" target="<?= $first_child['target'] ?>">
                                                <?= $first_child['title'] ?>
                                                <?= $rightArrow; ?>
                                            </a>
                                        </li>
                                        <?php
                                        if ($first_child['children']) {
                                            $second_level_items['menu-' . $first_child['ID']] = $first_child['children'];
                                        }
                                        ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="second-level-items hidden-lists menu-list">
                                <?php foreach ($second_level_items as $key => $sl) : ?>
                                    <ul class="sub-menu level-two px-5" data-menu="<?= $key ?>">
                                        <?php foreach ($sl as $csl) : ?>
                                            <?php
                                            $rightArrow = "";
                                            if ($csl['children']) {
                                                $rightArrow = "<span class='right-arrow'><i class='fa fa-chevron-right'></i></span>";
                                            }
                                            ?>
                                            <li class="mb-2">
                                                <a class="black-hover" data-level="two" data-menu="menu-<?= $csl['ID'] ?>" href="<?= $csl['url']; ?>" target="<?= $csl['target'] ?>"><?= $csl['title'] ?> <?= $rightArrow; ?></a>
                                            </li>
                                            <?php
                                            if ($csl['children']) {
                                                $third_level_items['menu-' . $csl['ID']] = $csl['children'];
                                            }
                                            ?>
                                        <?php endforeach;
                                        $second_level_items = []; ?>

                                    </ul>
                                <?php endforeach; ?>
                            </div>
                            <div class="third-level-items hidden-lists menu-list">
                                <?php foreach ($third_level_items as $key => $tli) : ?>
                                    <ul class="sub-menu level-three px-5" data-menu="<?= $key ?>">
                                        <?php foreach ($tli as $tl) : ?>
                                            <?php
                                            $rightArrow = "";
                                            if ($tl['children']) {
                                                $rightArrow = "<span class='right-arrow'><i class='fa fa-chevron-right'></i></span>";
                                            }
                                            ?>
                                            <li class="mb-2">
                                                <a class="black-hover" data-level="three" data-menu="menu-<?= $tl['ID'] ?>" href="<?= $tl['url']; ?>" target="<?= $tl['target'] ?>"><?= $tl['title'] ?> <?= $rightArrow ?></a>
                                            </li>
                                        <?php endforeach;
                                        $third_level_items = []; ?>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>


</nav>