<?php
 class processador
{

    public function __construct(
        public readonly string $marcaProcessador,
        public readonly string $potenciaProcessador,
        public readonly tipo_Situacao $situacao,
    ) {}

       
}