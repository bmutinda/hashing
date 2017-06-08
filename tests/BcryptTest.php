<?php

namespace Bmutinda\Hashing\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class BcryptTest
 * @package Bmutinda\Hashing\Tests
 */
class BcryptTest extends TestCase
{
    private $rawPasswords = [
        "password", "bm", "12", "true", "?#asd3s ~ a"
    ];

    public function testHashing( )
    {
        $bcrypt = new \Bmutinda\Hashing\Bcrypt();

        foreach ( $this->rawPasswords as $password ){
            $hashed = $bcrypt->hash($password);
            $this->assertNotEquals($password, $hashed);
        }
    }

    public function testVerify( )
    {
        $bcrypt = new \Bmutinda\Hashing\Bcrypt();

        foreach ( $this->rawPasswords as $password ){
            $hashed = $bcrypt->hash($password);
            $this->assertTrue($bcrypt->verify($password, $hashed) );
        }
    }
}