<?php

if (!function_exists('FirstImgFinder')) {

    /**
     * Finds the first image in the given HTML data and returns it's path OR NULL if there isn't an image
     *
     * @param string $data
     * @return string 
     */
    function FirstImgFinder($data)
    {
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $data, $image);
        return $image['src'];
    }
}
