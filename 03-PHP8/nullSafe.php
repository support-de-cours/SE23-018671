<?php 

// $user = new stdClass;
// $user->firstname = "John";
// $user->actions = new stdClass;
// $user->actions->doSomething = function(){};
// $user->actions->sayHello = new function(){
//     return "Hello there";
// };


$user = [
    'firstname' => "John",
    // 'tasks' => [
    //     'sayHello' => "Hello",
    //     'sayGoodby' => "Bye",
    // ]
    'tasks' => null  // array|null
];

$user = json_decode(json_encode($user));

echo $user->firstname." --- <br>";
echo $user->tasks?->sayHello." --- <br>";

// echo $user['firstname']."<br>";
// echo $user['tasks']['sayHello']."<br>";