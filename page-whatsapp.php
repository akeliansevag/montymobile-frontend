<?php get_header(); ?>
<?= get_template_part('components/developers/top'); ?>
<section class="bg-white pb-5">
    <div class="dev-content-wrapper">
        <div class="">
            <?= get_template_part("components/developers/sidemenu"); ?>
        </div>
        <div class="">
            <div class="white-block">
                <h3>I. WhatsApp API Integration Example</h3>
            </div>
            <?php

            $data = [];
            $data[] = [
                'title' => '<span>POST</span> Send WhatsApp Campaign',
                'slug' => 'post-send-campaign',
                'description' => 'This API is used to create and send a WhatsApp campaign by uploading a file containing the list of recipients. The campaign details such as sender ID and template ID are also included in the request, allowing businesses to send WhatsApp messages in bulk using a predefined template.',
                'use_case' => 'Imagine you\'re running a customer engagement campaign for a product launch. By using this API, you can upload a file with all your customer contacts and send a personalized message to them using a predefined WhatsApp template. This is perfect for businesses that need to reach a large audience quickly and efficiently, while still maintaining personalized communication.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/apikey/v2/WhatsappCampaignApi/campaign-file',
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
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => '
curl --location \'https://omni-apis.montymobile.com/notification/api/apikey/v2/WhatsappCampaignApi/campaign-file\' \
--header \'Tenant: 98df9ffe-fa84-41ee-9293-33614722d952\' \
--form \'file=@"/C:/Users/naim.jaber/Downloads/Export_Whatsapp_Template (1).csv"\' \
--form \'countryCode="961"\' \
--form \'Campaign="{
  \"Name\": \"test campaign\",
  \"SenderId\": \"7080303b-8261-49e1-b0f5-18469a3df2af\",
  \"TemplateId\": \"1dddcd26-3084-474e-95ce-bbfd1ea635c4\"
}"'
                        ],

                    ],
                ]
            ];


            $data[] = [
                'title' => '<span>PUT</span> Launch WhatsApp Campaign',
                'slug' => 'put-launch-campaign',
                'description' => 'This API allows you to launch an already created WhatsApp campaign. After creating the campaign using the Send Campaign API, you can use this API to trigger the campaign to begin sending messages to the recipients.',
                'use_case' => 'Let’s say you’ve prepared a WhatsApp campaign for an upcoming flash sale. You can schedule the launch using this API, ensuring that your WhatsApp messages are sent out at the right time to all your customers. This API is useful for businesses that want to control the timing of their campaigns to maximize engagement.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/apikey/v2/WhatsappCampaignApi/campaign-launch',
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
    "CampaignId": " 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4"
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location --request PUT 'https://omni-apis.montymobile.com/notification/api/apikey/v2/WhatsappCampaignApi/campaign-launch' \
--header 'Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4' \
--data '{
    \"CampaignId\":\"4c19d462-543f-4a1a-8e2a-6db6bbf1d97a\"
}'"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send OTP via WhatsApp',
                'slug' => 'post-send-otp',
                'description' => 'This API allows you to send a One-Time Password (OTP) to a user\'s WhatsApp account using a predefined message template. It is ideal for scenarios where a business needs to verify a user\'s identity, such as during account sign-up, password reset, or two-factor authentication.',
                'use_case' => "Imagine you're managing a financial services app, and users need to verify their phone number for account security. By using this API, you can send an OTP to the user's WhatsApp, ensuring secure and verified transactions. This API is a perfect solution for scenarios that require identity verification or transaction authorization, leveraging the convenience and security of WhatsApp.",
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/Whatsapp/send-whatsapp',
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
                                'title' => 'Destination',
                                'value' => 'The phone number of the recipient in international format. Example: "+961XXXXXXXX"',
                            ],
                            [
                                'title' => 'Source',
                                'value' => 'The sender’s phone number or messaging ID (e.g., WhatsApp Business number).'
                            ],
                            [
                                'title' => 'ApiId',
                                'value' => 'Your API key or authentication ID used to verify the request.'
                            ],

                            [
                                'title' => 'TemplateId',
                                'value' => 'The unique identifier of the pre-approved message template to be used in the campaign.'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
  "Destination": "96170168509",
  "Source": "1234",
  "ApiId": "0a03d595-b35b-4c99-b420-fba157299da6",
  "Link": "",
  "HeaderVariable": "",
  "BodyVariable": "",
  "TemplateId": "c0053db3-de25-44d2-8f8c-c28ae17b1b8a"
}'
                        ],

                    ],
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send WhatsApp Message (Without variables)',
                'slug' => 'post-send-message-no-variables',
                'description' => 'This API allows you to send a personalized WhatsApp message to a recipient using a predefined template. It includes variables such as the destination number, message content, and the template ID to tailor the communication for each recipient.',
                'use_case' => 'Imagine you\'re running a customer service platform and need to send order confirmations or notifications to users. Using this API, you can send a WhatsApp message confirming the user’s order, complete with personalized details like order ID or customer name. This API is particularly useful for businesses that require automated, yet personalized, communications with their customers via WhatsApp.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/Whatsapp/send-whatsapp',
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
                                'title' => 'Destination',
                                'value' => 'The phone number of the recipient in international format. Example: "+961XXXXXXXX"',
                            ],
                            [
                                'title' => 'Source',
                                'value' => 'The sender’s phone number or messaging ID (e.g., WhatsApp Business number).'
                            ],
                            [
                                'title' => 'ApiId',
                                'value' => 'Your API key or authentication ID used to verify the request.'
                            ],

                            [
                                'title' => 'TemplateId',
                                'value' => 'The unique identifier of the pre-approved message template to be used in the campaign.'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
    "Destination": "<RECIPIENT_PHONE_NUMBER>",
    "Source": "<SENDER_PHONE_NUMBER>",
    "ApiId": "<YOUR_API_ID>",
    "TemplateId": "<TEMPLATE_ID>"
  }'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location 'https://omni-apis.montymobile.com/notification/api/v2/Whatsapp/send-whatsapp' \
  --header 'Tenant: <TENANT_ID>' \
  --header 'api-key: <API_KEY>' \
  --header 'Content-Type: application/json' \
  --data '{
    \"Destination\": \"<RECIPIENT_PHONE_NUMBER>\",
    \"Source\": \"<SENDER_PHONE_NUMBER>\",
    \"ApiId\": \"<YOUR_API_ID>\",
    \"TemplateId\": \"<TEMPLATE_ID>\"
  }'"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send WhatsApp Message (Media in header and variables in body)',
                'slug' => 'post-send-message-media-variables',
                'description' => 'This API allows you to send a personalized WhatsApp message to a recipient using a predefined template. It includes variables such as the destination number, message content, and the template ID to tailor the communication for each recipient.',
                'use_case' => 'Imagine you\'re running a customer service platform and need to send order confirmations or notifications to users. Using this API, you can send a WhatsApp message confirming the user’s order, complete with personalized details like order ID or customer name. This API is particularly useful for businesses that require automated, yet personalized, communications with their customers via WhatsApp.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/Whatsapp/send-whatsapp',
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
                                'title' => 'Destination',
                                'value' => 'The phone number of the recipient in international format. Example: "+961XXXXXXXX"',
                            ],
                            [
                                'title' => 'Source',
                                'value' => 'The sender’s phone number or messaging ID (e.g., WhatsApp Business number).'
                            ],
                            [
                                'title' => 'ApiId',
                                'value' => 'Your API key or authentication ID used to verify the request.'
                            ],

                            [
                                'title' => 'TemplateId',
                                'value' => 'The unique identifier of the pre-approved message template to be used in the campaign.'
                            ],
                            [
                                'title' => 'Link',
                                'value' => 'The URL of the image, file, or media to be attached with the message (if applicable).'
                            ],
                            [
                                'title' => 'BodyVariable:',
                                'value' => 'A dynamic variable that will be inserted into the template message body (e.g., user name, date, etc.).'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
    "Destination": "<RECIPIENT_PHONE_NUMBER>",
    "Source": "<SENDER_PHONE_NUMBER>",
    "ApiId": "<YOUR_API_ID>",
    "TemplateId": "<TEMPLATE_ID>",
    "Link": "<MEDIA_LINK", 
    "BodyVariable": "<BODY_VAR>",
  }'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location 'https://omni-apis.montymobile.com/notification/api/v2/Whatsapp/send-whatsapp' \
  --header 'Tenant: <TENANT_ID>' \
  --header 'api-key: <API_KEY>' \
  --header 'Content-Type: application/json' \
  --data '{
    \"Destination\": \"<RECIPIENT_PHONE_NUMBER>\",
    \"Source\": \"<SENDER_PHONE_NUMBER>\",
    \"ApiId\": \"<YOUR_API_ID>\",
    \"Link\": \"<MEDIA_LINK>\", 
    \"BodyVariable\": \"<VARIABLE_VALUE\",
    \"TemplateId\": \"<TEMPLATE_ID>\"
  }'"
                        ],

                    ]
                ]
            ];


            $data[] = [
                'title' => '<span>POST</span> Send Bulk WhatsApp',
                'slug' => 'post-send-bulk',
                'description' => 'This API allows you to send WhatsApp messages in bulk to multiple recipients using a predefined template. It is ideal for large-scale marketing campaigns, customer notifications, or other bulk communications where you need to send the same message to many recipients, with or without slight personalization using variables.',
                'use_case' => 'Imagine you are running an e-commerce platform and want to inform all your customers about a special promotional sale. By using the Send Bulk WhatsApp API, you can send the same promotional message to thousands of customers, leveraging the WhatsApp platform for direct communication. The predefined template can include dynamic variables like customer names or product categories, making the message more personalized while maintaining the bulk messaging feature.',
                'info' => [
                    [
                        'title' => 'API DETAILS',
                        'items' => [
                            [
                                'title' => 'Endpoint',
                                'value' => 'https://omni-apis.montymobile.com/notification/api/v2/Whatsapp/send-bulk-whatsapp',
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
                                'title' => 'Source',
                                'value' => 'The sender’s phone number or messaging ID (e.g., WhatsApp Business number).',
                            ],
                            [
                                'title' => 'ApiId',
                                'value' => 'Your API key or authentication ID used to verify the request.'
                            ],
                            [
                                'title' => 'TemplateId',
                                'value' => 'The unique identifier of the pre-approved message template to be used in the campaign.'
                            ],

                            [
                                'title' => 'whatsappRequests',
                                'value' => 'list of clients having the following:'
                            ],
                            [
                                'title' => 'Destination',
                                'value' => 'The phone number of the recipient in international format. Example: "+961XXXXXXXX"'
                            ],
                            [
                                'title' => 'Link',
                                'value' => 'The URL of the image, file, or media to be attached with the message (if applicable).'
                            ],
                            [
                                'title' => 'FileName',
                                'value' => 'The name of the header file in case the template has a file-type header (e.g., "invoice.pdf").'
                            ],
                            [
                                'title' => 'HeaderVariable',
                                'value' => 'The dynamic text variable used in the header if the template has a text-type header (e.g., "Hi Raed!").'
                            ],
                            [
                                'title' => 'BodyVariable',
                                'value' => 'A dynamic variable that will be inserted into the template message body (e.g., user name, date, etc.).'
                            ],
                        ]
                    ],
                    [
                        'title' => 'BODY EXAMPLE',
                        'code_block' => [
                            'inner_title' => 'json',
                            'code' => '
{
   "Source": "<SENDER_PHONE_NUMBER>",
    "ApiId": "<YOUR_API_ID>",
    "TemplateId": "<TEMPLATE_ID>",
    “whatsappRequests”: [
        "Destination": "<RECIPIENT_PHONE_NUMBER>",
        "Link": "<MEDIA_LINK", 
        “FileName”: ”<MEDIA_NAME>”,
        "HeaderVariable": "<HEADER_VAR>",
        "BodyVariable": ["<BODY_VAR>"]
   ]
}'
                        ],

                    ],
                    [
                        'title' => 'EXAMPLE REQUEST',
                        'code_block' => [
                            'inner_title' => 'curl',
                            'dark' => true,
                            'code' => "
curl --location 'https://omni-apis.montymobile.com/notification/api/v2/Whatsapp/send-bulk-whatsapp' \
--header 'Tenant: 3d936a5d-1d56-450b-a04c-f1a7b5c2d5d4' \
--header 'api-key: 68da964bc9a0134abffc4688b784782352fc4162ae4fd6ec533589db78326bda' \
--header 'Content-Type: application/json' \
--data '{
  \"TemplateId\": \"26c943cf-c2a1-4ef7-ab96-7329c17fc137\",
  \"Source\": \"1234\",
  \"ApiId\": \"fe662d53-ab1c-41c6-b50f-2d3936f68981\",
  \"whatsappRequests\": [
    {
      \"Destination\": \"96174787848\",
      \"Link\": \"\",
      \"FileName\": \"\",
      \"HeaderVariable\": \"\",
      \"BodyVariable\": [
        \"body1\"

      ]
      
    }
  ]
}'
"
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