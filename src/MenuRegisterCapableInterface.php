<?php

namespace RebelCode\WordPress\Admin\Menu;

/**
 * Something that can register menus, either to itself or to another entity.
 *
 * @since [*next-version*]
 */
interface MenuRegisterCapableInterface
{
    /**
     * Registers a given menu.
     *
     * @since [*next-version*]
     *
     * @param MenuInterface $menu The menu instance to register.
     */
    public function registerMenu(MenuInterface $menu);
}
