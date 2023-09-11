<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabalho dos herois</title>
</head>
<body>
<form action="resultado.php" method="post"> Universo : 
    <br> 
    <input type="Radio" id="Marvel" name="universo" value="Marvel"> 
    <label for="Marvel">Marvel</label>
    <br> 
    <input type="Radio" id="DC" name="universo" value="DC"> 
    <label for="DC">DC</label>
    <br> 
    <select id="heroi" name="heroi"> 
        <option value="Homem de Ferro">Homem de Ferro</option> 
        <option value="Homem Aranha">Homem Aranha</option> 
        <option value="Dr.Estranho">Dr.Estranho</option> 
        <option value="Homem Formiga">Homem Formiga</option> 
        <option value="Viúva Negra">Viúva Negra</option> 
        <option value="Super Girl">Super Girl</option> 
        <option value="Ravena">Ravena</option> 
        <option value="Lanterna Verde">Lanterna Verde</option> 
        <option value="Batgirl">Batgirl</option> 
        <option value="Arqueiro Verde">Arqueiro Verde</option> 
    </select> 
    <br>
    Número das imagens dos heróis:
    <br>
     <input type="text" name="numero">
     <br>
    <input type="submit"> 
</form>
    
</body>
</html>