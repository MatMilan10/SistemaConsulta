<?php

    class Medico{

        function __construct(public $nome, public $especialidade, public int $crm){
            echo "Medico inserido com sucesso.";
        }
    }

?>