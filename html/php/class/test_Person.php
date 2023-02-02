<?

include 'class_Person.php';


$person= new Person();

$person->setName('서기');
$person->setAge('20');


echo $person->getName();
echo $person->getAge();




?>