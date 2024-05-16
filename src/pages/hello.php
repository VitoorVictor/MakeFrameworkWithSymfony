<!-- framework/src/pages/hello.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Olá</title>
    <style>
        .forget-password .panel-default {
        padding: 31%;
        margin-top: -27%;
        }

        .forget-password .panel-body {
            padding: 15%;
            margin-bottom: -50%;
            background: #fff;
            border-radius: 5px;
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body class="bg-warning">
    <div class="container forget-password">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <img src="https://i.ibb.co/qrdP8qK/icone.png" class="mb-4" alt="icone">
                        <h2 class="text-center mb-5">Olá <strong class="text-warning"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8')?></strong>, sua idade é <strong class="text-warning"><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8')?></strong></h2>
                        <a id="backLink" href = "http://localhost:4321/home" class="btn btn-danger col-10"  type="submit">Voltar</a>       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
