 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>Galeria de Fotos</title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
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
    body {
        background:transparent!important;
    }

.item a:hover, .item a:focus {
    background-color: none!important;
    border: none!important;
}
.item a {
    text-align: center;
    vertical-align: top;
    display: block;
    padding: 5px;
    height: 90%;
    border:none !important;
    background-color: none!important;
}
a:hover, a:focus {
    text-decoration: none!important;
    color: none!important;
}
.item a {
    text-align: center;
    vertical-align: top;
    display: block;
    padding: 5px;
    height: 90%;
    border: none!important;
    background-color: none!important;
}
.item a {
    text-align: center;
    vertical-align: top;
    display: block;
    padding: 5px;
    height: 90%;
    border: none!important;
    background-color: none!important;
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


    <!-- <link href="../css/base_page.css" rel="stylesheet" type="text/css" /> -->


    <body bgcolor="transparent" allowtransparency="true">
        <h1 class="display-4 text-center text-white" style="margin-top:2rem; margin-bottom:2rem; font-weight:400;">Galeria de Fotos</h1>

        <div class="fotos_home" id="mostra_fotos" style="background:transparent !important;">
            <div class="item_geral gallery" style="display:inline-block!important">
                <div class="item">
                    <a href=".../assets/206086.jpg" title="18157710_1371711039582351_8178305066594428438_n - ">
                        <img class="img-thumbnail" src="../assets/206086_thumb.jpg" name="206086" border="0" class="tbl_borda" id="foto_206086" alt="18157710_1371711039582351_8178305066594428438_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206087.jpg" title="18119586_1371711082915680_6853080798034801451_n - ">
                        <img class="img-thumbnail" src="../assets/206087_thumb.jpg" name="206087" border="0" class="tbl_borda" id="foto_206087" alt="18119586_1371711082915680_6853080798034801451_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206088.jpg" title="18118963_1371711069582348_9170895696946757084_n - ">
                        <img class="img-thumbnail" src="../assets/206088_thumb.jpg" name="206088" border="0" class="tbl_borda" id="foto_206088" alt="18118963_1371711069582348_9170895696946757084_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206089.jpg" title="18118410_1371711192915669_7329695905036888260_n - ">
                        <img class="img-thumbnail" src="../assets/206089_thumb.jpg" name="206089" border="0" class="tbl_borda" id="foto_206089" alt="18118410_1371711192915669_7329695905036888260_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206090.jpg" title="17991926_1371710972915691_3415258723471503826_n - ">
                        <img class="img-thumbnail" src="../assets/206090_thumb.jpg" name="206090" border="0" class="tbl_borda" id="foto_206090" alt="17991926_1371710972915691_3415258723471503826_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206091.jpg" title="17990704_1371710782915710_7464483866175485427_n - ">
                        <img class="img-thumbnail" src="../assets/206091_thumb.jpg" name="206091" border="0" class="tbl_borda" id="foto_206091" alt="17990704_1371710782915710_7464483866175485427_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206093.jpg" title="18118548_1371777832909005_1533349825116079516_n - ">
                        <img class="img-thumbnail" src="../assets/206093_thumb.jpg" name="206093" border="0" class="tbl_borda" id="foto_206093" alt="18118548_1371777832909005_1533349825116079516_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206094.jpg" title="18119130_1371777906242331_3739468643199379086_n - ">
                        <img class="img-thumbnail" src="../assets/206094_thumb.jpg" name="206094" border="0" class="tbl_borda" id="foto_206094" alt="18119130_1371777906242331_3739468643199379086_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206095.jpg" title="18119183_1371777999575655_3925776366338563863_n - ">
                        <img class="img-thumbnail" src="../assets/206095_thumb.jpg" name="206095" border="0" class="tbl_borda" id="foto_206095" alt="18119183_1371777999575655_3925776366338563863_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206096.jpg" title="18157019_1371778079575647_1116241625490711677_n - ">
                        <img class="img-thumbnail" src="../assets/206096_thumb.jpg" name="206096" border="0" class="tbl_borda" id="foto_206096" alt="18157019_1371778079575647_1116241625490711677_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206097.jpg" title="fullsizerender1 - ">
                        <img class="img-thumbnail" src="../assets/206097_thumb.jpg" name="206097" border="0" class="tbl_borda" id="foto_206097" alt="fullsizerender1" />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206098.jpg" title="fullsizerenders - ">
                        <img class="img-thumbnail" src="../assets/206098_thumb.jpg" name="206098" border="0" class="tbl_borda" id="foto_206098" alt="fullsizerenders" />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206099.jpg" title="fullsizerenderewwe - ">
                        <img class="img-thumbnail" src="../assets/206099_thumb.jpg" name="206099" border="0" class="tbl_borda" id="foto_206099" alt="fullsizerenderewwe"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206105.jpg" title="fullsizerender - ">
                        <img class="img-thumbnail" src="../assets/206105_thumb.jpg" name="206105" border="0" class="tbl_borda" id="foto_206105" alt="fullsizerender" />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206159.jpg" title="18118936_1494493620624736_7058585861692726194_n - ">
                        <img class="img-thumbnail" src="../assets/206159_thumb.jpg" name="206159" border="0" class="tbl_borda" id="foto_206159" alt="18118936_1494493620624736_7058585861692726194_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206163.jpg" title="18119109_1494493333958098_8221477065236146633_n - ">
                        <img class="img-thumbnail" src="../assets/206163_thumb.jpg" name="206163" border="0" class="tbl_borda" id="foto_206163" alt="18119109_1494493333958098_8221477065236146633_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206107.jpg" title="fllsizerender - ">
                        <img class="img-thumbnail" src="../assets/206107_thumb.jpg" name="206107" border="0" class="tbl_borda" id="foto_206107" alt="fllsizerender" />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206164.jpg" title="18058146_1494491877291577_6910413994471110905_n - ">
                        <img class="img-thumbnail" src="../assets/206164_thumb.jpg" name="206164" border="0" class="tbl_borda" id="foto_206164" alt="18058146_1494491877291577_6910413994471110905_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206108.jpg" title="dd - ">
                        <img class="img-thumbnail" src="../assets/206108_thumb.jpg" name="206108" border="0" class="tbl_borda" id="foto_206108" alt="dd" />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206165.jpg" title="18118686_1494492517291513_8887728789497412616_n - ">
                        <img class=img-thumbnail src="../assets/206165_thumb.jpg" name="206165" border="0" class="tbl_borda" id="foto_206165" alt="18118686_1494492517291513_8887728789497412616_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206166.jpg" title="18119166_1494493900624708_1388977735976613039_n - ">
                        <img class="img-thumbnail" src="../assets/206166_thumb.jpg" name="206166" border="0" class="tbl_borda" id="foto_206166" alt="18119166_1494493900624708_1388977735976613039_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206167.jpg" title="18194658_1494492967291468_6177571573778222278_n - ">
                        <img class="img-thumbnail" src="../assets/206167_thumb.jpg" name="206167" border="0" class="tbl_borda" id="foto_206167" alt="18194658_1494492967291468_6177571573778222278_n"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
            <div class="item_geral" style="display:inline-block!important">
                <div class="item">
                    <a href="../assets/206111.jpg" title="fullsizerenderqa - ">
                        <img class="img-thumbnail" src="../assets/206111_thumb.jpg" name="206111" border="0" class="tbl_borda" id="foto_206111" alt="fullsizerenderqa"
                        />
                        <br />
                        <br />
                    </a>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
        <script src="../js/verge_gallery.js"></script>
        <script>
            $(function () {
                $('.gallery').VergeGallery();
            });
        </script>

        <p style="clear:both"></p>
        <p style="clear:both"></p>
       
    </body>

</html>