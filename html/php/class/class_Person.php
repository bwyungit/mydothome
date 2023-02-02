<?
class Person{
  private $_name;
  private $_age;
  
  public function setName($name){$this->_name=$name;}
  public function getName(){return $this->_name;}

  public function setAge($age){$this->_age=$age;}
  public function getAge(){return $this->_age;}
}

?>