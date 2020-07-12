<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
    <h1>Atención!!</h1>
    <p>Hola! Se te informa que has sido registrado en el sistema de cotizacion de radios de celutel comunicaciones </p>
    <p>Estos son los datos del usuario registrado:</p>
    
    
    <ul>
        <li>nombre: {{ $distressCall->name }}</li>
        <li>identificacion: {{ $distressCall->identificacion }}</li>
        <li>apellido: {{ $distressCall->apellido }}</li>
        <li>correo: {{ $distressCall->email }}</li>
        <li>direccion: {{ $distressCall->direccion }}</li>
         
           
      
    </ul>
    <p>si presenta alguna inquietud o falla comuniquese con el ingeniero</p>
    <p>Anderson Gil .|.</p>
</body>
</html>