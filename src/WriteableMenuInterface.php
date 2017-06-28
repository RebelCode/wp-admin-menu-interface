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
     * @param MenuItemInterface $menuItem The menu item instance to add.
     */
    public function addMenuItem(MenuItemInterface $menuItem);
}
