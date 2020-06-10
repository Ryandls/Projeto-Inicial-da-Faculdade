<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Calculadora IMC</title>
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css"/>
</head>
<body>
<!--Content-->
<div id="content">
    <!--Logo-->
    <div id="logo">
    </div>
    <!--Fim Logo-->
    
    <!--Calculadora-->
    <div id="calculadora">
    	<!--Formulario-->
        <form action="php/calculo.php" method="GET">
        	
            <fieldset class="f">
            	
                <label>
                <span class="span">Seu Peso</span>
                <br/>
                <input type="text" name="peso" class="in" />
                </label>
                
                <br />
                <label>
                <span class="span">Sua Altura (Use Pontuação: 1.99 Em METROS)</span>
                <br/>
                <input type="text" name="altura" class="in"/>
                </label>
                
                <input type="submit" name="envia" value="IMC!" class="btn">
            
            </fieldset>
        
        </form>
        <!--Fim Formulario-->
    </div>
    <!--Fim Calculadora-->
</div>
<!--Fim Content-->   
    
</body>
</html>