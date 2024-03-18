<?php

if (!function_exists('get_user_role')) {
    function get_user_role($input = null)
    {
        $output = [
            ROLE_SUPER_ADMIN => __('Super Admin'),
            ROLE_ADMIN => __('Admin'),
            ROLE_USER => __('User')
        ];

        return is_null($input) ? $output : $output[$input];
    }
}

