<?php

if (!function_exists('FirstImgFinder')) {

    /**
     * Finds the first image in the given HTML data and returns it's path OR default image if no image was found
     *
     * @param string $data
     * @return string 
     */
    function FirstImgFinder($data)
    {
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $data, $image);

        if (!isset($image['src'])) {
            return url('/system/ArticleDefault.jpg');
        }

        return $image['src'];
    }
}
