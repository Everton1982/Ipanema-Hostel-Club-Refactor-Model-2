<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Fale Conosco</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">



  <!-- CSS PERSONALIZADO -->
  <link href="../css/base_page.css" rel="stylesheet" type="text/css" />
  <!-- CSS PERSONALIZADO -->


  <!-- TODO: <script type="text/javascript" src="../_biblioteca/scripts/autocontexto.php"></script> -->
  <script type="text/javascript" src="../js/login.js"></script>

  <script type="text/javascript">

    function valida_frm() {
      the_form = document.frm_fale_conosco

      if (!eh_campo_preenchido(the_form, "tx_nome", "Nome")) return false
      if (!eh_campo_preenchido(the_form, "tx_cpf", "Cpf")) return false
      if (!eh_campo_preenchido(the_form, "tx_email", "Email")) return false
      if (!eh_email_valido(the_form, "tx_email", "Email")) return false

      if (!eh_campo_preenchido(the_form, "tx_tel", "Telefone")) return false

      if (!eh_campo_preenchido(the_form, "rd_privativo", "Quarto Privativo")) return false
      if (!eh_campo_preenchido(the_form, "rd_coletivo", "Quarto Coletivo")) return false

      if (!eh_campo_preenchido(the_form, "chegada_dia", "Chegada Dia")) return false
      if (!eh_campo_preenchido(the_form, "chegada_mes", "Chegada Mês")) return false
      if (!eh_campo_preenchido(the_form, "chegada_ano", "Chegada Ano")) return false
      if (!eh_campo_preenchido(the_form, "chegada_hora", "Chegada Hora")) return false

      if (!eh_campo_preenchido(the_form, "partida_dia", "Partida Dia")) return false
      if (!eh_campo_preenchido(the_form, "partida_mes", "Partida Mês")) return false
      if (!eh_campo_preenchido(the_form, "partida_ano", "Partida Ano")) return false
      if (!eh_campo_preenchido(the_form, "partida_hora", "Partida Hora")) return false



      if (!eh_campo_preenchido(the_form, "tx_comentarios", "Comentarios")) return false

      the_form.submit()

    }

  </script>

  <style>
    .tipo_quarto {
      border: 1px dotted #999;
    }

    .check_out {
      color: #F00;
    }

    input[type=text],
    input[type=password],
    select {
      height: 35px;
      width: 700px;
      border: 1px solid #B4B4B4;
      color: #333333;
      font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif;
      font-size: 12px;
      margin: 1px;
    }
    p {
	font-size: 1.6em;
	padding:1rem;
	color: #fff !important;
}

h1, h2, h3 {
    font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
    color: #fff !important; 
    clear: both !important;
    border-bottom-width: 1px !important;
    border-bottom-style: solid !important;
		border-bottom-color: #fff !important;
		padding: 1rem;
}

td{
  width:200px !important;
  color:#fff !important;
}
input {
  color:#fff!important;
}
option {
width: 200px!important;
}
    @media screen and (max-width: 320px) {
      #logo {
        display: none;
      }
      p {
	font-size: 1.6em;
	padding:1rem;
	color: #fff !important;
}

h1, h2, h3, legend {
    font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
    color: #fff !important; 
    clear: both !important;
    border-bottom-width: 1px !important;
    border-bottom-style: solid !important;
		border-bottom-color: #fff !important;
		padding: 1rem;
}
      .display-4 {
        font-size: 2.6em;
        font-weight: bold;
        color:#fff!important;
      }
    }
  </style>

</head>

