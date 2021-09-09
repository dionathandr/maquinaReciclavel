<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
   
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Depósito de Recicláveis</h3>
                        
                   
                    <div class="box">
                        <form action="cadastro_reciclavel.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="Tipo Reciclável" type="text" class="input is-large" placeholder="Tipo Reciclável" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="tamanho_reciclavel" type="text" class="input is-large" placeholder="tamanho_reciclavel">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="data_deposito" class="input is-large" type="number" placeholder="data_deposito">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>