<?php
include_once 'lib/config.inc.php';
include_once 'lib/classes.inc.php'; // Inclua o arquivo da classe TDentistas

class TDentistasTest {
    function testLoadDentista() {
        $dentista = new TDentistas();
        $codigoDentista = 1; // Altere o código do dentista conforme necessário
        $dadosDentista = $dentista->LoadDentista($codigoDentista);

        if ($dadosDentista) {
            echo "Dados do dentista:<pre>";
            print_r($dadosDentista);
            echo "</pre>";
        } else {
            echo "Dentista não encontrado.";
        }
    }
}

// Instancia e executa o teste
$test = new TDentistasTest();
$test->testLoadDentista();
?>
