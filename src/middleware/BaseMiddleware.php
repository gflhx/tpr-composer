<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2017/4/24 13:58
 */
namespace axios\tpr\middleware;

use axios\tpr\service\GlobalService;

class BaseMiddleware {
    protected $param ;

    protected $method ;

    protected $identify ;

    protected $response = [];

    function __construct()
    {
        $this->param = GlobalService::get('param');
        $this->method= GlobalService::get('method');
        $this->identify = GlobalService::get('identify');
        $this->response = GlobalService::get('req');
    }

    protected function get($name='param'){
        return GlobalService::get($name);
    }
}