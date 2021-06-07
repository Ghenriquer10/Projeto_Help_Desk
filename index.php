<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">

              <!-- Através do método action podemos enviar os dados de um formulário como requisisão http ao servidor, esses dados poderão ser recuperados via array
              Porém, apenas o metodo action fará com que os dados sejam enviados através do link, podendo expor dados confidenciais
              assim, usamos o metodo post, fazendo com que os dados enviados sejam encapsulados
              -->

              <form action="http://localhost/Projeto_Help_Desk/valida_login.php" method="post">
                <div class="form-group">

                <!--Passasmos os dados dos formulários através de seus name's, que serão transformados em índices pelo método GET-->
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                <div class="text-danger text-center">
                  Usuário ou senha nao econtrados
                </div>
                <?}?> 
                

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>