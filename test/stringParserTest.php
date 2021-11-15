<?php
namespace Tests;
use App\StringReverse;
use PHPUnit\Framework\TestCase;



class stringParserTest extends TestCase
{
    public function test_revers_string_class() {
        $parser=new StringReverse();
        $result=$parser->revstring('Привет! Давно не виделись.');
        $exp='Тевирп! Онвад ен ьсиледив.';
        $this->assertSame($exp,$result);
    }
}

