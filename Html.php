<?php

class Html
{

    public function linkCss($fileName)
    {
        echo '<link rel="stylesheet" type="text/css" href="' . $fileName . '.css">';
    }

    public function linkJs($fileName)
    {
        echo '<script src="' . $fileName . '.js"></script>';
    }

    public function meta($name, $content)
    {
        echo '<meta name="' . $name . '" content="' . $content . '">'; 
    }

    public function linkImg($src, $alt)
    {
        echo '<img src="' . $src . '" alt="' . $alt . '">';
    }

    public function a($link, $contenu)
    {
        echo '<a href="' . $link . '">' . $contenu . '</a>';
    }
    
}