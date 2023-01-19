<?php
class A {
    public static function who(){
        echo __CLASS__;
    }
    public static function test(){
        static::who();
    }
}

class B extends A {
    //try self / static
    public static function who(){
        echo __CLASS__;
    }
}

B::test();
?>