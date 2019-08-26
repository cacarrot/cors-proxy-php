<?php
class Slack
{
    public static function post($message)
    {
        $webhook_url = getenv("SLACK_WEBHOOK_URL");
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => json_encode($message),
            )
        );
        $response = file_get_contents($webhook_url, false, stream_context_create($options));
        return $response;
    }
}
