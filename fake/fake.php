<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 16/8/18
 * Time: 上午10:17
 */

/**
 * 发送get请求
 * @param $url
 * @return mixed
 */
function send_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

/**
 * 发送post请求
 * @param $url
 * @param $data
 * @return mixed
 */
function send_post($url, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$url = "http://localhost/pingfen/public/match/start/";
for ($i = 1; $i < 6; $i++) {
    $result = send_get($url . $i);
}

$url = "http://localhost/pingfen/public/exam";
for ($i = 1; $i < 47; $i++) {
    $car_id = rand(1, 5);
    $data = array("mission_id" => $i, "car_id" => $car_id);
    $result = send_post($url, $data);
    echo $result;
    sleep(10);
}

$url=$url = "http://localhost/pingfen/public/match/end/";
for ($i = 1; $i < 6; $i++) {
    $result = send_get($url . $i);
}

