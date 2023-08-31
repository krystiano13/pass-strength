<?php

namespace App;

final class Verificator {
    public string $password;
    private int $strength;

    public function __construct($password)
    {
        $this -> password = $password;
    }

    public function __invoke():int
    {
        $length = (int)strlen($this -> password);
        $specialCount = 1;
        $UppercaseCount = 0;

        for($i=0; $i<$length; $i++) {
            if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $this -> password[$i])) {
                $specialCount++;
            }

            if(ctype_upper($this->password[$i])) {
                $UppercaseCount++;
            }
        }

        $this -> strength = ($length + $UppercaseCount) * $specialCount;

        return $this -> strength;
    }
}