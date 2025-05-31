$username = $TGUser['first_name'] ?? 'Friend';
$webAppUrl = "https://adsweb.hstn.me/?Id={$chatId}";

$inlineKeyboard = [
    'inline_keyboard' => [
        [
            [
                'text' => '🚀 Start Watching Ads',
                'web_app' => ['url' => $webAppUrl]
            ]
        ],
        [
            [
                'text' => '📢 Join Community',
                'url' => 'https://t.me/crazydeveloperbdg'
            ]
        ]
    ]
];

$message = "<b>👋 Hey $username!</b>\n\n" .
    "📺 <i>Welcome to</i> <b>AdEarn</b> – <u>Watch ads & get paid instantly!</u>\n\n" .
    "💰 <b>What you get:</b>\n" .
    "• 💸 Earn real rewards from 10s ad views\n" .
    "• ⚡ Instant credit updates\n" .
    "• 🤝 Referral bonuses\n\n" .
    "<u>🎯 Your time = Your money</u>\n\n" .
    "👉 <i>Tap the button below to launch the earning dashboard!</i>\n\n" .
    "💡 If the button doesn’t work, <a href=\"$webAppUrl\">click here</a>\n\n" .
    "<i>👨‍💻 Powered by</i> <b>@crazycoderbd007</b>";

BotAPI::sendMessage([
    'chat_id' => $chatId,
    'text' => $message,
    'parse_mode' => 'HTML',
    'reply_markup' => json_encode($inlineKeyboard)
]);
