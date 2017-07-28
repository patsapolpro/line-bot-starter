<?php
$access_token = 'NDEUxN2cA7G211MLwrhdnR2MvK8hvIYkrzKK6DpoaCcTLZRi0TU/Q9ibDuCQhQ39vstsHh1zyaw5R67izZl2/2hypTZAHJ+xTqWF+/zJAKOLpnzaUJ7yPuVuIZLvENKxl29emIhX6bYAYQCbYv8jPQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>