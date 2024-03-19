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

if (!function_exists('random_string')) {

    /**
     * @throws Exception
     */
    function random_string($length = 10, $characters = null): string
    {
        if ($characters === null) {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        }
        $output = '';
        for ($i = 0; $i < $length; $i++) {
            $y = random_int(0, strlen($characters) - 1);
            $output .= $characters[$y];
        }
        return $output;
    }
}

if (!function_exists('valid_image')) {
    function valid_image($imagePath, $image): bool
    {
        $extension = explode('.', $image);
        $isExtensionAvailable = in_array(end($extension), config('commonconfig.image_extensions'), true);

        return $isExtensionAvailable && file_exists(public_path($imagePath . $image));
    }
}

