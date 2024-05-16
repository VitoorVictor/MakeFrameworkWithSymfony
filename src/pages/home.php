<!-- framework/src/pages/hello.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
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
                        <h2 class="text-center">Bem-vindo ao meu <strong class="text-warning">Framework</strong>, informe os dados e
                            escolha uma opção</h2>
                        <div>
                            <div class="mb-1">
                                <input id="inputNome" placeholder="Nome" class="form-control" type="text">
                            </div>
                            <div class="mb-1">
                                <input id="inputIdade" placeholder="Idade" class="form-control" type="number">
                            </div>
                        </div>
                        <div>
                            <a id="helloLink" href = "http://localhost:4321/hello" class="btn btn-danger col-5"  type="submit">Olá</a>
                            <a id="byeLink" href = "http://localhost:4321/bye" class="btn btn-danger col-5 " type="submit">Tchau</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    document.getElementById("helloLink").addEventListener("click", function (event) {

        let name = document.getElementById("inputNome").value;
        let age = document.getElementById("inputIdade").value;



        if (name && age) {
            this.href = "http://localhost:4321/hello/" + encodeURIComponent(name) + "/" + encodeURIComponent(age);
        } else if (name && !age) {
            this.href = "http://localhost:4321/hello/" + encodeURIComponent(name);
        } else if (!name && age) {
            this.href = "http://localhost:4321/helloSemName/" + encodeURIComponent(age);
        }
        

    });

    document.getElementById("byeLink").addEventListener("click", function (event) {

        let name = document.getElementById("inputNome").value;
        if (name) {
            this.href = "http://localhost:4321/bye/" + encodeURIComponent(name);
        }

    });
</script>