<?php
 class monitor
{

    public function __construct(
        public readonly string $marcaMonitor,
        public readonly tipo_Situacao $situacao,
    ) {}

   
}