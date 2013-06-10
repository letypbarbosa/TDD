<?php

class Soma {

    function resultado($n) {

        $res = 0;

        for ($i = 0; $i < $n; $i++) {
            $_n = $i+1;
            $res += ($_n + 1) / (pow($_n, 2));
        }

        return $res;
    }

}

?>
