<?php 

$post = $_POST;

$error = array();
$email = $_POST["email"];
$question = $_POST['question'];
$result = false;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error['email'] = "Invalid email format";
}

if(trim($question)==""){
    $error['question'] = "Invalid question format";   
}

if(count($error)==0){
    
    $para      = 'mery.durcam@gmail.com';
    $titulo    = 'Contant Form';
    
    $mensaje = '
    <html>
    <head>
      <title>Contant Form</title>
    </head>
    <body>
      <table>
        <tr>
          <td>Email:</td>
          <td>'.$email.'</td>
        </tr>
        <tr>
          <td>Question</td>
          <td>'.$question.'</td>
        </tr>
      </table>
    </body>
    </html>
    ';
    
    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Cabeceras adicionales
    $cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
    $cabeceras .= 'From: Contant Form <cumples@example.com>' . "\r\n";
    $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
    $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

    $result = mail($para, $titulo, $mensaje, $cabeceras);

}


$response = json_encode(array('error' => $error, 'result' => $result));
echo $response;
