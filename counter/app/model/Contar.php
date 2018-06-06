<?php

class Contar
{
    public $id;
    public $num;

    public function soma($num)
    {
        $num = $num + 1;
        return $num;
    }

    public function subtrai($num)
    {
        $num = $num - 1;
        return $num;
    }

}