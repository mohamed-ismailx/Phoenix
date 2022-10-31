<?php




if(isset($_GET['LampA']))
{
    $File = fopen("stateA.txt","w");

    if($_GET['LampA'] == "on")
    {
        header("location: Control.html");
        fwrite($File,'1');
    }

    elseif($_GET['LampA'] == "off")
    {
        header("location: Control.html");
        fwrite($File,'0');
    }
    fclose($File);

}


if(isset($_GET['LampB']))
{

    $File = fopen("stateB.txt","w");

    if($_GET['LampB'] == "on")
    {
        header("location: Control.html");
        fwrite($File,'1');

    }

    elseif($_GET['LampB'] == "off")
    {
        header("location: Control.html");
        fwrite($File,'0');
    }

    fclose($File);
}



if(isset($_GET['LampC']))
{

    $File = fopen("stateC.txt","w");

    if($_GET['LampC'] == "on")
    {
        header("location: Control.html");
        fwrite($File,'1');
    }

    elseif($_GET['LampC'] == "off")
    {
        header("location: Control.html");
        fwrite($File,'0');
    }

    fclose($File);
}



if(isset($_GET['LampD']))
{

    $File = fopen("stateD.txt","w");

    if($_GET['LampD'] == "on")
    {
        header("location: Control.html");
        fwrite($File,'1');
        
    }

    elseif($_GET['LampD'] == "off")
    {
        header("location: Control.html");   
        fwrite($File,'0');
        
    }

    fclose($File);
}


?>


