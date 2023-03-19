<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Calculadora POO</title>
</head>
<body>
    <?php
        class Calculator{
            private float $total = 0;

            public function plus($value){
                $this->total += $value;
            }
            
            public function rem($value){
                $this->total -= $value;
            }

            public function mult($value){
                $this->total *= $value;
            }

            public function div($value){
                $this->total /= $value;
            }

            public function clear(){
                $this->total = 0;
            }
            public function getTotal(){
                return $this->total;
            }
        }

        $calc = new Calculator();
        $calc->plus(12);
        $calc->plus(2);
        $calc->rem(1);
        $calc->mult(3);
        $calc->div(2);
        $calc->plus(0.5);

        echo "Total:" . $calc->getTotal();

        $calc->clear();
    ?>
</body>
</html>