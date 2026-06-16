<?php
 class fonte
{

    public function __construct(
        public readonly string $marcaFonte,
        public readonly string $potenciaFonte,
        public readonly tipo_Situacao $situacao,
    ) {}

   
}