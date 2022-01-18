<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Landyz</title>
  <link rel="stylesheet" type="text/css" href="CSS/LandyzInicio.css">
  <?php include("template/head.tpl"); ?>
</head>

<body id="bodyback">
  <header style="max-width: 100%;">
    <div>
      <nav id="navbar-list">
        <img src="Imagem/logokvra.png" alt="" style="height: 7vh;">
        <a class="logo" href=""></a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <!--Linhas do botão do menu lateral-->
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <!--<li><a class="start" href="index.php">Início</a></li> -->
          <li><a class="sell" href="Vender.php">Vender</a></li>
          <li><a class="buy" href="Comprar.php">Comprar</a></li>
          <li><a class="contact" href="Contato.php">Contato</a></li>
          <li><a class="login" href="Login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <br />

  <main id="inicioL">
    <!--Barra de pesquisa estados, cidades e tipo-->
    <div class="container-fluid group">
      <div id="campo-pesquisa">
        <form id="group-pesquisa">
          <div id="estado">
            <ul style="padding-left: 0;"><strong style="margin-left: 5px;">Estado</strong>
              <li>
                <select type="text" id="txt-estado" class="estado form-select" placeholder="Estado" arial-label="Estado">
                  <option value="ac">Acre</option>
                  <option value="al">Alagoas</option>
                  <option value="am">Amazonas</option>
                  <option value="ap">Amapá</option>
                  <option value="ba">Bahia</option>
                  <option value="ce">Ceará</option>
                  <option value="df">Distrito Federal</option>
                  <option value="es">Espírito Santo</option>
                  <option value="go">Goiás</option>
                  <option value="ma">Maranhão</option>
                  <option value="mt">Mato Grosso</option>
                  <option value="ms">Mato Grosso do Sul</option>
                  <option value="mg">Minas Gerais</option>
                  <option value="pa">Pará</option>
                  <option value="pb">Paraíba</option>
                  <option value="pr">Paraná</option>
                  <option value="pe">Pernambuco</option>
                  <option value="pi">Piauí</option>
                  <option value="rj">Rio de Janeiro</option>
                  <option value="rn">Rio Grande do Norte</option>
                  <option value="ro">Rondônia</option>
                  <option value="rs">Rio Grande do Sul</option>
                  <option value="rr">Roraima</option>
                  <option value="sc">Santa Catarina</option>
                  <option value="se">Sergipe</option>
                  <option value="sp">São Paulo</option>
                  <option value="to">Tocantins</option>
                </select>
              </li>
            </ul>
          </div>
          <div id="cidade">
            <ul style="padding-left: 0;"><strong style="margin-left: 15px;">Cidade</strong>
              <li>
                <select type="text" id="txt-cidade" class="cidade form-select" placeholder="Cidade" arial-label="Cidade">
                  <option value="Acrelândia">Acrelândia</option>
                  <option value="Batalha">Batalha</option>
                  <option value="Caapiranga">Caapiranga</option>
                  <option value="Coronel João Sá">Coronel João Sá</option>
                  <option value="Miraíma">Miraíma</option>
                  <option value="Vila Pavão">Vila Pavão</option>
                  <option value="Guarani de Goiás">Guarani de Goiás</option>
                  <option value="Mauá">Mauá</option>
                </select>
              </li>
            </ul>
          </div>
          <div id="tipo">
            <ul style="padding-left: 0;"><strong style="margin-left: 15px;">Tipo</strong>
              <li>
                <select type="text" id="txt-tipo" class="tipo form-select" placeholder="Tipo" arial-label="Tipo">
                  <option value="Condomínio">Condomínio</option>
                  <option value="Lote">Lote</option>
                </select>
              </li>
            </ul>
          </div>
          <div class="area-pesquisa">
            <input id="pesquisar" type="submit" value="Pesquisar">
          </div>
        </form>
      </div>
    </div>

    <!--Inicio dos botões laterais-->
    <div class="btn-esquerdo">
      <a href="Comprar.php">
        <button type="button" class="btn" style="color: #ffffff;">Compre agora!</button>
      </a>
    </div>

    <div class="btn-direito">
      <a href="Vender.php">
        <button type="button" class="btn" style="color: #ffffff;">Venda agora!</button>
      </a>
    </div>
    <!--Fim dos botões laterais-->


    <section class="album">
      <div class="container-losango">
        <div class="losango"><a class="txt-losango" style="text-decoration: none; color: #ffffff" href="#">
            <h6>Max - Logistica</h6>
          </a></div>
        <div class="losango1"><a class="txt-losango" style="text-decoration: none; color: #ffffff" href="#">
            <h6 class="first">Dkzaz
              <h6 class="second">Materias de</h6>
              <h6 class="third">Contrução</h6>
          </a>
        </div>

        <div class="losango2"><a class="txt-losango" style="text-decoration: none; color: #ffffff" href="#">
            <h6>M+M</h6>
          </a></div>
        <div class="losango3"><a class="txt-losango" style="text-decoration: none; color: #ffffff" href="#">
            <h6>Linha Itália</h6>
          </a></div>
        <div class="losango4"><a class="txt-losango" style="text-decoration: none; color: #ffffff" href="#">
            <h6>Financeira</h6>
          </a></div>
      </div>
    </section>
  </main>
  <!--Fim-->

  <!--------------bootchat-------------------->
  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  <df-messenger chat-title="Aurora" agent-id="fe36650a-43ab-4402-bc8a-8a13135a81ce" language-code="pt-br"></df-messenger>

  <!--------------menu responsivo-------------------->
  <script src="js/mobile-navbar.js"></script>
</body>

</html>