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
                    <h2>Localização</h2>
                </header>

                <div id="ext-mapa">
                    <div id="mapa"></div><!-- mapa -->
                    <form id="form-localizacao" method="post" action="#" autocomplete="off">
                       <fieldset>                                
                            <label>
                                <input type="text" id="txtEnderecoPartida" name="txtEnderecoPartida" placeholder="Buscar endereço">
                            </label>                                        
                            <input class="color-transition" type="submit" id="btnEnviar" name="btnEnviar" value=" Traçar Rota ">
                       </fieldset>
                    </form>             
                </div>

            </div><!-- /container -->

        </section><!--/ internas -->

        <?php include("incs/footer.php"); ?>
        <?php include("incs/scripts.php"); ?> 

    </body>

</html>