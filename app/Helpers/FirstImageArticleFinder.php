<?php

if (!function_exists('FirstImgFinder')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function FirstImgFinder($data)
    {
        $pos = strpos($data, 'img src="')+ strlen('img src="'); // find postition of img src" and add lenght of img src"
        $lenght= strpos($data, '"', $pos)-$pos; 

        return substr($data, $pos, $lenght);
    }
}
