$(function(){

    $('#botCad').bind('click',function(e){
        e.preventDefault();
        console.log( $( this ).serialize() );
        console.log('clicou em salvar');
        
        
            var tcampo = $('#statusMaterial').val();
    //     // var select = document.getElementById('nome_unidade');
    //     // // let tcampo2 =  $('#sobrenome_cliente').val().length;
    //     // // let tcampo3 = $('#cpf_cnpj').val().length;
    //     // // let tcampo4 = $('#telefone1_cliente').val().length;
    //     // console.log(text);
  
  
          if(tcampo == 'Selecionar'){
            console.log('preencha o campo status')
          }else {

          //  let tcampo = $('#statusMaterial').val().length;
    //     let tcampo2 = $('#filtro_cabine').val().length;
    //     let tcampo3 = $('#filtro_combustivel').val().length;
    //     let tcampo4 = $('#filtro_ar').val().length;
    //     let tcampo5 = $('#filtro_oleo').val().length;
    //     let tcampo6 = $('#tipo_oleo').val().length;
    //     let tcampo7 = $('#qtd_oleo').val().length;
    //     let tcampo8 = $('#data_troca').val();
    //     let tcampo9 = $('#proxima_troca').val();
  
        
    //     if(tcampo == 0)
    //     {
            
    //         $('#alert-preencher-km').modal('show');
    //         $('#cpf_cnpj').focus();
    //     }      

    //     if(tcampo2 == 0)
    //     {
            
    //         $('#alert-preencher-filtro-cabine').modal('show');
    //         $('#filtro_cabine').focus();
    //     }  

    //     if(tcampo3 == 0)
    //     {
            
    //         $('#alert-preencher-filtro_combustivel').modal('show');
    //         $('#filtro_cabine').focus();
    //     } 

    //     if(tcampo4 == 0)
    //     {
            
    //         $('#alert-preencher-filtro_ar').modal('show');
    //         $('#filtro_cabine').focus();
    //     } 

    //     if(tcampo5 == 0)
    //     {
            
    //         $('#alert-preencher-filtro_oleo').modal('show');
    //         $('#filtro_cabine').focus();
    //     } 
        
    //     if(tcampo6 == 0)
    //     {
            
    //         $('#alert-preencher-tipo_oleo').modal('show');
    //         $('#filtro_cabine').focus();
    //     } 


    //     if(tcampo7 == 0)
    //     {
            
    //         $('#alert-preencher-qtd_oleo').modal('show');
    //         $('#filtro_cabine').focus();
    //     } 
        

    //     if (tcampo8 == tcampo9)  {   
                  
         
    //       // Desabilita botão $('#cadastro').prop('disabled', true);

    //       //Dispara o modal   
    //       $('#alert-data-iguais').modal('show');

    //       //após segundos, desabilita botão
    //          setTimeout(function () {
    //           $('#cadastro').prop('disabled', true);
    //       }, 2000);

    //       //habilita o botão
    //       setTimeout(function () {
    //         $('#cadastro').prop('disabled', false);
    //     }, 6000);

    //       //Dispara o modal   
    //       $('#alert-data-iguais').modal('show');
          
          
    
                                        
    //       } 


         


    //     function selecionar() {
    //       var select = document.getElementById('unidade_id_unidade');
    //       var option = select.options[select.selectedIndex];

    //       document.getElementById('value').value = option.value;
    //       document.getElementById('text').value = option.text;
    //     }


    //     var select = document.getElementById('unidade_id_unidade');
    //     var text = select.options[select.selectedIndex].text;
    //     //console.log(text); 
    //     //alert(text);
  
             
      
    
    //     if(text == "gbi sampaio" || text == "gbi express" || text == "")  
    //     { 
  
    //       //document.getElementById('text').value = option.text;
    //         //alert ("erro");
    //         $('#alert-preencher-unidade').modal('show');
    //         $('#nome_cliente').focus();
    //     }
       
       
        
    //     else {
            
  
          //header("Location: login.php");
  
            // <script>window.setTimeout(function(){window.location=\'ajax-login.php\';}, 1000);</script>;
  
             //  var timer = setInterval(function() { alert(i++) }, 10000);
                 
                   // let dados = $(this).serialize();
                   // let dados = $(this).serialize();
                   $('#botCad').on('click', function(){ 
                    
                   $.ajax({
       
                     type: 'POST',
                     url:'../../update_materiais.php',		
                     //através do metodo abaixo é possivel enviar todo o formulario
                     data: $('form').serialize(),
                     dataType: 'json',
                     success: function (retorno){
                       console.log(retorno);   
                       //alert('erro ao cadastrar');                   
                       
                         if(retorno == "erro")
                        {
                         console.log(retorno);
                         //alert("erro ao cadastrar");
                         console.log('erro ao cadastrar');

                         let load = document.querySelector('#load');
                         load.style.display="flex";
                         let erro = document.querySelector('.erro');
                         setTimeout(() => {
                           erro.style.display="flex";
                           erro.innerHTML= "";
                           erroModal = document.querySelector('#ModalErro');
                           erroModal.style.display='flex';
   
                            
                          },"3000")
                          setTimeout(()=>{
                            load.style.display="none";
                          },"2000")
      
                          setTimeout(()=>{
                            window.location.href=('index.php');
                          },"6000");
      
        
                        // $('#alert-troca-existe').modal('show');
                         //console.log('nao encontrado');
                          
                        } 
                        
                        else  {
                        //alert("sucesso");
                         console.log(retorno);  
                         console.log('sucesso ao salva');  
                         let load = document.querySelector('#load');
                          load.style.display="flex";
                          let sucesso = document.querySelector('#ModalSucesso');
                          //let iconeSucesso = document.querySelector('.iconeSucesso');
                          setTimeout(() => {
                          sucesso.style.display="flex";
                          //iconeSucesso.style.display="flex";
                          //sucesso.innerHTML= "SUCESSO";
                        },"1000")
                        setTimeout(()=>{
                          load.style.display="none";
                        },"2000")
                        
                        setTimeout(()=>{
                          window.location.href=('index.php');
                        },"4000");
                          
  
                         //$('#success-cadastro').modal('show');                     
                        // window.location.href="index.php";
                         
                      
                                              
                    
                        }
                     
                      }

                    
                     
                   })
  
                 })
               // }
             
  
  
  
                }
     
      })
     })
     
     