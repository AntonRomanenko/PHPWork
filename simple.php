<?php
/*const user = [{ id: 1, name: 'Toha', status: false, age: 32 }, { id: 2, name: 'Vasia', status: true, age: 56 }, { id: 3, name: 'Vasia', status: false, age: 45 }];
const user2 = [{ id: 4, name: 'Lena', status: false, age: 31 }, { id: 5, name: 'Natasha', status: true, age: 22 }, { id: 6, name: 'Masha', status: false, age: 20 }];
 1) Функция которая выводит список ID NAME STATUS
 2)Отфилтровать масив по статусу по возрасту (FUNCTIONS)
 3)Вывести количетво пользоваателей все, аакстивные, не акстивные, старше 40
 4)Смерджтть дваа масива
 5)Удалить всех не активных из масива
 6)Удаалить по ИД
 7)Дабаавить юзера активного и не активного
 8)Выдать инфу юзераа по имени если его нету сказать об этом
 9)Созадатб гит репу и пушить туда все что сделал!*/

$peopleOne = [
   'id:1' => ['name' => 'Toha', 'age' => 32, 'status' => false],
   'id:2' => ['name' => 'Vasily', 'age' => 56, 'status' => true],
   'id:3' => ['name' => 'Anatoly', 'age' => 45, 'status' => false]
];


$peopleTwo = [
   'id:4' => ['name' => 'Lena', 'age' => 31, 'status' => false],
   'id:5' => ['name' => 'Natasha', 'age' => 22, 'status' => true],
   'id:6' => ['name' => 'Masha', 'age' => 20, 'status' => true]
];

//$arrayShared = $peopleOne + $peopleTwo;

//4)Смерджить дваа масива. Не получилось сделать с помощью array_push();
//7)Дабаавить юзера активного и не активного. Добавил активного )
/*  $peopleThree = [
   'id:7' => ['name' => 'Oleg', 'age' => 33, 'status' => true]
]; 

function arrayPush($push, $in) {
   $sum = $push + $in ;
   var_dump($sum);
};
arrayPush($peopleTwo, $peopleThree);
 */



//1) Функция которая выводит список ID NAME STATUS
//3)Вывести количетво пользоваателей все, аакстивные, не акстивные, старше 40
//4)Смерджтть дваа масива

function pip($a1, $a2)
{
   $sum = $a1 + $a2;
   echo '<pre>';
   var_export($sum);
   echo '</pre>';
}
pip($peopleOne, $peopleTwo);


//2)Отфилтровать масив по статусу по возрасту (FUNCTIONS) 
/*  function odd($var) {
   if($var['status']  == true)
   return $var;
}
function even($var) {;gi
   return ($var['age']  <= 30);
   return $var;
}; 

echo "true :<pre>";
var_export(array_filter( $arrayShared, "odd"));
echo "true :</pre>";

echo "age :<pre>";
var_export(array_filter( $arrayShared, "even"));
echo "age :</pre>";  */


//5)Удалить всех не активных из масива 
//6)Удаалить по ИД  Удолил ' age'
/* function del($ar) {
   foreach ( $ar as $item => $kay) {
      echo "delete :<pre>";
      unset($kay['age']);
      var_export($kay);
      echo "</pre>";
   }
}

del($arrayShared);
 */

//8)Выдать инфу юзераа по имени если его нету сказать об этом
/* 
function userRequest($us)
{
   foreach ($us as $item) {
      if ($item['name'] == 'Toha') {
         echo "user request :<pre>";
         echo 'Добро пожаловать Мы Вам рады!!!!';
         echo "</pre>";
      } else {
         echo "user request :<pre>";
         echo 'Такого пользователч нет!';
         echo "</pre>";
      }
   }
}
userRequest($arrayShared);
 *///https://github.com/AntonRomanenko/MyWorkPHP.git