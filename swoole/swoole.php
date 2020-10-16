<?php

class Server
{

    function onReceive($serv, $fd, $from_id, $data)
    {
        $result = $serv->taskwait($data);
        if ($result) {
            $serv->send($fd, '结果');
        }
    }

    function onTask($serv, $task_id, $from_id, $data)
    {
        var_dump($data);
        $serv->finish("ok");
    }

    function onFinish($serv, $task_id, $data)
    {
        echo '完成';
    }

    function run()
    {
        $serv = new swoole_server('0,0,0,0', 80);
        $serv->set(array(
            'worker_num' => 10,
            'task_worker_num' => 10
        ));
        $serv->on('receive', 'onReceive');
        $serv->on('task', 'onTask');
        $serv->on('finish', 'onFinish');
        $serv->start();
    }

}

class Client
{
    public function run()
    {
        $client = new swoole_client('SWOOLE_SOCK_TCP');
        $client->connect('0,0,0,0', 80, 10) or die ("连接失败");
        while (true) {
            echo '请输入';
            $data = trim(fgets(STDIN));
            $client->send($data);
            $recv = $client->recv();
            var_dump($recv);
        }
        $client->close();
    }

}
