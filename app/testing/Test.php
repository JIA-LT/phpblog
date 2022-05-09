<?php
namespace App\Testing;
use App\Test as BaseTest;
class Test extends BaseTest
{
    public static function print()
    {
        printf("这是来自Test子类的打印:%s\n", __CLASS__);
}
}