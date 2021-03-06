<?php
/*
    Projeto: MobShare
    Autor: Igor
    Data Criação: 23/03/2019
    Data Modificação: 08/04/2019
    Conteudo Modificação: Separação por parte para ficar melhor
    Autor da Modificação: Igor
    Objetivo: Arquivo com constantes e funções para ser incluído em outros arquivos
*/

//Verificaa se o arquivo já foi importado
if(!isset($incluso)){
    
    //Set uma variável para verificar se o arquivo foi importado
    $incluso = true;

    /*----------------------------------------------------------------------*/
    /*--------------------------- BANCO DE DADOS ---------------------------*/
    /*----------------------------------------------------------------------*/

    //Constantes de Banco de dados
    define("SELECT","SELECT * FROM ");
    define("INSERT","INSERT INTO ");
    define("UPDATE","UPDATE ");
    define("DELETE","DELETE FROM ");

    define("ERRO_SCRIPT","Erro de script.<br>");
    define("SUCESSO_SCRIPT","Script executado com sucesso.<br>");

    //Constantes com o nome das tabelas
    define("TABELA_FUNCIONARIO", "usuario_web");
    define("TABELA_NIVEL", "nivel");
    define("TABELA_PARCEIRO", "parceiro");
    define("TABELA_FUNCIONAMENTO", "funcionamento");
    define("TABELA_CLIENTE", "Cliente");
    define("TABELA_VEICULO", "Veiculo");
    define("TABELA_FOTO_VEICULO", "Foto_Veiculo");    

    //Constantes com o nome das views
    define("VIEW_VEICULO", "VPendencia_Veiculo");
    define("VIEW_USUARIO", "VPendencia_Cliente");

    /*---------------------------------------------------------------*/
    /*--------------------------- NÚMEROS ---------------------------*/
    /*---------------------------------------------------------------*/

    //Permissao de modulos cada módulo. Cada módulo terá 1 bit, se estiver ligado
    //significa que ele terá acesso ao módulo
    define("MODULO_FUNCIONARIO",0b1000000);
    define("MODULO_MARKETING",  0b0100000);
    define("MODULO_LOCACAO",    0b0010000);
    define("MODULO_PAGINA",     0b0001000);
    define("MODULO_APROVACAO",  0b0000100);
    define("MODULO_CONTATO",    0b0000010);
    define("MODULO_RELATORIO",  0b0000001);

    //Constantes de pendencia
    define("PENDENCIA_ABERTA",  0b1);
    define("PENDENCIA_FECHADA", 0b0);

    /*---------------------------------------------------------------*/
    /*--------------------------- CLASSES ---------------------------*/
    /*---------------------------------------------------------------*/

    //Constantes com endereço da pasta para importar
    define("PASTA_RAIZ" , $_SERVER["DOCUMENT_ROOT"]);
    define("PASTA_PROJETO", "/Mobshare");

    //Import de conexão com o banco
    define("IMPORT_CONEXAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/conexaoMySQL.php");

    //Imports de nível
    define("IMPORT_NIVEL", PASTA_RAIZ . PASTA_PROJETO . "/model/nivelClass.php");
    define("IMPORT_NIVEL_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/nivelDAO.php");
    define("IMPORT_NIVEL_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerNivel.php");

    //Imports de funcionario
    define("IMPORT_FUNCIONARIO", PASTA_RAIZ . PASTA_PROJETO . "/model/funcionarioClass.php");
    define("IMPORT_FUNCIONARIO_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/funcionarioDAO.php");
    define("IMPORT_FUNCIONARIO_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerfuncionario.php");

    //Imports de pendencia
    define("IMPORT_PENDENCIA", PASTA_RAIZ . PASTA_PROJETO . "/model/pendenciaClass.php");
    define("IMPORT_PENDENCIA_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/pendenciaDAO.php");
    define("IMPORT_PENDENCIA_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerPendencia.php");

    //Imports de Parceiros
    define("IMPORT_PARCEIRO", PASTA_RAIZ . PASTA_PROJETO . "/model/parceiroClass.php");
    define("IMPORT_PARCEIRO_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/parceiroDAO.php");
    define("IMPORT_PARCEIRO_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerParceiro.php");

    //Imports de Funcionamento
    define("IMPORT_FUNCIONAMENTO", PASTA_RAIZ . PASTA_PROJETO . "/model/funcionamentoClass.php");
    define("IMPORT_FUNCIONAMENTO_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/funcionamentoDAO.php");
    define("IMPORT_FUNCIONAMENTO_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerFuncionamento.php");

    //Imports de clientes
    define("IMPORT_CLIENTE", PASTA_RAIZ . PASTA_PROJETO . "/model/clienteClass.php");
    define("IMPORT_CLIENTE_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/clienteDAO.php");
    define("IMPORT_CLIENTE_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllercliente.php");

    //Imports de veiculo
    define("IMPORT_VEICULO", PASTA_RAIZ . PASTA_PROJETO . "/model/veiculoClass.php");
    define("IMPORT_VEICULO_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/veiculoDAO.php");
    define("IMPORT_VEICULO_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerVeiculo.php");    



    //Imports de foto veiculo
    define("IMPORT_FOTO_VEICULO", PASTA_RAIZ . PASTA_PROJETO . "/model/foto_veiculoClass.php");
    define("IMPORT_FOTO_VEICULO_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/foto_veiculoDAO.php");
    define("IMPORT_FOTO_VEICULO_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerFoto_Veiculo.php"); 
    


    //Imports de foto veiculo
    define("IMPORT_BANNER", PASTA_RAIZ . PASTA_PROJETO . "/model/bannerClass.php");
    define("IMPORT_BANNER_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/bannerDAO.php");
    define("IMPORT_BANNER_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerBanner.php");     


    //Imports de foto marca
    define("IMPORT_MARCA", PASTA_RAIZ . PASTA_PROJETO . "/model/marcaClass.php");
    define("IMPORT_MARCA_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/marcaDAO.php");
    define("IMPORT_MARCA_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerMarca.php"); 
    
    //Imports de foto marca
    define("IMPORT_MODELO", PASTA_RAIZ . PASTA_PROJETO . "/model/modeloClass.php");
    define("IMPORT_MODELO_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/modeloDAO.php");
    define("IMPORT_MODELO_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerModelo.php");  
    
    
    //Imports de foto marca
    define("IMPORT_CANCELAMENTO", PASTA_RAIZ . PASTA_PROJETO . "/model/cancelamentoClass.php");
    define("IMPORT_CANCELAMENTO_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/cancelamentoDAO.php");
    define("IMPORT_CANCELAMENTO_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerCancelamento.php");  

    //Imports de foto Vvisualizacao_cancelamento
    define("IMPORT_VVISUALIZACAO_CANCELAMENTO", PASTA_RAIZ . PASTA_PROJETO . "/model/vvisualizacao_cancelamentoClass.php");
    define("IMPORT_VVISUALIZACAO_CANCELAMENTO_DAO", PASTA_RAIZ . PASTA_PROJETO . "/model/DAO/vvisualizacao_cancelamentoDAO.php");
    //define("IMPORT_CANCELAMENTO_CONTROLLER", PASTA_RAIZ . PASTA_PROJETO . "/controller/controllerCancelamento.php");      


    /*---------------------------------------------------------------*/
    /*--------------------------- PÁGINAS ---------------------------*/
    /*---------------------------------------------------------------*/

    //Imports de páginas do cms
    define("IMPORT_CMS_HOME", PASTA_RAIZ . PASTA_PROJETO . "/CMS/view/home.php");
    define("IMPORT_CMS_LOGIN", PASTA_RAIZ . PASTA_PROJETO . "/CMS/view/login.php");
    define("IMPORT_CMS_INDEX", PASTA_RAIZ . PASTA_PROJETO . "/CMS/index.php");

    //Import páginas de nível
    define("IMPORT_CMS_CADASTRO_NIVEL", PASTA_RAIZ . PASTA_PROJETO . "/CMS/view/nivel/nivel.php");

    //Import páginas de funcionario
    define("IMPORT_CMS_CADASTRO_FUNCIONARIO", PASTA_RAIZ . PASTA_PROJETO . "/CMS/view/funcionario/funcionario.php");

    //Import páginas de parceiro
    define("IMPORT_CMS_CADASTRO_PARCEIRO", PASTA_RAIZ . PASTA_PROJETO . "/CMS/view/parceiro/parceiro.php");

    //Import páginas de funcionamento
    define("IMPORT_CMS_CADASTRO_FUNCIONAMENTO", PASTA_RAIZ . PASTA_PROJETO . "/CMS/view/comoFunciona/comoFunciona.php");

    //Import páginas de banner
    define("IMPORT_CADASTRO_BANNER", PASTA_RAIZ . PASTA_PROJETO . "/view/banner/banner.php");

    //Imports de páginas do site
    define("IMPORT_SITE_HOME", PASTA_RAIZ . PASTA_PROJETO . "/SITE/view/home.php");
    define("IMPORT_SITE_LOGIN", PASTA_RAIZ . PASTA_PROJETO . "/SITE/view/login.php");
    define("IMPORT_SITE_INDEX", PASTA_RAIZ . PASTA_PROJETO . "/SITE/index.php");

    /*---------------------------------------------------------------*/
    /*--------------------------- FUNÇÕES ---------------------------*/
    /*---------------------------------------------------------------*/

    //Essa função recebe o número de permissão e o número do módulo para
    //verificar se tem acesso ao módulo
    function acessoModulo($permissoes, $modulo){
        //Retira as permissões dos módulos anteriores para comparar
        $permissoesModulo = $permissoes % ($modulo*2);
        //Verificar se a permissão é maior ou igual ao módulo se for
        //ele tem acesso ao módulo(bit ligado)
        if($permissoesModulo >= $modulo){
            return true;
        }else{
            return false;
        }
    }

    //Função para tratar a imagem recebida do upload
    //Função para tratar a imagem recebida do upload
    function enviarImagem($item){
        
        $foto = $item['name'];
        $tamanho_foto = $item['size'];
        $tamanho_foto = round($tamanho_foto/1024);
        $ext_foto = strrchr($foto, ".");
        $nome_foto = pathinfo($foto, PATHINFO_FILENAME);
        $nome_foto = md5(uniqid(time()).$nome_foto);
        $diretorio = "C:/xampp/htdocs/Mobshare/arquivos/";
        $extensao = array(".jpg",".png",".jpeg");
        if(in_array($ext_foto, $extensao)){
            if($tamanho_foto<=2000){
                $foto_tmp = $item['tmp_name'];
                $arquivo = $nome_foto.$ext_foto;
                
                if(move_uploaded_file($foto_tmp, $diretorio.$arquivo)){
                    return $arquivo;
                }else{
                    $arquivo = null;
                    return $arquivo;
                }
                return $arquivo;
            }
        }
        return $arquivo;
    }
}
?>