<?php

$a = $_POST['dividendo_3'];

$b = $_POST['dividendo_2'];

$c = $_POST['dividendo_1'];

$d = $_POST['dividendo_0'];



$e = $_POST['divisor_2'];

$f = $_POST['divisor_1'];

$g = $_POST['divisor_0'];



// imprime polinomio

/*

echo "\n P(x) = ".$a."x^3 + ".$b."x^2 + ".$c."x + ".$d;

echo "\n F(x) = ".$e."x^2 + ".$f."x + ".$g;



echo "\n \n Q(x) = ".($a/$e)."x + ".($b/$e-($a*$f)/($e*$e));

echo "\n R(x) = ".($c-($b*$f)/$e-($a*$g)/$e+($a*$f*$f)/($e*$e))."x + ".($d - ($g*$b)/$e + ($a*$f*$g)/($e*$e));

*/

?>



<!DOCTYPE html>

<html lang="pt-BR">

<head>

<title>Álgebra 2 - Resultado</title>

<link rel="stylesheet" type="text/css" href="assets/estilo.css" />

<link rel="stylesheet" type="text/css" href="assets/kube.min.css" />

<link rel="shortcut icon" href="assets/img/icon.png">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>



<body>

    <div id="quadro" style="    top: 0;

    margin: 

    75px 0; height:auto;">

        <form action="eisenstein.php" method="post">

            <div>

            

            <h2>POLINÔMIO DE GRAU 3 DIVIDIDO POR GRAU 2</h2>

            <br/>

                <h2>Você inseriu o seguinte polinômio:</h2>

                

             



            </div>

            

            <span class="polinomio" style="width: auto">

            	<div>

               <?php  
			
		\\ a impressão de polinômios exige melhorias: polinômios com coeficiente nulo apresentam o símbolo de soma indevidamente.

               $coeficientes = array($a, $b, $c, $d);

               $i = 3;

                foreach ($coeficientes as $key => $coef) {

                 	if($coef != 0) {

                   ?>

                

                <label for="grau<?php echo $i;?>">

                   <?php if($coef != 1 || $i == 0) { echo $coef; } ?> <?php if($i != 0) { ?> x &nbsp; <?php } ?> <span><?php if($i != 0 && $i != 1){ echo $i; } ?></span>

                    <?php if($i != 0){ ?> + <?php } ?>

                </label>

                   <?php

               }

                   $i--;





                }

            ?>

            </div>

            </span>



            <br/>

            

			

			<div class="width-100 left">

            <br/>

                <h2>Você inseriu o seguinte polinômio divisor:</h2>

            </div>    

             



                       

            <span class="polinomio" style="width: auto">

            	<div>

               <?php  

              $coeficientes = array($e, $f, $g);

               $i = 2;

                foreach ($coeficientes as $key => $coef) {

                 	if($coef != 0) {

                   ?>

                

                <label for="grau<?php echo $i;?>">

                   <?php if($coef != 1 || $i == 0) { echo $coef; } ?> <?php if($i != 0) { ?> x &nbsp; <?php } ?> <span><?php if($i != 0 && $i != 1){ echo $i; } ?></span>

                    <?php if($i != 0){ ?> + <?php } ?>

                </label>

                   <?php

               }

                   $i--;





                }

            ?>

            </div>

            </span>



            <div class="width-100 left">

            <br/>

                <h2>Este é o quociente:</h2>

            </div>    

             



                       

            <span class="polinomio" style="width: auto">

            	<div>

               <?php  

             $coef_a = ($a/$e);

             $coef_b = ($b/$e-($a*$f)/($e*$e));

              $coeficientes = array($coef_a, $coef_b);



               $i = 1;

                foreach ($coeficientes as $key => $coef) {

                 	if($coef != 0 || ($coef == 0 && $i == 0)) {

                   ?>

                

                <label for="grau<?php echo $i;?>">

                   <?php if($coef != 1 || $i == 0) { echo $coef;  } ?> <?php if($i != 0) { ?> x &nbsp; <?php } ?> <span><?php if($i != 0 && $i != 1){ echo $i; } ?></span>

                    <?php if($i != 0){ ?> + <?php } ?>

                </label>

                   <?php

               }

                   $i--;





                }

            ?>

            </div>

            </span>





			<div class="width-100 left">

            <br/>

                <h2>Este é o resto:</h2>

            </div>    

             



                       

            <span class="polinomio" style="width: auto">

            	<div>

               <?php  

               $coef_a = ($c-($b*$f)/$e-($a*$g)/$e+($a*$f*$f)/($e*$e));

               $coef_b = ($d - ($g*$b)/$e + ($a*$f*$g)/($e*$e));

              $coeficientes = array($coef_a, $coef_b);

              

               $i = 1;

                foreach ($coeficientes as $key => $coef) {

                 	if($coef != 0 || ($coef == 0 && $i == 0)) {

                   ?>

                

                <label for="grau<?php echo $i;?>">

                   <?php if($coef != 1 || $i == 0) { echo $coef; } ?> <?php if($i != 0) { ?> x &nbsp; <?php } ?> <span><?php if($i != 0 && $i != 1){ echo $i; } ?></span>

                    <?php if($i != 0){ ?> + <?php } ?>

                </label>

                   <?php

               }

                   $i--;





                }

            ?>

            </div>

            </span>

            

        </form>

    </div>

</body>

</html>

