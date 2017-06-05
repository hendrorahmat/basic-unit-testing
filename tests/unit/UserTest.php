<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;

    public function setUp()
    {
        $this->user = new \App\Models\User;
    }

    public function testThatWeCanGetTheFirstName()
    {
        $this->user->setFirstName("Hendro");

        $this->assertEquals($this->user->getFirstName(), "Hendro");
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new \App\Models\User;
        $user->setLastName("Rahmat");

        $this->assertEquals($user->getLastName(), "Rahmat");
    }

    public function testFullNameIsReturned()
    {
        $user = new \App\Models\User();
        $user->setFirstName("Hendro");
        $user->setLastName("Rahmat");

        $this->assertEquals($user->getFullName(), "Hendro Rahmat");
    }

    public function testEmailAddressCanBeSet()
    {
        $user = new \App\Models\User();
        $user->setEmail("hendro@gmail.com");

        $this->assertEquals($user->getEmail(), "hendro@gmail.com");
    }

    public function testEmailVariableContainCorrectValue()
    {
        $user = new \App\Models\User;
        $user->setFirstName("Hendro");
        $user->setLastName("Rahmat");
        $user->setEmail("Hendro863@gmail.com");

        $emailVariables = $user->getEmailVariables();
        $this->assertArrayHasKey('email', $emailVariables);
        $this->assertEquals($emailVariables['email'], "Hendro863@gmail.com");
        $this->assertCount(2, $emailVariables);
    }
}