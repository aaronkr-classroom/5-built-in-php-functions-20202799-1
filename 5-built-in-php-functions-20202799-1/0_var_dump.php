<?php
$username = 'IVY';

$user_array1 = ['IVY', '34', 'web programming'];
$user_array2 = [
  'name' => 'IVY',
  'age' => 34,
  'major' => 'web programming'    
];

class User {
  public $name;
  public $age;
  public $major;

  function __construct($name, $age, $major) { //=>매개변수 (정의할떄)
    $this->name = $name;
    $this->age = $age;
    $this->major = $major;
  }
} 
//=> 호출 할 때는 인수
$user_object = new User('IVY', 34, 'web programming'); 
?>

  <p>Scalar: <?php var_dump($username); ?></p>
  <p>Array1:  <?php var_dump($user_array1); ?></p>
  <p>Array2:  <?php var_dump($user_array2); ?></p>
  <p>Object: <?php var_dump($user_object); ?></p>

<?php include 'includes/footer.php' ?>