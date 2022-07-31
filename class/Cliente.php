<?php
    
    class Cliente extends Crud{
        function __construct(
            public $nome,
            public $cpf,
            public $data_cad,
            public $telefone,
            public $email,
            public $cep,
            public $endereco,
            public $numero
            ){
                echo "Cliente cadastrado com sucesso.";
        }
    }

?>