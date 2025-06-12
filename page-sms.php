<?php get_header(); ?>
<?= get_template_part('components/developers/top'); ?>
<section class="bg-white pb-5">
    <div class="dev-content-wrapper">
        <div class="">
            <?= get_template_part("components/developers/sidemenu"); ?>
        </div>
        <div class="">
            <div class="white-block">
                <h3>I. SMS API Integration Example</h3>
            </div>
            <?php

            $data = [];
            $data[] = [
                'title' => '<span>POST</span> Send Campaign',
                'slug' => 'post-send-campaign',
                'description' => 'This API is used to create and send an SMS campaign using a file that contains a list of recipients. The file can include destination numbers, and the campaign details (like message content, sender ID, etc.) are defined within the request. It’s an essential tool for marketers to reach a large audience with personalized content.',
                'use_case' => 'Imagine you are running a holiday sale for an e-commerce store, and you have a list of customers segmented by region. By using this API, you can upload a file with all the customer numbers and send a campaign promoting your sale to thousands of users in just a few clicks. The message can be tailored to include variables (such as names or regions), making it more personal and engaging for each recipient.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omniapis.montymobile.com/notification/api/apikey/v2/SMSCampaignApi/campaign-file',
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
                                'value' => '98df9ffe-fa84-41ee-9293-33614722d952',
                            ]
                        ]
                    ],
                    [
                        'title' => 'BODY',
                        'items' => [
                            [
                                'title' => 'File',
                                'value' => 'Upload the file containing the list of destination numbers.',
                            ],
                            [
                                'title' => 'countryCode',
                                'value' => 'The country code of the recipients.'
                            ],
                            [
                                'title' => 'Campaign',
                                'value' => 'JSON object containing the campaign details (name, message content, sender ID, etc.).'
                            ],
                            [
                                'title' => 'LongUrlFromFile',
                                'value' => 'Boolean to indicate whether long URLs are provided in the file.'
                            ],

                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
    “file”: “/C:/Users/xxx/Downloads/SampleDestinations.xlsx”,
    “countryCode”: “961”,
    “Campaign”: {
        “Name”: “test campaign”,
        “Content”: “test message”,
        “SenderId”: “43ac6548-f7d6-4570-a714-25f96f4197e4”,
        “HasShortUrl”: false,
        “Variables”: [],
        “HasBlacklistShortUrl”: false
    },
    “LongUrlFromFile”: true
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'title' => 'Send Campaign',
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl —location 'https://omni-apis.montymobile.com/notification/api/apikey/v2/SMSCampaignApi/campaign-file' \
—header 'Tenant: 98df9ffe-fa84-41ee-9293-33614722d952' \
—form 'file=@“/C:/Users/naim.jaber/Downloads/SampleDestinationsWithHeaders.bb73721b (7) 4.xlsx”' \
—form 'countryCode=“961”' \
—form 'Campaign=“{
    \”Name\”: \”test campaign\”,
    \”Content\”: \”test message \”,
    \”SenderId\”: \”43ac6548-f7d6-4570-a714-25f96f4197e4\”,
    \”HasShortUrl\”: false,
    \”Variables\”: [],
    \”HasBlacklistShortUrl\”: false
}”’"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>PUT</span> Launch Campaign',
                'slug' => 'put-launch-campaign',
                'description' => 'This API allows you to launch an already created SMS campaign. It activates the campaign, starting the process of sending the SMS messages to the recipients listed in the uploaded file.',
                'use_case' => 'After creating a campaign using the Send Campaign API, you might want to schedule its launch. For instance, if you’ve prepared a campaign for a Black Friday sale, you can trigger it to launch at midnight on the sale day. By using the Launch Campaign API, you ensure that your messages reach customers exactly when you want them to.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omniapis.montymobile.com/notification/api/apikey/v2/SMSCampaignApi/campaign-file',
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
                                'value' => 'The unique identifier of the campaign you wish to launch.',
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
    "CampaignId": "4c19d462-543f-4a1a-8e2a-6db6bbf1d97a"
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'title' => 'Launch Campaign',
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl —location —request PUT ‘https://omni-apis.montymobile.com/notification/api/apikey/v2/SMSCampaignApi/campaign-launch’ \
—header ‘Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4’ \
—data ‘{
    “CampaignId”:”4c19d462-543f-4a1a-8e2a-6db6bbf1d97a”
}’"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>GET</span> Send SMS',
                'slug' => 'get-send-sms',
                'description' => 'This API allows you to send a single SMS to a recipient by providing the destination number, source (sender ID), and the message. It is used for sending quick, direct messages.',
                'use_case' => 'Imagine you’re running a utility company and need to send a reminder to customers about an upcoming payment deadline. By using this API, you can send a personalized message to each customer, such as: “Your payment for this month is due on the 15th. Please contact us if you have any questions.” This is an ideal use case for sending important notifications that require immediate attention.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/sms/send-sms?Destination=96171454548&Source=1234&Message=Hello World&ApiId=56c15726-c7c4-4549-a9b7-b0e76a246abe',
                                'copy' => true,
                                'code_block' => '
Generated from cURL: curl -X GET “https://mm-omni-api-software-qa.montylocal.net/notification
/api/v2/api/send-sms?Destination=96171454548&Source=1234&Message=testmessage&ApiId=56c15726-c7c4-4549-a9b7-b0e76a246abe”
-H “Tenant:3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4”
-H “api-key:b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a”'
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
                            [
                                'title' => 'api-key',
                                'value' => 'b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a'
                            ]
                        ]
                    ],
                    [
                        'title' => 'PARAMS',
                        'items' => [
                            [
                                'title' => 'Destination',
                                'value' => '96171454548',
                            ],
                            [
                                'title' => 'Source',
                                'value' => '1234'
                            ],
                            [
                                'title' => 'Message',
                                'value' => 'Hello World'
                            ],

                            [
                                'title' => 'ApiId',
                                'value' => '56c15726-c7c4-4549-a9b7-b0e76a246abe'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
    “CampaignId”: “4c19d462-543f-4a1a-8e2a-6db6bbf1d97a”
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'title' => 'Send SMS',
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl —location ‘https://omni-apis.montymobile.com/notification/api/v2/sms/
send-sms?Destination=96171454548&Source=1234&Message=Hello%20World&ApiId=56c15726-c7c4-4549-a9b7-b0e76a246abe’ \
—header ‘Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4’ \
—header ‘api-key: b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a’ \
—data ‘’"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send SMS',
                'slug' => 'post-send-sms',
                'description' => 'Similar to the GET method, this API also allows sending a single SMS, but it uses a POST request. It sends the SMS to a specified destination with a source and message.',
                'use_case' => 'You’re a customer support platform, and you need to send order confirmation or support ticket updates to users. By using this API, you can send a confirmation message like “Your order has been confirmed! Thank you for shopping with us.” or “Your support ticket is now being processed. We will update you shortly.”',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/sms/send-sms',
                                'copy' => true,
                                'code_block' => '
Generated from cURL: curl -X GET “https://mm-omni-api-software-qa.montylocal.net/
notification/api/v2/api/send-sms?Destination=96171454548&
Source=1234&Message=testmessage&ApiId=56c15726-c7c4-4549-a9b7-b0e76a246abe”
-H “Tenant:3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4”
-H “api-key:b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a”'
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
                                'title' => 'Source',
                                'value' => 'Sender ID used for sending SMS message',
                            ],
                            [
                                'title' => 'Message',
                                'value' => 'Content of the SMS message'
                            ],
                            [
                                'title' => 'Destination',
                                'value' => 'The number of recipients'
                            ],

                            [
                                'title' => 'API_ID',
                                'value' => 'static ID value'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
  "Source": "1234",
  "Message": "test message",
  "Destination": "96170168509",
  "ApiId": "80f8c779-5f03-45bd-8a28-cb730937671d"
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'title' => 'Send SMS Unauthorized',
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl —location ‘https://omni-apis.montymobile.com/notification/api/v2/sms/send-sms’ \
—header ‘Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4’ \
—header ‘api-key: b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a’ \
—data ‘{
    “Destination”:”96171454847”,
    “Source”:”123”,
    “Message”:”hello world”,
    “ApiId”:”56c15726-c7c4-4549-a9b7-b0e76a246abe”
}’"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send OTP (One-Time Password) via SMS',
                'slug' => 'post-send-otp',
                'description' => 'This API is used to send a one-time password (OTP) via SMS. It is commonly used for two-factor authentication (2FA), identity verification, and secure login processes.',
                'use_case' => 'You are building an online banking application, and customers need to verify their identity to log in securely. Using this API, you can send a one-time password to the user’s registered phone number, ensuring secure authentication for sensitive transactions.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/sms/send-otp',
                                'copy' => true,
                                'code_block' => '
Generated from cURL: curl -X GET “https://mm-omni-api-software-qa.montylocal.net/
notification/api/v2/api/send-sms?Destination=96171454548
&Source=1234&Message=testmessage&ApiId=56c15726-c7c4-4549-a9b7-b0e76a246abe”
-H “Tenant:3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4”
-H “api-key:b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a”'
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
                            [
                                'title' => 'api-key',
                                'value' => 'b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a',
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
    “Destination”:”96171454847”,
    “Source”:”1234”,
    “Message”:”Hello World”,
    “ApiId”:”56c15726-c7c4-4549-a9b7-b0e76a246abe”
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'title' => 'Send OTP',
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl —location ‘https://omni-apis.montymobile.com/notification/api/v2/sms/send-otp’ \
—header ‘Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4’ \
—header ‘api-key: b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a’ \
—data ‘{
    “Destination”:”96171454847”,
    “Source”:”123”,
    “Message”:”hello world”,
    “ApiId”:”56c15726-c7c4-4549-a9b7-b0e76a246abe”
}’"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send Bulk SMS',
                'slug' => 'post-send-bulk-sms',
                'description' => 'This API allows you to send bulk SMS messages to multiple recipients. It is particularly useful for marketing campaigns, alerts, and notifications where you need to reach a large audience simultaneously. With this API, you can specify the sender ID, message content, and a list of destination phone numbers.',
                'use_case' => 'Imagine you are managing a marketing campaign for a retail store that’s offering a limited-time sale. You can use the Send Bulk SMS API to notify thousands of customers simultaneously about the sale. By providing the source (sender ID) and the message content, you can send personalized promotions directly to the users’ phones. This API ensures that your message reaches all recipients in a timely manner, making it perfect for large-scale campaigns.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/sms/send-bulk-sms',
                                'copy' => true,
                                'code_block' => '
Generated from cURL: curl -X POST 
“https://mm-omni-api-software-qa.montylocal.net/notification/api/v2/api/send-bulk-sms” -H 
“Tenant:3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4” -H “api-key:b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a” 
-H “Content-Type: application/json” -d ‘
{ “Source”:”1234”, “Message”: “test message”, “Destination” : [“96174548474”], “ApiId”: “a911d636-a380-438f-9fe0-f3407004418d” }’'
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
                                'title' => 'Source',
                                'value' => 'Sender ID used for sending SMS message',
                            ],
                            [
                                'title' => 'Message',
                                'value' => 'Content of the SMS message',
                            ],
                            [
                                'title' => 'Destination',
                                'value' => 'The number of recipients',
                            ],
                            [
                                'title' => 'API_ID',
                                'value' => 'static ID value',
                            ],

                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
  "Source": "1234",
  "Message": "test message",
  "Destination": [
    "{Destination}"
  ],
  "ApiId": "030f1a3c-ad8c-485f-970f-2c4ca9800437"
}
'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'title' => 'Send Bulk Invalid Sender',
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl —location ‘https://omni-apis.montymobile.com/notification/api/v2/sms/send-bulk-sms’ \
—header ‘Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4’ \
—header ‘api-key: b911d60d9d3417df636ecf8b2af869df61f154d3cff670b7c6ebb212741a9f2a’ \
—header ‘Content-Type: application/json’ \
—data ‘{
    “Source”:”1234”,
    “Message”: “hello world”,
    “Destination” : [“96174548474”],
    “ApiId”: “a911d636-a380-438f-9fe0-f3407004418d”
}’"
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