<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 16/8/18
 * Time: 上午11:10
 */
function my_read_file($name)
{
    $handle = fopen($name, 'r');
    $contents = fread($handle, filesize($name));
    fclose($handle);
    return json_decode($contents);
}

$data = my_read_file("data.txt");
//$cars = array('FC001', 'FC002', 'FC003', 'FC004', 'FC005');
$car = $argv[1];
set_time_limit(0);

$host = "119.29.223.125";
$port = 8282;
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create  socket\n");

$connection = socket_connect($socket, $host, $port) or die("Could not connet server\n");

foreach ($data as $item) {
    $temp = array(array($car, $item[2], $item[3], $item[4], $item[5], $item[6]));
    $t = json_encode($temp);
    socket_write($socket, $t) or die("Write failed\n");
    sleep(1);
}
socket_close($socket);
