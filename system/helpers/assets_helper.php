<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
    function add_css($nom)
    {
        return base_url() . 'assets/css/' . $nom . '.css';
    }
}

if ( ! function_exists('js_url'))
{
    function add_js($nom)
    {
        return base_url() . 'assets/js/' . $nom . '.js';
    }
}

if ( ! function_exists('img_url'))
{
    function add_img($nom)
    {
        return base_url() . 'assets/img/' . $nom;
    }
}

if ( ! function_exists('img'))
{
    function img($nom, $alt = '')
    {
        return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
    }
}