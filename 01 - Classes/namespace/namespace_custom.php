<?php

namespace Custom;

// $file = "classes/".$entry.".php";

// Custom\ClassA
// classes/Custom\ClassA.php
// classes/Custom/ClassA.php

class ClassA {
    public string $info = "Info de la ".__CLASS__." - ".__NAMESPACE__.".";
}

class ClassB {
    public string $info = "Info de la ".__CLASS__." - ".__NAMESPACE__.".";
}
class ClassC {
    public string $info = "Info de la ".__CLASS__." - ".__NAMESPACE__.".";
}