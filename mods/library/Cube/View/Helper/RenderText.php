<?php

/**
 *
 * Cube Framework $Id$ MzunkLMy6KV8l+PHHZdZB2HhkMpwehcN9sZk2MqyQAe/P78JNBbe3VrDZY4pG5XWKg8QOLmoZDS471MY+XJ2aDY5BY5U9Ma8fDQydRpKtqE=
 *
 * @link        http://codecu.be/framework
 * @copyright   Copyright (c) 2021 CodeCube SRL
 * @license     http://codecu.be/framework/license Commercial License
 *
 * @version     2.3 [rev.2.3.01]
 */

/**
 * processes an input value and renders it as forced text
 * applies nl2br as well
 */

namespace Cube\View\Helper;

class RenderText extends AbstractHelper
{

    /**
     *
     * output formatted string
     *
     * @param string $string
     * @param bool   $nl2br
     * @param int    $maxChars
     *
     * @return string
     */
    public function renderText($string, $nl2br = false, $maxChars = null)
    {
        $output = htmlspecialchars(strip_tags(htmlspecialchars_decode($string)));

        if ($maxChars !== null) {
            $length = strlen($output);
            $output = mb_substr($output, 0, $maxChars) . (($length > $maxChars) ? '...' : '');
        }

        return ($nl2br) ? nl2br($output) : $output;
    }

}

