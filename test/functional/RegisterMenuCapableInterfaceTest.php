<?php

namespace RebelCode\WordPress\FuncTest\Admin\Menu;

use RebelCode\WordPress\Admin\Menu\RegisterMenuCapableInterface;
use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\WordPress\Admin\Menu\RegisterMenuCapableInterface}.
 *
 * @since [*next-version*]
 */
class RegisterMenuCapableInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Admin\\Menu\\RegisterMenuCapableInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return RegisterMenuCapableInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->registerMenu()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );
    }
}
