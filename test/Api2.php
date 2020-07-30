<?php
/**
 * @title 用户相关
 * Class Api
 */
class Api2
{
    /**
     * @title 获取用户信息
     * @url https://wwww.baidu.com/getuserinfo
     * @method GET
     * @param int uid 用户ID 0 必须
     * @param string token 令牌 空 必须
     * @code 1 成功
     * @code 2 失败
     * @return int code 状态码（具体参见状态码说明）
     * @return string msg 提示信息
     */
    public function getUserInfo() {
        return json_encode(['code' => 1, 'msg' => '获取信息成功', 'data' => ['uid' => 1, 'username' => 'admin']]);
    }
}