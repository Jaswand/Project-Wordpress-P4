<?php


function templatePath()
{
    return Wrapping::$main_template;
}

class Wrapping
{
    // Stores the full path to the main template file
    public static $main_template;

    // Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
    public static $base;

    public function __construct($template = 'base.php')
    {
        $this->slug = basename($template, '.php');
        $this->templates = [$template];

        if (self::$base) {
            $str = substr($template, 0, -4);
            array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
        }
    }

    public function __toString()
    {
        $this->templates = apply_filters('roots_wrap_' . $this->slug, $this->templates);

        return locate_template($this->templates);
    }

    public static function wrap($main)
    {
        self::$main_template = $main;
        self::$base = basename(self::$main_template, '.php');

        if ('index' === self::$base) {
            self::$base = false;
        }

        return new Wrapping();
    }
}

add_filter('template_include', ['Wrapping', 'wrap'], 99);