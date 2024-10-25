
<?php
    
    include "conexao.php";
    
    // Comando sql
    $sql = "SELECT * FROM tb_clientes";
    
    // Preparando a conexão
    $consultar = $pdo->prepare($sql);
    
    // tentando executar
    try{
        $consultar -> execute();
        $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultados as $item){
            $nome = $item['nome_cliente'];
            $cpf = $item['cpf_cliente'];
            $data_nasc = $item['data_nascimento'];
            $telefone = $item['celular_cliente'];
    
            echo "<div id='informacao'>
                        Nome: $nome <br> <br>
                        CPF: $cpf <br>  <br>
                        Data de nascimento: $data_nasc <br> <br>
                        Número :$telefone <br> <br>
    
                        <a href='' >
                            <button>Editar</button>
                        </a>
    
                        <a href='' >
                            <button>Deletar</button>
                        </a>
                    </div>";
        }
    
    }catch(PDOException $erro){
        echo "Não foi possivel conferir os dados :/" . $erro->getMessage();
    }
    
    
?>