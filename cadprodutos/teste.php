<?php

    $nome = 'Arthur';

    $Arthur = 'Beijamim';

    echo 'O meu nome é '.$$nome;

    if ($nome == 'guilherme') {
        echo 'verdadeiro';       
    } else {
        echo 'falso';
    }

    for ($i = 0; $i <10; $i++) {
        echo $i;
        echo '<hr>';
    }

    $i = 0;

    while ($i < 10) {
        echo $i;
        echo '<br>';
        $i++;
    }

    function printalgo($algo) {
        echo $algo;
    }

    class pessoa {
        public $nome;
        public $idade;

        public function __construct($name,$idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function printnomeeidade() {
            echo $this->inome;
            echo '<br>';
            echo$this->idade;
        }
    }

    $pessoa = new pessoa('Beijamim','16');
    $pessoa->printnomeeidade();
    echo '<br>';

    $pessoa2 = new pessoa('Beijamim','16');
    $pessoa->printnomeeidade();

    $arr = {'Mirelly','Arthur','Gabriel'};
    echo $arr[0];
