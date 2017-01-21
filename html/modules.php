<?php

defined('_JEXEC') or die;

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg. To render a module mod_test in the submenu style, you would use the following include:
 * <jdoc:include type="module" name="test" style="submenu" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */

/*
 * No style
 */
function modChrome_no($module, &$params, &$attribs)
{
    if ($module->content) {
        echo $module->content;
    }
}

/*
 * sidebar block
 */
function modChrome_sidebar($module, &$params, &$attribs)
{
    if ($module->content) {
        echo '<section class="sidebar__block">';

        if ($module->showtitle) {
            echo '<div class="sidebar__block__title">'.$module->title.'</div>';
        }

        echo '<div class="sidebar__block__content">'.$module->content.'</div>';

        echo '</section>';
    }
}
