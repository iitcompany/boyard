<?
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

/**
 * @param $var
 * @param bool $die
 */
function dump($var, $die = true)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';

    if ($die) {
        die();
    }
}