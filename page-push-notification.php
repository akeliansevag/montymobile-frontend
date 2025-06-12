<?php get_header(); ?>
<?= get_template_part('components/developers/top'); ?>
<section class="bg-white pb-5">
    <div class="dev-content-wrapper">
        <div class="">
            <?= get_template_part("components/developers/sidemenu"); ?>
        </div>
        <div class="">
            <div class="white-block">
                <h3>I. Push Notification Campaigns API Integration Example</h3>
            </div>
            <?php

            $data = [];
            $data[] = [
                'title' => '<span>POST</span> Send Push Notification Campaign',
                'slug' => 'post-send-campaign',
                'description' => 'This API allows you to create and send push notification campaigns to a large group of users. It supports message scheduling, custom titles, content, and URLs that launch when the user interacts with the notification. It can be used for sending important updates, promotional offers, or any time-sensitive alerts directly to the user’s device.',
                'use_case' => 'Imagine you are running an e-commerce app and want to inform users about a flash sale or a special promotion. By using this API, you can send out a push notification with details about the sale, including an image of the product and a link that redirects users to the sale page. This API allows you to deliver real-time updates directly to users\' devices, increasing engagement and driving traffic to your app or website.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/v2/PushCampaignApi/all',
                                'copy' => true
                            ]
                        ]
                    ],
                    [
                        'title' => 'AUTHORIZATION',
                        'subtitle' => 'API Key',
                        'items' => [
                            [
                                'title' => 'Key',
                                'value' => 'api-key',
                            ],
                            [
                                'title' => 'Value',
                                'value' => '{{api_key}}',
                            ],
                        ]
                    ],
                    [
                        'title' => 'HEADERS',
                        'items' => [
                            [
                                'title' => 'Tenant',
                                'value' => '3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4',
                            ]
                        ]
                    ],
                    [
                        'title' => 'BODY',
                        'items' => [
                            [
                                'title' => 'name',
                                'value' => 'The campaign name.',
                            ],
                            [
                                'title' => 'title',
                                'value' => 'The title of the camapign.',
                            ],
                            [
                                'title' => 'content',
                                'value' => 'The content of the campaign.',
                            ],
                            [
                                'title' => 'AppGuid',
                                'value' => 'The unique identifier for your application instance.',
                            ],
                            [
                                'title' => 'ApiId',
                                'value' => 'The unique ID associated with app created on UI.',
                            ]
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
"name":"campaign name", 
"title": "campaign title",
  "content": "campaign content",
  "AppGuid": "53ab52ccwef-e3bb-480d-b9ef-20d8a04d8d23",
  "ApiId": "6a16f9a1wew2-99f5-49b3-8d27-dfba23830aa8"
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location 'https://omni-apis.montymobile.com/notification/v2/PushCampaignApi/all' \
--header 'Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4' \
--header 'api-key: c81f80103sdfda721667aab62b3798d7dff2b38d25bb39c9368db8984734c443574' \
--header 'Content-Type: application/json' \
--data '{
\"name\":\"campaign name\", 
\"title\": \"campaign title\",
  \"content\": \"campaign content\",
  \"AppGuid\": \"53ab52ccwef-e3bb-480d-b9ef-20d8a04d8d23\",
  \"ApiId\": \"6a16f9a1wew2-99f5-49b3-8d27-dfba23830aa8\"
}'"
                        ],

                    ]

                ]
            ];


            $data[] = [
                'title' => '<span>PUT</span> Launch Push Notification Campaign',
                'slug' => 'put-launch-campaign',
                'description' => 'This API is used to launch an already created push notification campaign. It triggers the push notification campaign to start sending the notifications to the recipients. The campaign is identified by its unique CampaignId, which is required in the request body to execute the launch.',
                'use_case' => 'Let’s say you’ve created a push notification campaign for a new product launch, and now it’s time to start the campaign. Using this API, you can trigger the campaign to send the push notifications to all the intended recipients. This is ideal for time-sensitive campaigns where you want to control the exact moment when the notifications are sent, such as announcing a flash sale or sending out an important update.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/v2/PushCampaignApi/camapign-launch',
                                'copy' => true
                            ]
                        ]
                    ],
                    [
                        'title' => 'AUTHORIZATION',
                        'subtitle' => 'API Key',
                        'items' => [
                            [
                                'title' => 'Key',
                                'value' => 'api-key',
                            ],
                            [
                                'title' => 'Value',
                                'value' => '{{api_key}}',
                            ],
                        ]
                    ],
                    [
                        'title' => 'HEADERS',
                        'items' => [
                            [
                                'title' => 'Tenant',
                                'value' => '3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4',
                            ]
                        ]
                    ],
                    [
                        'title' => 'BODY',
                        'items' => [
                            [
                                'title' => 'CampaignId',
                                'value' => 'The unique identifier automatically generated or returned when a push campaign is created.',
                            ],
                            [
                                'title' => 'ApiId',
                                'value' => 'The unique ID associated with app created on UI.',
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
    “CampaignId” : “sdfredf-5558-44a0-8fsdfe97-91a50edf2274”,
    "ApiId": "6a16f9a1wew2-99f5-49b3-8d27-dfba23830aa8"
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location --request PUT 'https://notification-qa.montylocal.net/api/apikey/v2/PushCampaignApi/campaign-launch' \
--header 'Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4' \
--header 'api-key: c81f80103da721667aab62b3798d7dff2b38d25bb39c9368db8984734c443574' \
--header 'Content-Type: application/json' \
--data '{\"CampaignId\":\"sdfredf-5558-44a0-8fsdfe97-91a50edf2274\",\"ApiId\":\"6a16f9a1wew2-99f5-49b3-8d27-dfba23830aa8\"}'"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send Push Notification',
                'slug' => 'post-send-push-notification',
                'description' => 'This API allows you to send a push notification to a specific device identified by its DeviceGuid. You can include details like the title, content, image, and a URL that launches when the user clicks on the notification. This API is useful for sending real-time alerts, notifications, or updates directly to individual users.',
                'use_case' => "Imagine you’re managing a messaging app and want to notify users about new messages or alerts. By using this API, you can send a personalized push notification with a title like “You have a new message” and a content body to provide additional information. The notification can also include an image and a link that opens a specific chat or conversation in the app when clicked. This is an ideal use case for any scenario where immediate and personalized communication with users is essential.",
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/Push/device',
                                'copy' => true,
                            ]
                        ]
                    ],
                    [
                        'title' => 'AUTHORIZATION',
                        'subtitle' => 'API Key',
                        'items' => [
                            [
                                'title' => 'Key',
                                'value' => 'api-key',
                            ],
                            [
                                'title' => 'Value',
                                'value' => '{{api_key}}',
                            ],
                        ]
                    ],
                    [
                        'title' => 'HEADERS',
                        'items' => [
                            [
                                'title' => 'Tenant',
                                'value' => '3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4',
                            ]
                        ]
                    ],
                    [
                        'title' => 'BODY',
                        'items' => [
                            [
                                'title' => 'title',
                                'value' => 'The title of the push notification message (what appears in bold on the user’s phone).',
                            ],
                            [
                                'title' => 'content',
                                'value' => 'The body/content of the push notification message.'
                            ],
                            [
                                'title' => 'AppGuid',
                                'value' => 'The unique identifier for your application instance.'
                            ],

                            [
                                'title' => 'ApiId',
                                'value' => 'The unique ID associated with app created on UI.'
                            ],
                            [
                                'title' => 'DeviceId',
                                'value' => 'The unique ID of the device that will receive the push notification.'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
  "title": "send",
  "content": "send",
  "AppGuid": "53ab52gfdcc-e3bb-480d-b9ef-20d8a04d8d23",
  "ApiId": "df271070wert-3c6a-4f21-9c51-8834f41d5d4e",
  "DeviceId": "30743wedf6432f2a708ae5"
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location ' https://omni-apis.montymobile.com/notification/api/v2/Push/device' \
--header 'Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4' \
--header 'api-key: c81rfgbgff80103da721667aab62b3798d7dff2b38d25bb39c9368db8984734c443574' \
--header 'Content-Type: application/json' \
--data '{
  \"title\": \"send\",
  \"content\": \"send\",
  \"AppGuid\": \"53ab52gfdcc-e3bb-480d-b9ef-20d8a04d8d23\",
  \"ApiId\": \"df271070wert-3c6a-4f21-9c51-8834f41d5d4e\",
  \"DeviceId\": \"30743wedf6432f2a708ae5\"
}'"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send OTP via Push Notification',
                'slug' => 'post-send-otp',
                'description' => 'This API allows you to send a One-Time Password (OTP) as a push notification to a specific device identified by its DeviceGuid. It is typically used for secure authentication or verification purposes, such as logging in, resetting passwords, or verifying transactions. The notification can include a title, content, and a URL to launch when the user interacts with the notification.',
                'use_case' => 'Imagine you’re managing a banking app, and a user needs to verify their identity for a login attempt or a transaction. By using this API, you can send an OTP directly to their device via a push notification. The notification can include the OTP code, and a link to proceed with the verification. This approach adds an extra layer of security while maintaining user convenience.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/Push/otp',
                                'copy' => true,
                            ]
                        ]
                    ],
                    [
                        'title' => 'AUTHORIZATION',
                        'subtitle' => 'API Key',
                        'items' => [
                            [
                                'title' => 'Key',
                                'value' => 'api-key',
                            ],
                            [
                                'title' => 'Value',
                                'value' => '{{api_key}}',
                            ],
                        ]
                    ],
                    [
                        'title' => 'HEADERS',
                        'items' => [
                            [
                                'title' => 'Tenant',
                                'value' => '3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4',
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY',
                        'items' => [
                            [
                                'title' => 'title',
                                'value' => 'The title of the push notification message (what appears in bold on the user’s phone).',
                            ],
                            [
                                'title' => 'content',
                                'value' => 'The body/content of the push notification message.'
                            ],
                            [
                                'title' => 'AppGuid',
                                'value' => 'The unique identifier for your application instance.'
                            ],

                            [
                                'title' => 'ApiId',
                                'value' => 'The unique ID associated with app created on UI.'
                            ],
                            [
                                'title' => 'DeviceId',
                                'value' => 'The unique ID of the device that will receive the push notification.'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
  "title": "OTP",
  "content": "1234 is your OTP code.",
  "AppGuid": "53ab52gfdcc-e3bb-480d-b9ef-20d8a04d8d23",
  "ApiId": "df271070wert-3c6a-4f21-9c51-8834f41d5d4e",
  "DeviceId": "30743wedf6432f2a708ae5"
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location ' https://omni-apis.montymobile.com/notification/api/v2/Push/device' \
--header 'Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4' \
--header 'api-key: c81rfgbgff80103da721667aab62b3798d7dff2b38d25bb39c9368db8984734c443574' \
--header 'Content-Type: application/json' \
--data '{
  \"title\": \"otp\",
  \"content\": \"124 is your otp code.\",
  \"AppGuid\": \"53ab52gfdcc-e3bb-480d-b9ef-20d8a04d8d23\",
  \"ApiId\": \"df271070wert-3c6a-4f21-9c51-8834f41d5d4e\",
  \"DeviceId\": \"30743wedf6432f2a708ae5\"
}'"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Register Device',
                'slug' => 'post-register-device',
                'description' => 'This API is used to register a user\'s device with the system to enable push notifications. It registers the device details (such as the device ID, notification tokens, platform, OS version, and location) so that the device can receive push notifications for future campaigns or alerts.',
                'use_case' => 'Imagine you are developing a mobile app that sends notifications to users about updates, alerts, or special promotions. To ensure each user’s device is registered and capable of receiving push notifications, this API is used when the app is installed or when the user logs in on a new device. This helps the system recognize which devices to send notifications to.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/Subscriber/register-device',
                                'copy' => true,
                            ]
                        ]
                    ],
                    [
                        'title' => 'AUTHORIZATION',
                        'subtitle' => 'API Key',
                        'items' => [
                            [
                                'title' => 'Key',
                                'value' => 'api-key',
                            ],
                            [
                                'title' => 'Value',
                                'value' => '{{api_key}}, should be downloaded from the portal UI, push notification, fill in the info of the app, download file.',
                            ],
                        ]
                    ],
                    [
                        'title' => 'HEADERS',
                        'items' => [
                            [
                                'title' => 'Tenant',
                                'value' => '3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4',
                            ],
                            [
                                'title' => 'LanguageCode',
                                'value' => 'en',
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY',
                        'items' => [
                            [
                                'title' => 'deviceId',
                                'value' => 'A unique identifier for the device that will be registered.',
                            ],
                            [
                                'title' => 'fcmToken',
                                'value' => 'The Firebase Cloud Messaging token for OS push notifications, should be downloaded from the portal UI, push notification, fill in the info of the app, download file.'
                            ],
                            [
                                'title' => 'platformTag',
                                'value' => 'Indicates the platform type (e.g., "MOBILE_ANDROID", "MOBILE_IOS").'
                            ],

                            [
                                'title' => 'appGuid',
                                'value' => 'A unique identifier for the app instance, should be downloaded from the portal UI, push notification, fill in the info of the app, download file.'
                            ],
                            [
                                'title' => 'deviceInfo',
                                'value' => 'An object holding device-specific metadata:'
                            ],
                            [
                                'title' => 'deviceName',
                                'value' => 'Name/model of the device (e.g., "Iphone 13")'
                            ],
                            [
                                'title' => 'longitude',
                                'value' => 'Device longitude'
                            ],
                            [
                                'title' => 'latitude',
                                'value' => 'Device latitude'
                            ],
                            [
                                'title' => 'mnc',
                                'value' => 'Mobile Network Code'
                            ],
                            [
                                'title' => 'mcc',
                                'value' => 'Mobile Country Code'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
  "deviceId": "307647652f200a708ae5",
  "fcmToken": "f660cf3232234hgfttfbc-40b8-b614-b3jjge6824cf3da",
  "apnsToken": "",
  "huaweiToken": "",
  "platformTag": "MOBILE_ANDROID",
  "osTag": "ANDROID",
  "appGuid": "53ab52jhgfcc-e3bb-480d-b9ef-20d8a04d8d23",
  "Version":"1.0",
  "deviceInfo":
    {
        "deviceName": "Iphone 13",
        "longitude": 6,
        "latitude": 6,
        "mnc": 6,
        "mcc": 6
    }
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location 'https://omni-apis.montymobile.com/notification/api/v2/Subscriber/register-device' \
--header 'Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4' \
--header 'LanguageCode: en' \
--header 'Content-Type: application/json' \
--header 'api-key: 79407684ae74d5cbkjh232a0c2f5ce8915b523fbb6f739dbbecc6ab917fbfb54677' \
--data '{
  \"deviceId\": \"3076432f;lkjhp200a708ae5\",
  \"fcmToken\": \"f660cf323;lkjh2234fbc-40b8-b614-b3jjge6824cf3da\",
  \"apnsToken\": \"\",
  \"huaweiToken\": \"\",
  \"platformTag\": \"MOBILE_ANDROID\",
  \"osTag\": \"ANDROID\",
  \"appGuid\": \"53ab52cc-e3b;plokjb-480d-b9ef-20d8a04d8d23\",
  \"Version\":\"1.0\",
  \"deviceInfo\":
    {
    \"deviceName\": \"Iphone 13\",
    \"longitude\": 6,
    \"latitude\": 6,
    \"mnc\": 6,
    \"mcc\": 6
    }
}'"
                        ],

                    ]
                ]
            ];

            ?>

            <?= get_template_part('components/developers/info-blocks', null, ['data' => $data]) ?>

        </div>

    </div>
</section>
<?php get_footer(); ?>