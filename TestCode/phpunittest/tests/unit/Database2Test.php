<?php
class Database2Test extends \PHPUnit_Framework_TestCase {
    public function testAddReturnsSum(){
        require('phpunittest\tests\Database2.php');
        $db = new Database2();
        $this->assertEquals(4,$db->add(2,2));
    }
}   

?>