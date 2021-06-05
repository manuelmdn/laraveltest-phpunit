<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{

    public function testEmail()
    {   
        $email = 'hola@mail.com';
        $result = Email::validate($email);
        $this->assertTrue($result);


        $email = 'hola@mailcom';
        $result = Email::validate($email);
        $this->assertFalse($result);
    }
}
