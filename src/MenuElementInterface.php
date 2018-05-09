<?php

namespace RebelCode\WordPress\Admin\Menu;

use Dhii\Data\Tree\ChildrenAwareNodeInterface;
use Dhii\Data\Tree\KeyAwareNodeInterface;

/**
 * Something that represents an element that can be placed into a menu or behave as a menu.
 *
 * @since [*next-version*]
 */
interface MenuElementInterface extends ChildrenAwareNodeInterface, KeyAwareNodeInterface
{
    /**
     * Retrieves the label value to be displayed for this menu element..
     *
     * @since [*next-version*]
     *
     * @return string
     */
    public function getLabel();

    /**
     * Gets the required user capability for this element to be displayed.
     *
     * @since [*next-version*]
     *
     * @return string
     */
    public function getCapability();

    /**
     * Gets the icon to show for this menu.
     *
     * @since [*next-version*]
     *
     * @return string|null
     */
    public function getIcon();

    /**
     * Triggered when the element is selected.
     *
     * @since [*next-version*]
     */
    public function onSelected();
}
