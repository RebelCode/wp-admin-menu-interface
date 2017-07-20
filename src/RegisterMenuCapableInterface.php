<?php

namespace RebelCode\WordPress\Admin\Menu;

/**
 * Something that can register menus, either to itself or to another entity.
 *
 * @since [*next-version*]
 */
interface RegisterMenuCapableInterface
{
    /**
     * Registers a given menu.
     *
     * @since [*next-version*]
     *
     * @param MenuElementInterface             $menu     The menu instance to register.
     * @param MenuElementInterface|string|null $parent   The parent menu instance.
     * @param int|null                         $position The position of the element within its parent, or null to append.
     */
    public function registerMenu(MenuElementInterface $menu, $parent = null, $position = null);
}
