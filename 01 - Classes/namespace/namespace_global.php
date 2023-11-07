<?php 

// Par defaut, ClassA est dans le Namespace Global "\"
class ClassA {
    public string $info = "Info de la ".__CLASS__." - Global.";
}
class ClassC {
    public string $info = "Info de la ".__CLASS__." - Global.";
}