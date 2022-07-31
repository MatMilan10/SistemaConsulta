<?php

    class Consulta{

        function __construct(public $paciente, public $medico, public $data_cons, public $data_agen){
            echo "Consulta marcada com sucesso.";
        }
    }

?>