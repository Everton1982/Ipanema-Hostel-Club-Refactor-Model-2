<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>O Hostel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <style>
        html {
            margin: 0 !important;
            padding: 0 !important;
        }

        .link_reserva a {
            display: block;
            height: 55px;
            line-height: 55px;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 18px;
            font-weight: bold;
            color: #000;
            text-decoration: none;
            padding-left: 10px;
        }

        p {
            font-size: 1.6em;
            padding: 1rem;
            color: #fff !important;
        }

        h1,
        h2,
        h3 {
            font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
            color: #fff !important;
            clear: both !important;
            border-bottom-width: 1px !important;
            border-bottom-style: solid !important;
            border-bottom-color: #fff !important;
            padding: 1rem;
        }

        .img-thumbnail {
            height: 140px !important;
            width: 20px auto !important;
        }

        #mostra_fotos {
            height: auto !important;
        }

        .fa-handshake,
        .fa-facebook {
            color: black !important;
        }

        @media screen and (max-width: 320px) {
            p {
                font-size: 1.6em;
                padding: 1rem;
                color: #fff !important;
            }

            h1,
            h2,
            h3 {
                font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
                color: #fff !important;
                clear: both !important;
                border-bottom-width: 1px !important;
                border-bottom-style: solid !important;
                border-bottom-color: #fff !important;
                padding: 1rem;
            }
            #mostra_fotos {
                height: auto !important;
            }
            .img-thumbnail {
                height: 160px;
                width: 300px;
                margin-left: -4rem;
            }
            .img-fluid {
                margin-left: 0 !important;
                margin-bottom: 2rem !important;
            }
            #hostel {
                font-size: 3.4em;
            }
            #facebook,
            #reserva,
            i {
                display: none !important;
            }
            .link_reserva,
            a {
                font-size: 1em !important;
                padding-left: 1rem;
            }
            #mostra_fotos {
                margin-left: 3.5rem;
            }
        }
    </style>


    <script type="text/javascript">
        function esvaziar() {
        }

        function incluir_produto(cd_produto) {
            cd_evento = "incluir_produto";
            tx_url = "/mkte_x/produtos/pedido_postback.php?cd_evento=" + cd_evento + "&cd_produto=" + cd_produto;
            abre_janela(tx_url, 200, 200)
        }

        function excluir_produto(cd_produto) {
            cd_evento = "excluir_produto";
            tx_url = "/mkte_x/produtos/pedido_postback.php?cd_evento=" + cd_evento + "&cd_produto=" + cd_produto;
            abre_janela(tx_url, 200, 200)
        }

        function alterar_quantidade(cd_produto) {
            cd_evento = "alterar_quantidade_01";
            tx_url = "/mkte_x/produtos/pedido_postback.php?cd_evento=" + cd_evento + "&cd_produto=" + cd_produto;
            abre_janela(tx_url, 200, 200)
        }


        function finalizar_pedido() {
            cd_evento = "finalizar_pedido";
            tx_url = "/mkte_x/produtos/pedido_postback.php?cd_evento=" + cd_evento;
            abre_janela(tx_url, 200, 200)
        }
    </script>
    <script type="text/javascript" src="../js/mostra_foto.js"></script>
    <script type="text/javascript" src="../js/abre_janela.js"></script>


    <link href="../css/base_page.css" rel="stylesheet" type="text/css" />


    <body style="background-color:transparent;">
        <h1 class="display-4 text-center" style="padding-top:3rem;" id="hostel">O Hostel</h1>

        <p class="display-4" style="font-size:1.6em; text-align:left; padding-left:10px;">
            <img class="img-fluid" src="../assets/logo_2._jpg.jpg" style="margin-bottom:1rem; box-shadow: 0px 0px 20px 0.1px black;" width="180" height="250" hspace="30" align="left"
            />
            <br />
            <br />
            <br />Localizado a na quadra da praia de Ipanema e apenas 15 minutos a p&eacute;
            <br /> das praias de Copacabana, Leblon e lagoa Rodrigo de Freitas.
            <br />
            <br /> Caf&eacute; da manh&atilde; inclu&iacute;do na di&aacute;ria exceto aos domingos.
            <br />
            <br /> Free WiFi, ar condicionado noturno e ventiladores em todos os quartos.</p>
        <p class="display-4" style="font-size:1.5em; font-weight:bold; text-align:left; padding-left:10px;">Economize tempo e dinheiro se hospedando no bairro mais disputado do Rio de Janeiro.</p>
        </p>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />


        <div class="row justify-content-center" style="margin-top:-4rem;">
            <div class="col-sm-6 text-center">
                <i class="fab fa-facebook fa-7x" style="color:#3B5998 !important;"></i>
                <a href="http://www.facebook.com/ipanemahostelclub" target="_blank" style="font-size: 1.2em; text-decoration:none!">
                    <br>
                    <p id="facebook" style="color:black; text-decoration:none!important;">Estamos no Facebook</p>
                </a>
            </div>
            <div class="col-sm-6 text-center">
                <i class="far fa-handshake fa-7x" style="color: #263238 !important;"></i>
                <a href="../php/reserva.php" style="font-size: 1.2em; text-decoration:none!">
                    <br>
                    <p id="reserva" style="color:#263238; text-decoration: none !important">Faça sua reserva</p>
                </a>
            </div>
        </div>


        <p style="clear:both"></p>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    </body>

</html>