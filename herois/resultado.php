<?php
    $universo = $_POST["universo"];
    $heroi = $_POST["heroi"];
    $qtd_heroi = $_POST["numero"];
    if($universo == "Marvel")
    {          
            if($heroi == "Homem de Ferro")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                    echo "<img src='imgs/homem-de-ferro.webp'>"; 
                }
            } 
            else if($heroi == "Homem Aranha")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                echo "<img src='imgs/homem-aranha.webp'>";
                } 
            } 
            else if($heroi == "Dr.Estranho")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                    echo "<img src='imgs/dr.estranho.webp'>"; 
                } 
            } 
            else if($heroi == "Homem Formiga")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                    echo "<img src='imgs/homem-formiga.webp'>"; 
                } 
            } 
            else if($heroi == "Viúva Negra")
            {
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                 echo "<img src='imgs/viuva-negra.webp'>"; 
                } 
            } 
            else
            {
                echo "Universo inválido!"; 
            }
        } 
    if($universo == "DC")
    { 
            if($heroi == "Super Girl")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                    echo "<img src='imgs/super girl.jpg'>";  
                } 
            } 
            else if($heroi == "Ravena")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                    echo "<img src='imgs/Ravena.webp'>"; 
                } 
            } 
            else if($heroi == "Lanterna Verde")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                    echo "<img src='imgs/lanterna verde.webp'>"; 
                } 
            } 
            else if($heroi == "Batgirl")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                    echo "<img src='imgs/batgirl.webp'>";   
                } 
            } 
            else if($heroi == "Arqueiro Verde")
            { 
                for($x=1;$x<=$qtd_heroi;$x++)
                {
                    echo "<img src='imgs/arqueiro verde.webp'>";
                } 
            } 
            else
            { 
                echo "Universo inválido!"; 
            } 
        } 
    
 ?>