<body bgcolor="transparent" allowtransparency="true" style="background:transparent !important;">
  <div class="container">
    <form name="frm_fale_conosco" id="frm_fale_conosco" action="../php/postback.php" method="post" onsubmit="return valida_frm()">
      <input type="hidden" name="tx_url_modelo" value="../reserva_modelo.html" />
      <input name="tx_email_destino" type="hidden" id="tx_email_destino" value="contato@ipanemahostelclub.com" />

      <h1 class="display-4 text-center" style="margin-top:3rem;">Fa&ccedil;a sua reserva</h1>
      <h2>
        <strong>Data de chegada e partida</strong>
      </h2>
      <p class="color:#fff !important; font-weight:1.6em!important">
        <br />
        <strong>*CHECK IN: &Agrave; PARTIR DAS 14:00 hrs / CHECK OUT: 12:00 hrs (MEIO DIA)</strong>
        <br />
        <br /> A apresenta&ccedil;&atilde;o de identidade ou passaporte no check-in &eacute; obrigat&oacute;rio.</p>
      <fieldset>
        <legend style="color:#fff!important">Preencha o formul&aacute;rio abaixo e aguarde a
          <span style="color:#000; font-weight:bold; font-size:15px">
            <b>PR&Eacute;-RESERVA</b>
          </span> por email.</legend>
          <img src="../assets/logo_2._jpg.jpg" width="160" height="230" align="right" id="logo" />
