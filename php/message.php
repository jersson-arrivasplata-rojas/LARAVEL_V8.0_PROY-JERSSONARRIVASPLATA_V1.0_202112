<?php
    include 'connect.php';
    $conn = OpenCon();
    
    $name=((isset($_POST['name'])==true)?$_POST['name']:'');
    $email=((isset($_POST['email'])==true)?$_POST['email']:'');
    $celphone=((isset($_POST['celphone'])==true)?$_POST['celphone']:'');
    $message=((isset($_POST['message'])==true)?$_POST['message']:'');
  
  
  
  $prepared = $conn->prepare("INSERT INTO `Messages` (`name`, `email`, `celphone`, `message`) VALUES ( ? , ?, ?, ? ) ; ");
    if($prepared==false)
    die("Secured"); //"No se enviado su mensaje intente nuevamente"
    
    $result=$prepared->bind_param("ssss",$name,$email,$celphone,$message);
    if($result==false)
    die("Secured"); //"No se enviado su mensaje intente nuevamente"
       
    $result=$prepared->execute();   
    if($result==false)
    die("Secured"); //"No se enviado su mensaje intente nuevamente"
           
    $prepared->close();   
    echo "<p style='
    height: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
    justify-content: center;'><label style='    font-size: 2em;
    text-align: center;
    font-family: fantasy;'>¡Nuevo mensaje enviado con exito!</label> <br/>
    <a style='    font-family: sans-serif;
    font-size: 18px;' target='_self' href='https://jerssonarrivasplata.com'>Click aqui para regresar</a>
    </p>";

    
    CloseCon($conn);
?>