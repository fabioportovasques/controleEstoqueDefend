
<?php 


$produto_codProd = $_POST['produto_codProd'];
// $nomeProd = $_POST['nomeProd'];
$dataInicialCadastro = $_POST['dataInicialCadastro'];
$dataFinalCadastro = $_POST['dataFinalCadastro'];
$pessoa_codPessoa = $_POST['pessoa_codPessoa'];
$nomeAutorizado = $_POST['nomeAutorizado'];
$nomeLiberacao = $_POST['nomeLiberacao'];
$situacaoCadastro = $_POST['situacaoCadastro'];
$empresaServico_codEmpresa = $_POST['empresaServico_codEmpresa'];
$obsCadastro = $_POST['obsCadastro'];

class Lancamento {


private $pdo;

public function __construct( ) {

//conexão banco de dados



try {

	$this -> pdo = new PDO("mysql:dbname=controle-estoque;host=localhost","fabio","F@bio102030");

} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();


}

}

//create



public function adicionar ($produto_codProd,$dataInicialCadastro,$dataFinalCadastro,
$pessoa_codPessoa,$nomeAutorizado,$nomeLiberacao,$situacaoCadastro,$empresaServico_codEmpresa,$obsCadastro) {
 if($this->verificaCod($produto_codProd) == false) {
    $sql = $this->pdo->prepare("INSERT INTO lancamento SET  produto_codProd=:produto_codProd,
    dataInicialCadastro=:dataInicialCadastro,dataFinalCadastro=:dataFinalCadastro,pessoa_codPessoa=:pessoa_codPessoa,
    nomeAutorizado=:nomeAutorizado,nomeLiberacao=:nomeLiberacao,situacaoCadastro=:situacaoCadastro,
    empresaServico_codEmpresa=:empresaServico_codEmpresa,obsCadastro=:obsCadastro");
    

    $sql->bindParam(":produto_codProd",$produto_codProd);
    $sql->bindParam(":dataInicialCadastro",$dataInicialCadastro);
    $sql->bindParam(":dataFinalCadastro",$dataFinalCadastro);
    $sql->bindParam(":pessoa_codPessoa",$pessoa_codPessoa);
    $sql->bindParam(":nomeAutorizado",$nomeAutorizado);
    $sql->bindParam(":nomeLiberacao",$nomeLiberacao);
    $sql->bindParam(":situacaoCadastro",$situacaoCadastro);
    $sql->bindParam(":empresaServico_codEmpresa",$empresaServico_codEmpresa);
    $sql->bindParam(":obsCadastro",$obsCadastro);
    $sql->execute();

    echo json_encode($sql);

    }else {
       
        echo json_encode("erro");
    }

}

private function verificaCod ($produto_codProd) {

    $sql = "SELECT * FROM lancamento WHERE produto_codProd=:produto_codProd";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':produto_codProd', $produto_codProd);
    $sql->execute();

    if($sql->rowCount() > 0) {
        return true;
    } else {
        return false;
    }


}






}