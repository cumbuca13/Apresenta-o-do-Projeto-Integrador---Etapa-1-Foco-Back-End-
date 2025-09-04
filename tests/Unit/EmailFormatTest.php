<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EmailFormatTest extends TestCase
{
    public function test_email_valido(): void
    {
        $this->assertMatchesRegularExpression('/.+@.+\..+/', 'teste@exemplo.com');
    }

    public function test_email_invalido(): void
    {
        $this->assertDoesNotMatchRegularExpression('/.+@.+\..+/', 'teste.com');
    }
}
