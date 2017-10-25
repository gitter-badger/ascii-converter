<?php


namespace Tests\AsciiTable;

use PHPUnit\Framework\TestCase;
use Tools\AsciiTable\Table;

class TableTestCase extends TestCase
{
    public function getTestTable() {
        $data = [["qweqwe","asd"], ["qaz", "wsx"], ["qw", "er"]];
        $table = new Table($data);
        return $table;
    }
}