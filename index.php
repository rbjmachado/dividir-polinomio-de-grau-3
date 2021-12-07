<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>Álgebra 2 - Dividindo Polinômio de Grau 3 por Grau 2</title>
<link rel="stylesheet" type="text/css" href="assets/estilo.css" />
<link rel="stylesheet" type="text/css" href="assets/kube.min.css" />
<link rel="shortcut icon" href="assets/img/icon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <div id="quadro">
        <form action="divide.php" method="post">

            <div>
                <h2>Dividindo Polinômio de Grau 3 por Polinômio de Grau 2</h2>
                
                <br/>
                
                <br/><br/><br/>
            </div>
            <h2>Polinômio a ser dividido:</h2>
                <input type="number" name="dividendo_3" id="dividendo_3" placeholder="A3">
                <label for="dividendo_3">
                     x &nbsp; <span>3</span>
                    +
                </label>

                <input type="number" name="dividendo_2" id="dividendo_2" placeholder="A2">
                <label for="dividendo_2">
                     x &nbsp; <span>2</span>
                    +
                </label>
                
                <input type="number" name="dividendo_1" id="dividendo_1" placeholder="A1">
                <label for="dividendo_1">
                     x &nbsp; <span> </span>
                    +
                </label>
          
                <input type="number" name="dividendo_0" id="dividendo_0" placeholder="A0">   
                <label for="dividendo_0">
                    
                </label>
            
            <br/><br/>
            <hr/>
                <h2>Polinômio divisor:</h2>
                
                <input type="number" name="divisor_2" id="divisor_2" placeholder="A2">
                <label for="divisor_2">
                     x &nbsp; <span>2</span>
                    +
                </label>
                
                <input type="number" name="divisor_1" id="divisor_1" placeholder="A1">
                <label for="divisor_1">
                     x &nbsp; <span> </span>
                    +
                </label>
          
                <input type="number" name="divisor_0" id="divisor_0" placeholder="A0">   
                <label for="divisor_0">
                    
                </label>

            <br/>
            <br/>
            
            <button>Dividir Polinômio!</button>
            
        </form>
    </div>
</body>
</html>
