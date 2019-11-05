<?php

namespace Phansible\Roles;

use PHPUnit\Framework\TestCase;

class MongodbTest extends TestCase
{
    private $role;

    public function setUp(): void
    {
        $app = $this->getMockBuilder('\Phansible\Application')
            ->disableOriginalConstructor()
            ->getMock();

        $this->role = new Mongodb($app);
    }

    public function tearDown(): void
    {
        unset($this->role);
    }

    /**
     * @covers Phansible\Roles\Mongodb
     */
    public function testShouldInstanceOf()
    {
        $this->assertInstanceOf('\Phansible\Role', $this->role);
    }

    /**
     * @covers Phansible\Roles\Mongodb::getName
     */
    public function testShouldGetName()
    {
        $this->assertEquals('MongoDb', $this->role->getName());
    }

    /**
     * @covers Phansible\Roles\Mongodb::getSlug
     */
    public function testShouldGetSlug()
    {
        $this->assertEquals('mongodb', $this->role->getSlug());
    }

    /**
     * @covers Phansible\Roles\Mongodb::getRole
     */
    public function testShouldGetRole()
    {
        $this->assertEquals('mongodb', $this->role->getRole());
    }

    /**
     * @covers Phansible\Roles\Mongodb::getInitialValues
     */
    public function testShouldGetInitialValues()
    {
        $expected = [
            'install' => 0,
        ];

        $this->assertEquals($expected, $this->role->getInitialValues());
    }
}