<table class="table table-responsive table-borderless">
          <p>
            <label for="tx_nome2">Nome</label>
            <input type="text" name="tx_nome" class="form-control" id="tx_nome2" placeholder=" " value "">
          </p>
          <p>
            <label for="tx_cpf">Cpf
              <br />
              <input name="tx_cpf" class="form-control" type="text" id="tx_cpf" value="" />
          </p>
          <p>
            <label for="tx_email2">Email
              <br />
              <input name="tx_email" class="form-control" type="text" id="tx_email2" value="" />
            </label>
          </p>
          <p>
            <label for="tx_tel3">Telefone
              <br />
              <input name="tx_tel" class="form-control" type="text" id="tx_tel3" value="" />
            </label>
          </p>
          <p>
            <label for="tx_tel4">Pa&iacute;s de Origem
              <br />
              <input name="tx_pais" class="form-control" type="text" id="tx_tel4" value="" />
            </label>
          </p>
  </table>
          <table border="0" cellpadding="0" cellspacing="3" class="tipo_quarto table-borderless table-responsive" style="margin-left:10px">
            <tr>
              <td width="148">Quarto Privativo (ocupa&ccedil;&atilde;o m&aacute;xima de 6 pessoas)</td>
              <td width="145">&nbsp;</td>
            </tr>
            <tr>
              <td>
                <select name="rd_privativo" class="custom-select" id="radio">
                  <option value="Nao">Selecione...</option>
                  <option value="Sim">Sim</option>
                </select>

              </td>
              <td>
                <label for="tx_privativo_nr_pessoas"></label>
                <p> Quantas Pessoas </p>
                <input type="text" name="tx_privativo_nr_pessoas" class="form-control" id="tx_privativo_nr_pessoas" style="width:50px; margin-top:-1rem;"
                />
              </td>
            </tr>
            <!--<tr>
          <td width="50">
        Opção de café da manhã <br>
                <select name="cafeprivativo">
                    <option value="Nao Selecionado">Selecione</option>
                  <option value="Sim">Com café da manhã</option>
                  <option value="Nao">Sem café da Manhã</option>
                </select>
          </td>
      </tr>-->
          </table>
          <br />
          <table border="0" cellpadding="0" cellspacing="3" class="tipo_quarto table-responsive table-borderless" style="margin-left:10px">
            <tr>
              <td width="143">Quarto Coletivo</td>
              <td width="147">&nbsp;</td>
            </tr>
            <tr>
              <td>

                <select name="rd_coletivo" id="radio3">
                  <option value="Nao">Selecione...</option>
                  <option value="Sim">Sim</option>
                </select>
                <br>
                <!--<td width="50">
        Opção de café da manhã <br>
                <select name="cafecoletivo">
                <option value="Nao Selecionado">Selecione</option>        
                  <option value="Com cafe...">Com café da manhã</option>
                  <option value="Sem cafe">Sem café da Manhã</option>
                </select>
          </td>-->
            </tr>
            </td>
            <td>
              <label for="tx_privativo_nr_pessoas"></label>
            </td>
            </tr>
            <tr>
              <td colspan="2">N&uacute;mero de pessoas em quarto coletivo MASCULINO
                <br />
                <input type="text" name="tx_coletivo_nr_masculino" id="tx_privativo_nr_pessoas2" style="width:50px" /> (ocupa&ccedil;&atilde;o m&aacute;xima de 10 pessoas)</td>
            </tr>
            <tr>
              <td colspan="2">N&uacute;mero de pessoas em quarto coletivo FEMININO
                <br />
                <input type="text" name="tx_coletivo_nr_feminino" id="tx_privativo_nr_pessoas3" style="width:50px" /> (ocupa&ccedil;&atilde;o m&aacute;xima de 10 pessoas)</td>
            </tr>
            <tr>
              <td colspan="2">N&uacute;mero de pessoas em quarto coletivo MISTO
                <br />
                <input type="text" name="tx_coletivo_nr_misto" id="tx_privativo_nr_pessoas4" style="width:50px" /> (ocupa&ccedil;&atilde;o m&aacute;xima de 8 pessoas)</td>
            </tr>
          </table>
          <h2>Data de chegada e partida</h2>
          <p style="font-weight:bold; font-size:14px">*CHECK IN: &Agrave; PARTIR DAS 14:00 hrs / CHECK OUT: 12:00 hrs (MEIO DIA)</p>
          <br /> A apresenta&ccedil;&atilde;o de identidade ou passaporte no check-in &eacute; obrigat&oacute;rio. </p>
        <table class="table table-responsive" border="0" cellspacing="3" cellpadding="0" style="margin-left:10px">
          <tr>
            <td width="80">Chegada</td>
            <td width="120">Dia
              <label for="chegada_dia"></label>
              <select name="chegada_dia" class="custom-select rounded" id="chegada_dia" style="width:100px!important">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </td>
            <td width="120">M&ecirc;s
              <label for="chegada_dia"></label>
              <select name="chegada_mes" class="custom-select" id="select" style="width:100px">
                <option value="JANEIRO">JAN</option>
                <option value="FEVEREIRO">FEV</option>
                <option value="MARÇO">MAR</option>
                <option value="ABRIL">ABR</option>
                <option value="MAIO">MAIO</option>
                <option value="JUNHO">JUN</option>
                <option value="JULHO">JUL</option>
                <option value="AGOSTO">AGO</option>
                <option value="SETEMBRO">SET</option>
                <option value="OUTUBRO">OUT</option>
                <option value="NOVEMBRO">NOV</option>
                <option value="DEZEMBRO">DEZ</option>
              </select>
            </td>
            <td width="120">Ano
              <label for="chegada_dia"></label>
              <select name="chegada_ano" class="custom-select" id="select" style="width:100px">
                <option value="2018" selected="selected">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </td>
            <td width="120">Hora
              <input type="text" name="chegada_hora" id="tx_privativo_nr_pessoas5" style="width:100px" />
            </td>
          </tr>
          <tr>
            <td>Partida</td>
            <td>Dia
              <label for="chegada_dia"></label>
              <select name="partida_dia" class="custom-select" id="partida_dia" style="width:100px">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </td>
            <td>M&ecirc;s
              <label for="chegada_dia"></label>
              <select name="partida_mes" class="custom-select" id="select" style="width:100px">
                <option value="JANEIRO">JAN</option>
                <option value="FEVEREIRO">FEV</option>
                <option value="MARÇO">MAR</option>
                <option value="ABRIL">ABR</option>
                <option value="MAIO">MAIO</option>
                <option value="JUNHO">JUN</option>
                <option value="JULHO">JUL</option>
                <option value="AGOSTO">AGO</option>
                <option value="SETEMBRO">SET</option>
                <option value="OUTUBRO">OUT</option>
                <option value="NOVEMBRO">NOV</option>
                <option value="DEZEMBRO">DEZ</option>
              </select>
            </td>
            <td>Ano
              <label for="chegada_dia"></label>
              <select name="partida_ano" id="select" class="custom-select" style="width:100px">

                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </td>
            <td>Hora
              <input type="text" name="partida_hora" id="tx_privativo_nr_pessoas6" style="width:100px" />
            </td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <h2> Coment&aacute;rios, d&uacute;vidas ou sugest&otilde;es:</h2>
        <p>
          <textarea name="tx_comentarios" id="tx_comentarios"></textarea>
        </p>
        <p>
          <input type="submit" name="enviar" value="Enviar" id="enviar" /> &nbsp;
        </p>
      </fieldset>
    </form>
  </div>
</body>

</html>