<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testReturnFullName()
    {

        $user = new User();

        $user->firstName = 'Teresa';
        $user->surName   = 'Bart';

        $this->assertEquals('Bart Teresa', $user->getFullName());

    }

    public function testReturnFullNameisEmpty()
    {
        $user = new User();

        $user->firstName = '';
        $user->surName   = '';

        $this->assertEquals('', $user->getFullName());

    }


}