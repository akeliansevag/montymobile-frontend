<?php
$data = "";
if ($args['data']) {
    $data = $args['data'];
}
?>

<?php if ($data): ?>
    <?php foreach ($data as $key => $d): ?>
        <div class="white-block" id="<?= $d['slug'] ?>">
            <?php if ($d['title']): ?>
                <h3><?= $d['title'] ?></h3>
            <?php endif; ?>
            <div class="row mt-4 g-4">
                <?php if ($d['description']): ?>
                    <div class="col-lg-6">
                        <div class="white-block h-100">
                            <h4>Description</h4>
                            <?= $d['description'] ?>
                        </div>

                    </div>
                <?php endif; ?>
                <?php if ($d['use_case']): ?>
                    <div class="col-lg-6">
                        <div class="white-block h-100">
                            <h4>Use Case</h4>
                            <?= $d['use_case'] ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($d['info']): ?>
                <div class="my-5">
                    <?php foreach ($d['info'] as $in): ?>
                        <div class="mt-5">
                            <h3 class="d-inline"><?= $in['title'] ?></h3>
                            <?php if ($in['subtitle']): ?>
                                <h5 class="ms-3 d-inline"><?= $in['subtitle'] ?></h5>
                            <?php endif; ?>
                            <div class="black-separator"></div>
                        </div>


                        <?php if ($in['items']): ?>
                            <div class="dev-items mt-3">
                                <div class="row g-5">
                                    <?php foreach ($in['items'] as $key2 => $it): ?>
                                        <?php
                                        $col = "col-lg-6";
                                        if (count($in['items']) == 1) {
                                            $col = "col-lg-12";
                                        }

                                        ?>
                                        <?php $textID = 'textBlock-' . '-' . uniqid(); ?>
                                        <div class="<?= $col ?>">
                                            <div class="dev-item">
                                                <span><?= $it['title'] ?></span>
                                                <span id="<?= $textID ?>"><?= $it['value'] ?></span>
                                                <?php if ($it['copy']): ?>

                                                    <button class="copy-btn top-0 p-0" onclick="copyToClipboard('<?= $textID ?>', this)">
                                                        <div class="invisible copied-text">Copied!</div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" viewBox="0 0 12 12">
                                                            <defs>
                                                                <clipPath id="clip-path">
                                                                    <rect id="Rectangle_5477" data-name="Rectangle 5477" width="12" height="12" transform="translate(-0.35 -0.35)" fill="#000000" />
                                                                </clipPath>
                                                            </defs>
                                                            <g id="Group_8775" data-name="Group 8775" transform="translate(0.35 0.35)" clip-path="url(#clip-path)">
                                                                <path id="Path_10648" data-name="Path 10648" d="M149.537,153.848c0-.981,0-1.962,0-2.942a1.327,1.327,0,0,1,1.048-1.341,1.53,1.53,0,0,1,.339-.032H156.8a1.331,1.331,0,0,1,1.393,1.39q0,2.937,0,5.873a1.332,1.332,0,0,1-1.393,1.39h-5.873a1.332,1.332,0,0,1-1.388-1.384q0-1.477,0-2.954m.887.012q0,1.465,0,2.93a.446.446,0,0,0,.512.51h5.859a.446.446,0,0,0,.51-.512q0-2.93,0-5.86a.446.446,0,0,0-.512-.51h-5.859a.446.446,0,0,0-.51.512q0,1.465,0,2.93" transform="translate(-146.891 -146.888)" fill="#000000" />
                                                                <path id="Path_10649" data-name="Path 10649" d="M0,4.316c0-.985,0-1.969,0-2.954A1.314,1.314,0,0,1,1.123.017,1.526,1.526,0,0,1,1.381,0q2.948,0,5.9,0A1.323,1.323,0,0,1,8.611,1.008a3.024,3.024,0,0,1,.037.679c0,.049-.028.057-.068.057-.247,0-.494,0-.741,0-.062,0-.07-.031-.069-.081,0-.106,0-.212,0-.318A.444.444,0,0,0,7.3.881q-2.977,0-5.954,0a.441.441,0,0,0-.465.467q0,2.977,0,5.954a.444.444,0,0,0,.468.465c.11,0,.22,0,.329,0,.064,0,.091.016.09.086,0,.239,0,.479,0,.718,0,.043,0,.077-.06.077A1.949,1.949,0,0,1,.73,8.506a1.257,1.257,0,0,1-.722-1.13c-.014-1.02,0-2.04,0-3.059Z" transform="translate(0 0)" fill="#000000" />
                                                            </g>
                                                        </svg>
                                                    </button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php if ($it['code_block']): ?>
                                    <div class="code-block">
                                        <pre class="mb-0"><code><?= htmlspecialchars($it['code_block']) ?></code></pre>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>
                        <?php if ($in['code_block']): ?>
                            <?php $cb = $in['code_block']; ?>
                            <?php if ($cb['dark']): ?>
                                <div class="code-black-wrapper mt-4">
                                <?php endif; ?>
                                <?php if ($cb['title']): ?>
                                    <h5 class="text-white"><?= $cb['title'] ?></h5>
                                <?php endif; ?>
                                <?php $blockId = 'codeBlock-' . $index . '-' . uniqid(); ?>
                                <div class="code-block <?= $cb['dark'] ? 'dark' : '' ?>">
                                    <button class="copy-btn" onclick="copyToClipboard('<?= $blockId ?>', this)">
                                        <div class="invisible copied-text">Copied!</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" viewBox="0 0 12 12">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect id="Rectangle_5477" data-name="Rectangle 5477" width="12" height="12" transform="translate(-0.35 -0.35)" fill="#000000" />
                                                </clipPath>
                                            </defs>
                                            <g id="Group_8775" data-name="Group 8775" transform="translate(0.35 0.35)" clip-path="url(#clip-path)">
                                                <path id="Path_10648" data-name="Path 10648" d="M149.537,153.848c0-.981,0-1.962,0-2.942a1.327,1.327,0,0,1,1.048-1.341,1.53,1.53,0,0,1,.339-.032H156.8a1.331,1.331,0,0,1,1.393,1.39q0,2.937,0,5.873a1.332,1.332,0,0,1-1.393,1.39h-5.873a1.332,1.332,0,0,1-1.388-1.384q0-1.477,0-2.954m.887.012q0,1.465,0,2.93a.446.446,0,0,0,.512.51h5.859a.446.446,0,0,0,.51-.512q0-2.93,0-5.86a.446.446,0,0,0-.512-.51h-5.859a.446.446,0,0,0-.51.512q0,1.465,0,2.93" transform="translate(-146.891 -146.888)" fill="#000000" />
                                                <path id="Path_10649" data-name="Path 10649" d="M0,4.316c0-.985,0-1.969,0-2.954A1.314,1.314,0,0,1,1.123.017,1.526,1.526,0,0,1,1.381,0q2.948,0,5.9,0A1.323,1.323,0,0,1,8.611,1.008a3.024,3.024,0,0,1,.037.679c0,.049-.028.057-.068.057-.247,0-.494,0-.741,0-.062,0-.07-.031-.069-.081,0-.106,0-.212,0-.318A.444.444,0,0,0,7.3.881q-2.977,0-5.954,0a.441.441,0,0,0-.465.467q0,2.977,0,5.954a.444.444,0,0,0,.468.465c.11,0,.22,0,.329,0,.064,0,.091.016.09.086,0,.239,0,.479,0,.718,0,.043,0,.077-.06.077A1.949,1.949,0,0,1,.73,8.506a1.257,1.257,0,0,1-.722-1.13c-.014-1.02,0-2.04,0-3.059Z" transform="translate(0 0)" fill="#000000" />
                                            </g>
                                        </svg>

                                    </button>
                                    <?php if ($cb['inner_title']): ?>
                                        <div class="code-inner-title">
                                            <?= $cb['inner_title'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <pre id="<?= $blockId ?>" class="mb-0"><code><?= htmlspecialchars($cb['code']) ?></code></pre>
                                </div>
                                <?php if ($cb['dark']): ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

            <?php endif; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>