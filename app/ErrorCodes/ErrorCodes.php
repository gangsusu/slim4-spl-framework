<?php

namespace App\ErrorCodes;

class ErrorCodes
{
    const SUCCESS = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NO_CONTENT = 204;
    const NO_MODIFIED = 304;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const GONE = 410;
    const UNSUPPORTED = 415;
    const UNPROCESSABLE_ENTITY = 422;
    const TOO_MANY_REQUEST = 429;
    const ERROR = 500;
    const RESUBMIT = 600;
    const CODE_EXPIRED = 601;
    const VALIDATION_ERROR = 602;
    const NOT_SUPPORT_AREA = 603;
    const NOT_SUPPORT_PAY = 604;
    const NOT_PARAMS_ERROR = 605;

    public static $codeMsg = [
        self::SUCCESS => '操作成功',
        self::CREATED => '对创建新资源的 POST 操作进行响应。应该带着指向新资源地址的 Location 头,新资源已经被创建 ',
        self::ACCEPTED => '服务器接受了请求，但是还未处理，响应中应该包含相应的指示信息，告诉客户端该去哪里查询关于本次请求的信息',
        self::NO_CONTENT => '对不会返回响应体的成功请求进行响应（比如 DELETE 请求）,资源删除成功',
        self::NO_MODIFIED => 'HTTP缓存header生效的时候用',
        self::BAD_REQUEST => '请求异常，比如请求中的body无法解析',
        self::UNAUTHORIZED => '请先登录',
        self::FORBIDDEN => '服务器已经理解请求，但是拒绝执行它',
        self::NOT_FOUND => '请求一个不存在的资源',
        self::METHOD_NOT_ALLOWED => '所请求的 HTTP 方法不允许当前认证用户访问',
        self::GONE => '表示当前请求的资源不再可用。当调用老版本 API 的时候很有用',
        self::UNSUPPORTED => ' 如果请求中的内容类型是错误的',
        self::UNPROCESSABLE_ENTITY => '用来表示校验错误',
        self::TOO_MANY_REQUEST => '由于请求频次达到上限而被拒绝访问',
        self::ERROR => '服务端错误',
        self::RESUBMIT => '重复提交',
        self::CODE_EXPIRED => '手机验证码已过期',
        self::VALIDATION_ERROR => '手机验证码错误',
        self::NOT_SUPPORT_AREA => '暂时不支持此区域',
        self::NOT_SUPPORT_PAY => '暂时这种方式不支持',
        self::NOT_PARAMS_ERROR => '参数错误，请检查！',
    ];
}