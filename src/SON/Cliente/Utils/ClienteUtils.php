<?php

namespace SON\Cliente\Utils;

use SON\Cliente\Types\PessoaFisicaType;
use SON\Cliente\Types\PessoaJuridicaType;

class ClienteUtils
{

    public static function cria10Clientes(){

        $cliente1 = new PessoaFisicaType("Andre","1234-5678","Rua 1 do Brasil","456.654.652.31","123.456.789-7");
        $cliente2 = new PessoaFisicaType("Paulo","1234-5678","Rua 2 do Brasil","456.654.652.31","123.456.789-7");
        $cliente3 = new PessoaFisicaType("Marina","1234-5678","Rua 3 do Brasil","456.654.652.31","123.456.789-7");
        $cliente4 = new PessoaFisicaType("Lucas","1234-5678","Rua 4 do Brasil","456.654.652.31","123.456.789-7");
        $cliente5 = new PessoaFisicaType("Debora","1234-5678","Rua 5 do Brasil","456.654.652.31","123.456.789-7");
        $cliente6 = new PessoaJuridicaType("Scofield","1234-5678","Rua 6 do Brasil","456.654.652.31","123.456.789-7");
        $cliente7 = new PessoaJuridicaType("Mark","1234-5678","Rua 7 do Brasil","456.654.652.31","123.456.789-7");
        $cliente8 = new PessoaJuridicaType("Chloe Price","1234-5678","Rua 8 do Brasil","456.654.652.31","123.456.789-7");
        $cliente9 = new PessoaJuridicaType("Jefferson","1234-5678","Rua 9 do Brasil","456.654.652.31","123.456.789-7");
        $cliente10 = new PessoaJuridicaType("Maxine Caulfield","1234-5678","Rua 10 do Brasil","456.654.652.31","123.456.789-7");

        $arrayClientes = [$cliente1,$cliente2,$cliente3,$cliente4,$cliente5,$cliente6,$cliente7,$cliente8,$cliente9,$cliente10];

        return $arrayClientes;
    }
}