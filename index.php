<!doctype html>
<html lang="pt-br">
 <head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width,
          user-scalable=no,
          initial-scale=1.0,
          maximum-scale=1.0,
          minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible"
          content="ie=edge"
    >

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous"
    >

    <!-- JQuery -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>

    <title>AJAX</title>

    <script>
        $(document).ready( function () {
            $('#submit').click(function () {
                var form_data = $('#meu_form').serialize();
                $.ajax({
                    type     : 'POST',
                    url      : './controller/UserController.php',
                    dataType : 'json',
                    data     : form_data
                }).done(function(data) {
                    $('#resposta').html(data);
                }).fail(function (error) {
                    console.log('Erro');
                })
            });
        });
    </script>

</head>
 <body>
 <div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form method="post"
                  action="./controller/UserController.php"
                  id="meu_form"
                  class="form-horinzontal"
            >
                <label for="nome"
                       class="control-label"
                >
                    Nome
                </label>
                <div class="form-group">
                    <input type="text"
                           name="nome"
                           id="nome"
                           class="form-control"
                    >
                </div>
                <div class="form-group">
                    <label for="email"
                           class="control-label"
                           >
                        Email
                    </label>
                    <input type="email"
                           name="email"
                           id="email"
                           class="form-control"
                    >
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label for="telefone"
                               class="control-label"
                        >
                            Telefone
                        </label>
                        <input type="tel"
                               name="telefone"
                               id="telefone"
                               class="form-control"
                        >
                    </div>
                    <div class="col-lg-6">
                        <label for="celular"
                               class="control-label"
                        >
                            Celular
                        </label>
                        <input type="tel"
                               name="celular"
                               id="celular"
                               class="form-control"
                        >
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary"
                            id="submit"
                    >
                        Cadastrar
                    </button>
                </div>
            </form>
            <p id="resposta">

            </p>
        </div>
    </div>
</div>
</body>
</html>