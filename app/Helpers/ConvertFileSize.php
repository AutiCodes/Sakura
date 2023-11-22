<?php

if (!function_exists('convertFileSize')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function convertFileSize($fileSize)
    {
        $units = array(
            'B',
            'KB',
            'MB',
            'GB',
        );

        $power = $fileSize > 0 ? floor(log($fileSize, 1024)) : 0;
        
        return number_format($fileSize / pow(1024, $power), 2, '.', ','. ' ') . $units[$power];
    }
}
