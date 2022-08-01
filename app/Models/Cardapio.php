<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cardapio extends Model
{
    use HasFactory;
    protected $table = 'produtos';

    public static function getByText(String $text):array{
        return DB::select('select   p.id as idPrato,
                                    p.nome as nomePrato, 
                                    p.descricao as descricaoPrato, 
                                    p.preco as precoPrato,
                                    r.id as idRestaurante,
                                    r.nome as nomeRestaurante,
                                    r.telefone as telefoneRestaurante,
                                    r.email as emailRestaurante,
                                    r.endereco as enderecoRestaurante,
                                    r.descricao as descricaoRestaurante
	from produtos p inner join restaurantes r on (r.id = p.idRestaurante) where p.nome LIKE "%'.$text.'%" or p.descricao LIKE "%'.$text.'%" or r.nome LIKE "%'.$text.'%"');
    }
}
