<?php

class Foo
{
    var $a;
    var $a, $b, $c;
    var $a = 'foo', $b = 'bar', $c = 'baz';
    var $a = 'foooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', $b = 'baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaar', $c = 'baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaz';
    var $aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa, $bbbbbbbbbbbbbbbbbbbbbbbbbbbbb, $cccccccccccccccccccccccccc;
    var $aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa = 'foooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', $bbbbbbbbbbbbbbbbbbbbbbbbbbbbb = 'baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaar', $cccccccccccccccccccccccccc = 'baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaz';
    private $a, $b, $c;
    private $aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa, $bbbbbbbbbbbbbbbbbbbbbbbbbbbbb, $cccccccccccccccccccccccccc;
    protected $a, $b, $c;
    protected $aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa, $bbbbbbbbbbbbbbbbbbbbbbbbbbbbb, $cccccccccccccccccccccccccc;
    public $a, $b, $c;
    public $aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa, $bbbbbbbbbbbbbbbbbbbbbbbbbbbbb, $cccccccccccccccccccccccccc;
    public static $a, $b, $c;
    public static $aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa, $bbbbbbbbbbbbbbbbbbbbbbbbbbbbb, $cccccccccccccccccccccccccc;
    public static $aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa = 'foooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', $bbbbbbbbbbbbbbbbbbbbbbbbbbbbb = 'baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaar', $cccccccccccccccccccccccccc = 'baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaz';
    public $a = ['very_very_very_long_key' => 'very_very_very_long_value', 'very_very_very_long_other_key' => 'very_very_very_long_other_value'], $b = ['very_very_very_long_key' => 'very_very_very_long_value', 'very_very_very_long_other_key' => 'very_very_very_long_other_value'];
    static $a = 'foo';
    static $a = 'foo', $b = 'baz';
}
