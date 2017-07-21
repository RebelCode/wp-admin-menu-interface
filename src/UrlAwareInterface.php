<?php

namespace RebelCode\WordPress\Admin\Menu;

use Dhii\Util\String\StringableInterface;

/**
 * Something that is aware of, and can provide, a URL.
 *
 * @since [*next-version*]
 */
interface UrlAwareInterface
{
    /**
     * Retrieves the URL.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function getUrl();
}
