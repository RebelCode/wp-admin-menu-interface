<?php

namespace RebelCode\WordPress\Admin\Menu;

use Traversable;

/**
 * Something that represents a menu of elements.
 *
 * @since [*next-version*]
 */
interface MenuInterface extends MenuElementInterface
{
    /**
     * Retrieves the items for this menu.
     *
     * @since [*next-version*]
     *
     * @return MenuItemInterface[]|Traversable
     */
    public function getMenuItems();
}
