<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <?php include("incs/meta.php"); ?>
        <?php include("incs/css.php"); ?>
    </head>

    <body>
        
        <?php include("incs/ie.php"); ?>
        <?php include("incs/header.php"); ?>
        <?php include("incs/banner.php"); ?>

        <section class="internas">
           
            <div class="container">

                <header>
                    <h2>Contato</h2>
                </header>

                <form class="formulario" action="#" autocomplete="off">
                    
                    <fieldset>
                        
                        <label for="nome">
                            <input type="text" id="nome" name="nome" placeholder="Nome" required>
                        </label>

                        <label for="telefone">
                            <input type="tel" id="telefone" name="telefone" placeholder="Telefone">
                        </label>                        

                        <label for="email">
                            <input type="text" id="email" name="email" placeholder="Email">
                        </label>                                              

                        <label for="assunto">
                            <input type="text" id="assunto" name="assunto" placeholder="Assunto">
                        </label> 

                    </fieldset>

                    <fieldset>

                        <label for="mensagem">
                            <textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
                        </label> 

                        <input type="submit" id="enviar" name="enviar" value=" Enviar ">
                        
                    </fieldset>

                </form>

            </div><!-- /container -->

        </section><!--/ internas -->

        <?php include("incs/footer.php"); ?>
        <?php include("incs/scripts.php"); ?>      

    </body>

</html>