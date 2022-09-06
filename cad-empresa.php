

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Materiais</title>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style3.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
<!--  Botstrap 5 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>
<!-- link para icones -->
<script src="https://kit.fontawesome.com/0518f3ccf0.js" crossorigin="anonymous"></script>

<script src="assets/js/js.js"></script>

<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

</script>

</head>
<body>



<div class="container--pessoal">
    <header>
            <div class="titulo">controle de materiais -- defend--</div>
            <div class="bem-vindo">Bem vindo:Fulano</div>
          
            <!-- <div class="sobre">Sobre</div> -->
          <div class="menu-opener">
              <div class="menu--opener1"> </div>
              <div class="menu--opener2"> </div>
              <div class="menu--opener3"> </div>
          </div>      
    </header>
    <aside>
        <div class="menu">
       
        <div id="layoutSidenav">
                  <div id="layoutSidenav_nav">
                      <nav class="sb-sidenav  sb-sidenav-dark"  style="background-color: #0388d1; width:180px;" id="sidenavAccordion">
                          <div class="sb-sidenav-menu">
                              <div class="nav" style="font-size:22px">                                                                                            
                                  <!--logo menu <img style="width:200px;height:150px;padding: 10px;  color:#000000; " src="img/logo1.png"> -->
                                  <a class="nav-link" href="index.php" style="color: #ffffff;" >
                                      <div class="sb-nav-link-icon"></div><i class="fa-solid fa-table-columns"></i>
                                      DASHBOARD
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="dashboardteste" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                      <nav class="sb-sidenav-menu-nested nav">
                                          <!-- <a class="nav-link" id="texto" href="index.php">Produtos</a> -->
                                      </nav>
                                  </div>                              

                                  <a class="nav-link collapsed" href="#" style="color: #ffffff;" data-toggle="collapse" data-target="#cadastros" aria-expanded="false" aria-controls="cadastros">
                                      <div class="sb-nav-link-icon"></div><i class="fa-solid fa-plus"></i>
                                      CADASTROS
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="cadastros" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                      <nav class="sb-sidenav-menu-nested nav">
                                          <a class="nav-link" id="texto" href="cad-prod.php">Produtos</a>
                                          <a class="nav-link" id="texto" href="cad-empresa.php">Empresas</a>                                                                                
                                          <a class="nav-link" id="texto" href="lancamento.php">Lançamentos</a>                                                                                
                                          <a class="nav-link" id="texto" href="cad-pessoa.php">Pessoa</a>                                                                                



                                      </nav>
                                  </div>                              
                                  <a class="nav-link collapsed" href="#" style="color: #ffffff;" data-toggle="collapse" data-target="#consultas" id="texto" aria-expanded="false" aria-controls="consultas">                                      
                                  <div class="sb-nav-link-icon"></div><i class="fa-solid fa-magnifying-glass"></i>
                                      CONSULTAS  
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="consultas" style="color:#112A46" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                      <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                          <a class="nav-link collapsed" id="texto"  href="consCodigo.php">
                                              Códigos
                                              <div class="sb-sidenav-collapse-arrow"></div>
                                          </a>
                                          <a class="nav-link collapse" id="texto" href="consPessoa.php">
                                              Pessoas
                                              <div class="sb-sidenav-collapse-arrow"></div>
                                          </a>                                      
                                      </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" style="color: #ffffff;" data-toggle="collapse" data-target="#dashboard123" aria-expanded="false" aria-controls="dashboard123">
                                      <div class="sb-nav-link-icon"></div><i class="fa-solid fa-address-card"></i>
                                      Sobre
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="dashboard" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                      <!-- <nav class="sb-sidenav-menu-nested nav">
                                          <a class="nav-link" id="texto" href="cad-cliente.php">Produtos</a>
                                          <a class="nav-link" id="texto" href="cad-veiculo.php">Lancamentos</a>                                                                                
                                      </nav> -->
                                  </div>  
                                 
                                
                                  
                          
                      </nav>
              </div>
          </div>
        </div>
    </aside>
    <section>
                <div class="form">
                    
                    <form method="POST" action="insert_empresa.php">
                        <!--comeco da linha-->
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="titulo--prod">Cadastro de Empresa</div>
                                    </div>
                        <!--fim da linha-->
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label class="prod">Nome da Empresa</label><span class="campo--obrigatorio">*</span>
                                            <input type="text" name="nomeEmpresa" class="form-control" id="nomeEmpresa" placeholder="Insira o nome da empresa">
                                            <div class="alerta" id="alert-preencher-nomeEmpresa"></div>

                                    </div>        
                                </div>                              
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cidade Empresa</label>
                                            <input type="text" name="cidadeEmpresa"  class="form-control" id="cidadeEmpresa" placeholder="Insira a cidade da empresa" >
                                            <div class="alerta" id="alert-preencher-cidadeEmpresa"></div>

                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Telefone Empresa</label>
                                            <input type="text" name="telEmpresa"  class="form-control" id="telEmpresa" placeholder="Insira o telefone da empresa" >
                                            <div class="alerta" id="alert-preencher-telEmpresa"></div>

                                    </div>        
                                </div>
                                <!-- FIm da linha-->        
                                </div>                                 
                                    
                                <div class="row">
                               <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="prod">Descrição Empresa</label><span class="campo--obrigatorio">*</span>
                                            <input type="text" name="descEmpresa" class="form-control" id="descEmpresa" placeholder="Insira a descrição da empresa">
                                    </div>        
                                </div>
                                </div>

                            <div class="buttons">

                                        <div class="cancelButton" onclick="closeModal()">Cancelar</div>

                                        <div class="cadastrarButton" id="botCad">Cadastrar</div>


                            </div>    

                               <div class="status">

                                        <div class="spinner-border" id="load" role="status">
                                        <div class="visually-hidden">Loading...</div>
                                        </div>
                                    <div class="erro"></div>
                                    <div class="sucesso"></div>
                                </div>

                        
                        </form>
          

        
                                       

