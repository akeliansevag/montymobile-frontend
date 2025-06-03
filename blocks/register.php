<?php
add_action('init', 'register_acf_blocks');

function register_acf_blocks()
{
    register_block_type(__DIR__ . '/product/top-banner');
    register_block_type(__DIR__ . '/product/categories');
    register_block_type(__DIR__ . '/product/info');
    register_block_type(__DIR__ . '/product/features');
    register_block_type(__DIR__ . '/product/grid');
    register_block_type(__DIR__ . '/product/background');
    register_block_type(__DIR__ . '/product/performance');
    register_block_type(__DIR__ . '/product/join-us');
    register_block_type(__DIR__ . '/product/solutions');
    register_block_type(__DIR__ . '/product/related');
    register_block_type(__DIR__ . '/product/text-description');
    register_block_type(__DIR__ . '/product/left-right');
    register_block_type(__DIR__ . '/product/accordion');
    register_block_type(__DIR__ . '/product/header');
    register_block_type(__DIR__ . '/product/table');
    register_block_type(__DIR__ . '/product/scroll-to-id');
    register_block_type(__DIR__ . '/product/boxes');
}
