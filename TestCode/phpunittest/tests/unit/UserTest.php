<?php
class UserTest extends \PHPUnit_Framework_TestCase {
    public function testReturnsFullName(){
        require('phpunittest\tests\User.php');
        $user = new User;
        $user->firstName = "Abrar";
        $user->surname = "Haque"; 
        $this->assertEquals('Abrar Haque',$user->getFullName());
    }
}
?>