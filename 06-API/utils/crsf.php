<?php

if (!function_exists('create_crsf_token')) 
{
    function create_crsf_token(string $salt='')
    {
        if (!isset($_SESSION['crsf_token']))
        {
            $_SESSION['crsf_token'] = md5(uniqid().$salt);
        }
    }
}

if (!function_exists('check_crsf_token')) 
{
    function check_crsf_token(string|null $token): bool
    {
        if (isset($_SESSION['crsf_token']))
        {
            $isValid = $_SESSION['crsf_token'] === $token;
            unset($_SESSION['crsf_token']);

            return $isValid;
        }

        return false;
    }
}