<!-- area do modal sobre -->

<!-- <div class="WindowAreaSobre">
    <div class="WindowBodySobre">
       <div class="texto1">
            A plicação tem como objetivo gerenciar a saída de materiais do estoque, bem como 
            saber quem foi a pessoa que está de posse do referido material, também é posível observar
            na Dashboard da aplicação as notificações de materiais com 30 dias ou mais sem devolução.
       </div>

       <span>Sistema Desenvolvido por Fábio Vasques</span>
       
        <div class="buttons">

            <div class="cancelButtonSobre" id="botCad" onclick="closeModalSobre()">SAIR</div>
         </div>    
        <div id="alert-preencher-cod">Preencher campo codigo</div>

    </div>
</div>     -->

<!--Modais-->

<!--Modal pra Preencher cod-->

<div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Campo Obrigatório!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Favor Preencher o Campo com o Codigo do Produto!
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!--Modal para testes-->
 <!-- <div id="alert-preencher-cod" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <p>Some text in the Modal..</p>
      <p>Some text in the Modal..</p>
    </div>
  </div>
</div> -->



<!--Modal pra Preencher Nome prod-->

<div class="modal fade" id="alert-preencher-nome2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Campo Obrigatório!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Favor Preencher o Campo com o Codigo do Produto!
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!--Sucesso -->

<div class="modal" id="ModalSucesso" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Alert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="tituloModalSucesso"><i class="fa-solid fa-check"></i>Sucesso</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>

<!--Erro ao cadastrar -->

<div class="modal" id="ModalErro" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Alert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="tituloModalError"><i class="fa-solid fa-triangle-exclamation"></i>Codigo Já cadastrado</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>
<!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle2" role="button">Open first modal</a> -->
<script src="assets/js/cad-empresa.js"></script>
<!--Link aobaixo para funcionar o meu dropdow-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>