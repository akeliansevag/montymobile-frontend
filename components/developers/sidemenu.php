<?php
global $post;
$post_slug = $post->post_name;

$menu = [];

$menu[] = [
    'slug' => 'sms',
    'title' => 'SMS',
    'children' => [
        [
            'title' => 'POST Send Campaign',
            'id' => 'post-send-campaign'
        ],
        [
            'title' => 'PUT Launch Campaign',
            'id' => 'put-launch-campaign'
        ],
        [
            'title' => 'GET Send SMS',
            'id' => 'get-send-sms'
        ],
        [
            'title' => 'POST Send SMS',
            'id' => 'post-send-sms'
        ],
        [
            'title' => 'POST Send OTP',
            'id' => 'post-send-otp'
        ],
        [
            'title' => 'POST Send Bulk SMS',
            'id' => 'post-send-bulk-sms'
        ],


    ]
];

$menu[] = [
    'slug' => 'whatsapp',
    'title' => 'WhatsApp',
    'children' => [
        [
            'title' => 'POST Send Campaign',
            'id' => 'post-send-campaign'
        ],
        [
            'title' => 'PUT Launch Campaign',
            'id' => 'put-launch-campaign'
        ],
        [
            'title' => 'POST Send OTP',
            'id' => 'post-send-otp'
        ],
        [
            'title' => 'POST Send Message (no variables)',
            'id' => 'post-send-message-no-variables'
        ],
        [
            'title' => 'POST Send Message (media and variables)',
            'id' => 'post-send-message-media-variables'
        ],
        [
            'title' => 'POST Send Bulk',
            'id' => 'post-send-bulk'
        ],
    ]
];

$menu[] = [
    'slug' => 'push-notification',
    'title' => 'Push',
    'children' => [
        [
            'title' => 'POST Send Campaign',
            'id' => 'post-send-campaign'
        ],
        [
            'title' => 'PUT Launch Campaign',
            'id' => 'put-launch-campaign'
        ],
        [
            'title' => 'POST Send Push Notification',
            'id' => 'post-send-push-notification'
        ],
        [
            'title' => 'POST Send OTP',
            'id' => 'post-send-otp'
        ],
        [
            'title' => 'POST Register Device',
            'id' => 'post-register-device'
        ],
    ]
];
?>
<div class="dev-menu">
    <h5>External APIs Live</h5>
    <div class="dev-menu-content">
        <ul>
            <?php foreach ($menu as $key => $m): ?>
                <li class="dev-link-parent <?= $post_slug == $m['slug'] ? 'current' : '' ?>">
                    <div class="dev-page-nav">
                        <div>
                            <?php
                            $page = get_posts([
                                'name'        => $m['slug'],
                                'post_type'   => 'page',
                                'post_status' => 'publish',
                                'numberposts' => 1,
                            ]);
                            ?>
                            <a class="dev-link" href="<?= get_permalink($page[0]->ID) ?>">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="20" viewBox="0 0 24 20">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_5470" data-name="Rectangle 5470" width="24" height="20" fill="#fff" />
                                            </clipPath>
                                        </defs>
                                        <g id="Group_8765" data-name="Group 8765" clip-path="url(#clip-path)">
                                            <path id="Path_10646" data-name="Path 10646" d="M11.216,20q-3.94,0-7.879,0A3.308,3.308,0,0,1,.064,17.292,3.786,3.786,0,0,1,0,16.541Q0,10.007,0,3.472A3.321,3.321,0,0,1,3.453,0c1.378,0,2.756,0,4.133,0a1.448,1.448,0,0,1,.847.26c.914.619,1.834,1.229,2.749,1.848a.686.686,0,0,0,.408.123c2.006,0,4.013-.008,6.019,0a3.289,3.289,0,0,1,3.279,2.693c.131.638.131.638-.509.638-.482,0-.964,0-1.447,0-.118,0-.174-.019-.2-.159a1.1,1.1,0,0,0-1.189-.961c-2.1,0-4.2-.005-6.3,0a1.663,1.663,0,0,1-.99-.3c-.889-.61-1.79-1.2-2.684-1.806A.606.606,0,0,0,7.2,2.227c-1.274,0-2.549,0-3.823,0A1.1,1.1,0,0,0,2.21,3.421q0,6.586,0,13.173a1.11,1.11,0,0,0,1.108,1.181c.154,0,.207-.054.235-.2.53-2.686,1.071-5.369,1.6-8.056A3.33,3.33,0,0,1,8.564,6.668q6.588,0,13.175,0A2.192,2.192,0,0,1,23.966,9.3c-.086.539-.205,1.072-.312,1.607-.428,2.15-.838,4.3-1.29,6.447A3.26,3.26,0,0,1,19.1,20c-2.626.006-5.253,0-7.879,0m1.355-2.226q3.229,0,6.457,0a1.114,1.114,0,0,0,1.209-1q.758-3.81,1.522-7.618c.043-.212.009-.263-.206-.262q-6.522.008-13.043,0a1.1,1.1,0,0,0-1.182.969c-.5,2.549-1,5.1-1.52,7.645-.05.247.02.268.228.267q3.267-.009,6.535,0" transform="translate(0 0)" fill="#fff" />
                                        </g>
                                    </svg>
                                </div>

                                <div>
                                    <?= $m['title']; ?>
                                </div>
                            </a>
                        </div>
                        <div class="dev-link-toggle" data-bs-toggle="collapse" data-bs-target="#<?= $m['slug'] ?>-<?= $key ?>" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9">
                                <path id="dropdown-arrow" d="M7.977,6.545c.153-.165.242-.27.339-.366q2.911-2.9,5.823-5.8A1.064,1.064,0,0,1,15.218.04a1.03,1.03,0,0,1,.545,1.655,2.582,2.582,0,0,1-.194.2l-6.7,6.665a1.078,1.078,0,0,1-1.731,0Q3.756,5.2.375,1.841A1.041,1.041,0,1,1,1.792.321c.529.513,1.047,1.037,1.57,1.557Q5.591,4.095,7.818,6.312a1.72,1.72,0,0,1,.16.233Z" transform="translate(0.001 -0.001)" />
                            </svg>
                        </div>
                    </div>
                    <div class="collapse" id="<?= $m['slug'] ?>-<?= $key ?>">
                        <ul class="dev-link-children">
                            <?php foreach ($m['children'] as $key2 => $c): ?>
                                <li><a href="<?= get_permalink($page[0]->ID) ?>#<?= $c['id'] ?>"><?= $c['title'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>