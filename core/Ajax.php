<?php

namespace core;

class Ajax
{
    public static function handle(string $url): bool
    {
        $method = $url;
        $token = $_ENV['BALCONY_TOKEN'];
        $chatId = $_ENV['BALCONY_CHANAL_ID'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $phone = htmlspecialchars($_POST['phone']);

            $text = "Новое сообщение с сайта:\n\n";
            $text .= "Имя: $name\n";
            $text .= "тел: $phone\n";
            $text .= "перезвоните мне по ремонту балконов ";

            $url = "https://api.telegram.org/bot{$token}/sendMessage";
            $data = [
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'HTML'
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Только для тестирования!

            $response = curl_exec($ch);
            curl_close($ch);

            $responseData = json_decode($response, true);
            if ($responseData['ok']) {
                echo "Сообщение отправлено!";
            } else {
                echo "Ошибка: " . $responseData['description'];
            }
        }
        return true;
    }
}