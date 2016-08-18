<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * 用于检测业务代码死循环或者长时间阻塞等问题
 * 如果发现业务卡死，可以将下面declare打开（去掉//注释），并执行php start.php reload
 * 然后观察一段时间workerman.log看是否有process_timeout异常
 */
//declare(ticks=1);

use \GatewayWorker\Lib\Gateway;
use \GatewayWorker\Lib\Db;

/**
 * 主逻辑
 * 主要是处理 onConnect onMessage onClose 三个方法
 * onConnect 和 onClose 如果不需要可以不用实现并删除
 */
class Events
{
    /**
     * 当客户端连接时触发
     * 如果业务不需此回调可以删除onConnect
     *
     * @param int $client_id 连接id
     */
    public static function onConnect($client_id)
    {
        // 向当前client_id发送数据 
        Gateway::sendToClient($client_id, "TCP连接成功,开始接受数据");
        // 向所有人发送
        //Gateway::sendToAll("$client_id login");
    }

    /**
     * 当客户端发来消息时触发
     * @param int $client_id 连接id
     * @param mixed $message 具体消息
     */
    public static function onMessage($client_id, $message)
    {
        $db1 = Db::instance('db1');
        // 向所有人发送 
        //Gateway::sendToAll("$client_id said $message");
        $m = json_decode($message);
        foreach ($m as $item) {
            $array = array(
                'ak' => 'ABMyPFHzCuKItIEoAG2FZjtt',
                'service_id' => '112988',
                'latitude' => $item[4],
                'longitude' => $item[3],
                'coord_type' => 1,
                'loc_time' => time(),
                'entity_name' => $item[0]
            );
            $options = array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $array,
            );

            $url="http://api.map.baidu.com/trace/v2/track/addpoint";
            $ch = curl_init($url);
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            curl_close($ch);
            $result = json_decode($result, true);
            if ($result['status'] != 0) {
                print_r($result);
            }
            $db1 = Db::instance('db1');
            $insert_id = $db1->insert('gps')->cols(array('vtx_id' => $item[0], 'no' => $item[1],'time'=>$item[2],'lon'=>$item[3],'lat'=>$item[4],'angel'=>$item[5]))->query();
            if(!$insert_id){
                echo 'error';
            }
        }
    }

    /**
     * 当用户断开连接时触发
     * @param int $client_id 连接id
     */
    public static function onClose($client_id)
    {
        // 向所有人发送
        GateWay::sendToAll("$client_id logout");
    }
}
