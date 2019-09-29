<?php

namespace App\Models\Enum;
class UserEnum
{
    const deleted = -1;
    const normal = 0;
    const freeze = 1;

    public static function getStatusName($status)
    {
        switch ($status) {
            case self::deleted:
                return '已删除';
            case self::normal:
                return '正常';
            case self::freeze:
                return '已冻结';
        }
    }
}