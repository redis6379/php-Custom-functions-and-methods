<?php
//公共的自定义函数
    /**
     * 验证输入的手机号码是否合法
     * @param $mobile_phone 手机号
     * @return bool
     */
    function is_mobile_phone($mobile_phone)
    {
        $chars = "/^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|18[0-9]{1}[0-9]{8}$|17[0-9]{1}[0-9]{8}$/";
        if (preg_match($chars, $mobile_phone)) {
            return true;
        }
        return false;
    }

    /**
     * 验证输入的邮件地址是否合法
     * @param $user_email 邮箱
     * @return bool
     */
    function is_email($user_email)
    {
        $chars = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
        if (strpos($user_email, '@') !== false && strpos($user_email, '.') !== false) {
            if (preg_match($chars, $user_email)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * 随机字符串
     * @param $length
     * @return string|null
     * $length 位数16,32,64多少位的随机字符串
     */
    function getRandChar($length)
    {
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol) - 1;

        for ($i = 0;
             $i < $length;
             $i++) {
            $str .= $strPol[rand(0, $max)];
        }

        return $str;
    }


    /***
     * 对象转数组
     * @param $object
     * @return array
     */
    function object2array($object)
    {
        $array = array();
        if (is_object($object)) {
            foreach ($object as $key => $value) {
                $array[$key] = $value;
            }
        } else {
            $array = $object;
        }
        return $array;
    }
