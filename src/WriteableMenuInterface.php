<?php

namespace RebelCode\WordPress\Admin\Menu;

/**
 * Represents a menu that can have menu items added to it.
 *
 * @since [*next-version*]
 */
interface WriteableMenuInterface extends MenuInterface
{
    /**
     * Adds a menu item to this menu.
     *
     * @since [*next-version*]
     *
     * @param MenuElementInterface $menuItem The menu item instance to add.
     * @param int|null             $position The position of the element in the menu, or null to append to the end of
     *                                       the menu. Default: null
     */
    public function addMenuItem(MenuElementInterface $menuItem, $position = null);
}
