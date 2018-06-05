<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Preços</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">




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



    <style>
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



        .texto_pessoa {

            text-align: center;

            font-size: 15px;

            color: #000;

            font-weight: bold;

            text-transform: uppercase;

        }

        h1 {
            font-size: 1.8em;
            text-align: center;
        }

        h2 {
            font-size: 1.5em;
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        h1,
        h2,
        h3,
        td,
        tr,
        table {
            padding: 1rem;
            border: none!important;
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
            /* border-bottom-width: 1px !important;
            border-bottom-style: solid !important;
            border-bottom-color: #fff !important; */
            padding: 1rem;
        }

        .table,
        .table-striped,
        .table-responsive {
            border: none !important;
        }
        h1, h2, h3 {
    font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
    color: #fff !important;
    clear: both !important;
    /* border-bottom-width: none !important; */
    /* border-bottom-style: solid !important; */
    /* border-bottom-color: #fff !important; */
    padding: 1rem!important;
}
@media screen and(max-width: 990px) {
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



.texto_pessoa {

text-align: center;

font-size: 0.9em;

color: #000;

font-weight: bold;

text-transform: uppercase;

}

h1 {
font-size: 1.1em;
text-align: center;
}

h2 {
font-size: 1.1em;
text-align: center;
}

h3 {
text-align: center;
}

h1,
h2,
h3,
td,
tr,
table {
padding: 1rem;
border: none!important;
}

p {
font-size: 0.9em !important;
padding: 1rem!important;
color: #fff !important;
}

h1,
h2,
h3,
strong {
font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
color: #fff !important;
clear: both !important;
font-size:9px!important;
/* border-bottom-width: 1px !important;
border-bottom-style: solid !important;
border-bottom-color: #fff !important; */
padding: 1rem;
}

.table,
.table-striped,
.table-responsive {
border: none !important;
}
h1, h2, h3 {
    font-size:9px!important;
font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
color: #fff !important;
clear: both !important;
/* border-bottom-width: none !important; */
/* border-bottom-style: solid !important; */
/* border-bottom-color: #fff !important; */
padding: 1rem!important;
}
strong {
    font-size:9px!important;
}
h3 {
    font-size: 11px;
}
}

    </style>



    <body bgcolor="transparent" allowtransparency="true" style="background: transparent !important;">
        <table class="table-borderless table-striped table-responsive" id="miolo" style="border:none!important;">
            <tr>
                <td>

                    <br />
                    <h1 class="display-4 text-center" style="margin-top:-1rem;">Preços</h1>
                    <!-- <p>
<img align="right" height="150" src="../assets/logo_2._jpg.jpg" width="100" /></p>
<p> -->
                    </p>
                    <h1 align="center">
                        <strong>RESERVA (50%) </strong>
                    </h1>
                    <h2 align="center">
                        NOS ACEITAMOS CARTÃO DE CRÉDITO OU DEPÓSITO</h2>
                    <!-- <p align="center">
</p> -->
                    <!-- <p align="center">
</p> -->
                    <h2 align="center">
                        <span lang="en" xml:lang="en">
                            <strong>PARA CONFIRMAR A RESERVA:</strong>
                        </span>
                    </h2>
                    <h2 align="center">
                        <strong>
                            <span lang="en" xml:lang="en">NOS ACEITAMOS CARTÃO DE CRÉDITO OU DEPÓSITO EM BANCO (Nós parcelamos em 2x em valores acima de
                                R$1000,00)
                            </span>
                        </strong>
                    </h2>
                    <!-- <p align="center">
</p> -->
                    <p>
                        <strong>CHECK IN: De 14:00 hrs / CHECK OUT: 12:00 hrs (Meio dia) Se o quarto estiver disponivel, será possivel
                            fazer checkin a partir da sua chegada consultando o valor da taxa na recepção.</strong>
                    </p>
                    <!-- <p align="center">
</p> -->
                    <!-- <p style="text-transform:uppercase; font-weight:bold; font-size:24px;">
                    </p> -->
                    
                    <h1 align="center">
                        LISTA DE PREÇOS - QUARTOS COLETIVOS - 2018</h1>
                    <h1 style="text-align: -webkit-center;">
                        Todos nossos quartos compartilhados possuem: ventilador, ar condicionado noturno,roupa de cama,armários c/ chaves, banheiro,Wi-Fi
                        no Térreo Grátis e cozinha comum.</h1>
                    <table class="table table-striped table-responsive border-0" align="center" width="100%" style="background:transparent !important;font-size:1.4em!important; color:#fff!important;">
                        <tbody>
                            <tr>
                                <td align="center" width="22%">
                                    Quartos compartilhados</td>
                                <td align="center" width="22%">
                                    N° de pessoas</td>
                                <td align="center" width="22%">
                                    Domingo / Quinta</td>
                                <td align="center" width="22%">
                                    Sexta / Sabado</td>
                                <td align="center" width="22%">
                                    Feriados e eventos especiais</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    Quarto Masculino</td>
                                <td align="center">
                                    10</td>
                                <td align="center">
                                    <strong>*R$49</strong>,00</td>
                                <td align="center">
                                    <strong>*R$49</strong>,00</td>
                                <td align="center">
                                    em consulta</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    Quarto Feminino</td>
                                <td align="center">
                                    10</td>
                                <td align="center">
                                    <strong>*R$49</strong>,00</td>
                                <td align="center">
                                    <strong>*R$49</strong>,00</td>
                                <td align="center">
                                    em consultas</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    Quarto Misto</td>
                                <td align="center">
                                    08</td>
                                <td align="center">
                                    <strong>*R$49</strong>,00</td>
                                <td align="center">
                                    <strong>*R$49</strong>,00</td>
                                <td align="center">
                                    em consultas</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <table class="table table-striped table-responsive" align="center" width="100%">
                        <tbody>
                            <tr>
                                <td align="center" width="100%"> -->
                    <span class="text-center">*Aceitamos crianças de todas as idades.</span>
                    <!-- </td>
                            </tr>
                        </tbody>
                    </table> -->
                    <p>
                        * Preços acima por pessoa.</p>
                    <!-- <p>
                    </p> -->
                    <h1 class="text-center">
                        LISTA DE PREÇOS - QUARTOS PRIVATIVOS - 2018</h1>
                    <h1>
                        Todos nossos quartos privativos possuem: ventilador, roupa de cama e toalhas, armários c/ chaves, banheiro, ar condicionado
                        noturno, Frigobar, e Wi-Fi no Térreo Grátis e cozinha comum.</h1>
                    <table class="table table-striped table-responsive" align="center" width="100%" style="background:transparent !important; font-size:1.4em; color:#fff!important">
                        <tbody>
                            <tr>
                                <td align="center" width="22%">
                                    Quarto Privativo</td>
                                <td align="center" width="22%">
                                    N° de pessoas</td>
                                <td align="center" width="22%">
                                    Domingo / Quinta</td>
                                <td align="center" width="22%">
                                    Sexta / Sabado</td>
                                <td align="center" width="22%">
                                    Feriados e eventos especiais</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    Quarto Privativo</td>
                                <td align="center">
                                    Ate 2 pessoas</td>
                                <td align="center">
                                    <strong>R$149</strong>,00</td>
                                <td align="center">
                                    <strong>R$149</strong>,00</td>
                                <td align="center">
                                    em consulta</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    Pessoa Extra</td>
                                <td align="center">
                                    01</td>
                                <td align="center">
                                    <strong>R$50</strong>,00</td>
                                <td align="center">
                                    <strong>R$50</strong>,00</td>
                                <td align="center">
                                    em consulta</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <table class="table table-striped table-responsive" align="center" width="100%">
                        <tbody>
                            <tr>
                                <td align="center" width="100%"> -->
                    <span>*Aceitamos criancas de todas idades.</span>
                    <!-- </td>
                            </tr>
                        </tbody>
                    </table> -->
                    <p align="center">
                        * NOSSO QUARTO PRIVATIVO ACOMODA ATE 6 PESSOAS</p>
                    <p align="center">
                    </p>
                    <h1>
                        <strong>Mensal</strong>
                    </h1>
                    <h3>
                        <strong>Coletivo R$1200,00 por/pessoa pagamento antecipado</strong>
                    </h3>
                    <h3>
                        <strong>Privativo R$2500,00 por/pessoa pagamento antecipado</strong>
                    </h3>
                    <h1>
                        <strong>PACOTES E DIÁRIAS ANO NOVO DE 28/12 a 02/01</strong>
                    </h1>
                    <h2>
                        <strong> Quarto Coletivo 5 Noites R$1.000,00</strong>
                    </h2>
                    <h2>
                        <strong> Diária R$230,00</strong>
                    </h2>
                    <h2>
                        <strong>Quarto Privativo 5 Noites (2 Pessoas)R$1.400,00</strong>
                    </h2>
                    <h2>
                        <strong> Diária(2 Pessoas)R$340,00</strong>
                    </h2>
                    <h2>
                        <strong> Cama Extra(Por pessoa)R$200,00/Diária </strong>
                    </h2>
                    <p>
                    </p>
                    <h1>
                        <strong>PACOTES E DIÁRIAS CARNAVAL DE 08/02 a 13/02</strong>
                    </h1>
                    <h2>
                        <strong> Quarto Coletivo 5 Noites R$1.200,00</strong>
                    </h2>
                    <h2>
                        <strong> Diária R$330,00</strong>
                    </h2>
                    <h2>
                        <strong>Quarto Privativo 5 Noites (2 Pessoas)R$1.800,00</strong>
                    </h2>
                    <h2>
                        <strong> Diária(2 Pessoas)R$390,00</strong>
                    </h2>
                    <h2 align="center">
                        <strong> Cama Extra(Por pessoa)R$200,00/Diária </strong>
                    </h2>

                    </div>

                    <!-- <table align="right" border="0" cellpadding="0" cellspacing="0" width="100">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="https://www.facebook.com/pages/Ipanema-Hostel-Club/368315006686628" target="_blank">
                                        <img align="top" border="2" height="64" src="../assets/facebook.jpg" width="398" />
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" style="margin-left:20px" width="374">
                        <tbody>
                            <tr>
                                <td background="../assets/precos_seta.png" class="link_reserva" height="55">
                                    <a href="../php/reserva.php">Clique aqui para iniciar seu processo de reserva</a>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                    </center>
                    <p>
                    </p>
                </td>
            </tr>
        </table>

        <!-- <h1>&nbsp;</h1>
<div class="fotos_home" id="mostra_fotos" style="background-color:#FF0">




<div class="item_geral"><div class="item">


<a href="../assets/166404.jpg"><img src="../assets/166404_thumb.jpg" name="166404" border="0" class="tbl_borda" id="166404" /> </a>


</div></div>




<div class="item_geral"><div class="item">


<a href="../assets/166405.jpg"><img src="../assets/166405_thumb.jpg" name="166405" border="0" class="tbl_borda" id="166405" /> </a>


</div></div>




<div class="item_geral"><div class="item">


<a href="../assets/166407.jpg"><img src="../assets/166407_thumb.jpg" name="166407" border="0" class="tbl_borda" id="166407" /> </a>


</div></div>




<div class="item_geral"><div class="item">


<a href="../assets/206162.jpg"><img src="../assets/206162_thumb.jpg" name="206162" border="0" class="tbl_borda" id="206162" /> </a>


</div></div>




<div class="item_geral"><div class="item">


<a href="../assets/169514.jpg"><img src="../assets/169514_thumb.jpg" name="169514" border="0" class="tbl_borda" id="169514" /> </a>


</div></div>



</div> -->

        <p style="clear:both"></p>



    </body>

</html>