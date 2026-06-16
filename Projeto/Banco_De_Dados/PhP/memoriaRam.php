<?php
 class memoriaRam extends armazenamento
{

    public function __construct(
        string $marca,
        string $capacidade,
        public readonly string $modeloRam,
       
    ) {
        parent::__construct($marca,$capacidade);
    }


}