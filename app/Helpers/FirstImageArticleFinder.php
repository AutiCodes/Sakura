<?php

if (!function_exists('findFirstImageInHtml')) {

    /**
     * Finds the first image in the given HTML data and returns it's path OR default image if no image was found
     *
     * @param string $data HTML data
     * @return string image path
     */
    function findFirstImageInHtml(string $data): string
    {
        // No idea how this works, but it works! Pls don't touch it!
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $data, $image);

        // if the image is found, return it's path, otherwise return the default image
        return !emtpy($image['src']) ? $image['src'] : url('/system/ArticleDefault.jpg');
    }
}
