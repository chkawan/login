<!DOCTYPE html>
<head>
    <title>Niveis de Acesso</title>

    <?php
        include_once "links_head.php";
    ?>

</head>

<body>
    <div class="container border col ">

        <form action="" method="post">

            <div class="grup ">

                <div  class="row-md-12 titulo d-flex justify-content-center">
                <h2>Testando Niveis de Acesso</h2>
                </div>

                <br><br>

                <div class="input-grup row-md-12  mb-2 d-flex justify-content-center">
                    <label for="login">
                        Login:
                            <input type="tex" name="login" id="login" class="form-control">
                    </label>
                </div>

                <div class=" input-grup row-md-12  mb-2 d-flex justify-content-center password">
                    <label for="password">
                        Password:
                            <input type="password" name="password" id="password" class="form-control">
                    </label>
                </div>

                
                <div class="input-grup row-md-12  mb-3 d-grid gap-3 col-3 mx-auto  ">
                    <input type="submit" value="Conectar" id="conect" class="conect btn btn-success btn-sm form-control ">
                </div>

                <div class="input-grup row-md-12  mb-5" >
                    <div class="row">
                        <div class="recuperar col-sm-6 d-flex justify-content-center"><a href="recuperar.php">Esqueceu a Senha.</a></div> 
                        <div class="novocadastro col-sm-6 d-flex justify-content-center"><a  href="cadastro.php">Criar conta.</a></div>
                    </div>
                </div>
                
            </div>

        </form>

    </div>


    <?php
        include_once "links_footer.php";
    ?>
</body>