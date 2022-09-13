<?php

namespace App\Modulos\Comercial\Entidades\Cliente\Contatos;

use App\Modulos\Compras\Entidades\Fornecedor\Endereco;
use Util\AbstractCollection;

class EnderecoCollection extends AbstractCollection
{
    public function adicionar(Endereco $endereco): void
    {
        $this->add($endereco);
    }
}