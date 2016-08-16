<?php
/**
 * Created by PhpStorm.
 * User: xzjs
 * Date: 16/8/14
 * Time: 下午2:29
 */
$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
$msg = 'hello';
$len = strlen($msg);
socket_sendto($sock, $msg, $len, 0, '192.168.253.109', 6518);
socket_close($sock);