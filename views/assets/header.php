<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="estilos/styles.css">
    <title>Crypto Email</title>
</head>
<body>
    <div class="container">
        <div class="row border bg-light">
            <div class="col align-self-center">
            <h1 class="text-dark">Crypto Email</h1>
            </div>
            <div class="col align-self-start">
            <h3 class="text-dark">Bienvenid@ </h3> <p><b><?php echo htmlspecialchars($user['name'])?></b></p>
            </div>
            <div class="col align-self-center">
            <h4 class="text-dark"><?php echo htmlspecialchars($user['email'])?></h4>
            </div>
            <div class="col align-self-center">
            <a href="api/close_session.php">Close Session</a>
            </div>
        </div>
        <br>