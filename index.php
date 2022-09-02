<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Materiais</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
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
                                  <a class="nav-link collapsed" href="#" style="color: #ffffff;" data-toggle="collapse" data-target="#dashboard123" aria-expanded="false" aria-controls="dashboard123">
                                      <div class="sb-nav-link-icon"></div><i class="fa-solid fa-table-columns"></i>
                                      DASHBOARD
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="dashboard" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                      <!-- <nav class="sb-sidenav-menu-nested nav">
                                          <a class="nav-link" id="texto" href="cad-cliente.php">Produtos</a>
                                          <a class="nav-link" id="texto" href="cad-veiculo.php">Lancamentos</a>                                                                                
                                      </nav> -->
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
                                          <a class="nav-link collapsed" id="texto"  href="cons-cliente.php">
                                              Códigos
                                              <div class="sb-sidenav-collapse-arrow"></div>
                                          </a>
                                          <a class="nav-link collapse" id="texto" href="cons-veiculo.php">
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
        <div class="dashboard">

        <div class="card--sub--1">
            <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Saída de Equipamentos</h5>
                        <div class="sub--title ">30</div>
                        <div class="icones--card"><i class="fa-solid fa-check"></i></div>
                        <a href="#" class="btn btn-success"><span>Acessar</span></a><br />
                    </div>
            </div>
        </div>
        <div class="card--sub--2">
            <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Equipamentos em Atraso</h5>
                        <div class="sub--title dev">10</div>
                        <div class="icones--card"><i class="fa-solid fa-bell-slash"></i></div>
                        <a href="#" class="btn btn-success "><span>Acessar</span></a>
                       
                    </div>
            </div>        
        </div>

        <!-- area do modal para cadastro -->


       

        <div class="WindowArea">
            <div class="WindowBody">
                <div class="form">
                    
                    <form method="POST" action="">
                        <!--comeco da linha-->
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="header--prod">Lançamento de Materiais</div>
                                        <label class="prod">Nome Do Produto</label>
                                            <input type="text" name="nome-produto" class="form-control" id="nome-produto">
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data Inícial</label>
                                            <input type="date" name="data-inicio" class="form-control" id="data-inicio">
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data Final</label>
                                            <input type="date" name="data-final" class="form-control" id="data-final">
                                    </div>        
                                </div>

                        <!-- FIm da linha-->        
                        </div>
    
                            <!--comeco da linha-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nome do Responsável</label>
                                            <input type="text" name="nome-responsavel" class="form-control" id="nome-responsavel">
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Autorizado por quem?</label>
                                        <select class="form-control" name="nome-autorizado" id="nome-autorizado">
                                            <option>Seleciona uma Opção</option>
                                            <option>Camila</option>
                                            <option>Oliveira</option>
                                            <option>Sandro</option>
                                            <option>Tati</option>
                                        </select>
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Quem está liberando o material?</label>
                                            <input type="text" name="nome-liberado" class="form-control" id="nome-liberado">
                                    </div>        
                                </div>

                        <!-- FIm da linha-->        
                        </div>

                        
                        <!--comeco da linha-->
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Situação</label>
                                    <select class="form-control" name="situacao" id="situacao">
                                        <option>Seleciona uma Opção</option>
                                        <option>Encaminhado para Conserto</option>
                                        <option>Emprestado</option>
                                    </select>
                                </div>        
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Empresa (Responsável Concerto)</label>
                                    <select class="form-control" name="situacao" id="situacao" data-toggle="tooltip" 
                                    data-placement="bottom" title="Só prencha se o equipamento for para concerto">
                                        <option>Seleciona uma Opção</option>
                                        <option>MPE</option>
                                        <option>outras</option>
                                    </select>
                                </div>        
                            </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>OBS</label>
                                    <textarea  name="obs" id="obs"  class="outline form-control"></textarea>
                                </div>        
                            </div>

                    <!-- FIm da linha-->        
                    </div>
                    
                            <div class="buttons">

                                        <div class="cancelButton" onclick="closeModal()">Cancelar</div>

                                        <div class="cadastrarButton">Cadastrar</div>
                            </div>    
                        
                        </form>
                    </div>
            </div>
        </div>
       
                </div>   
        </div>
    </section>
</div>   

<!-- <div class="footer"> 
    Copyright 2022 Desenvolvido por Fábio Vasques
</div>     -->


<!--Link aobaixo para funcionar o meu dropdow-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>