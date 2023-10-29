<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NecessidadeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Nome' => $this->NomeNecessidade,
            'Categoria' => $this->Categoria,
            'Descricao' => $this->descricao,
            'quantidade' => $this->quantidade,
            'meta' => $this->meta,
            'CaminhoFotosNecessidade' => $this->CaminhoFotosNecessidade,
            'Ong' => [
                'id_ong'=> $this->Ong->id,
                'seguimento_id' => $this->Ong->seguimento_id,
                'representante_id' => $this->Ong->representante_id,
                'NomeFantasia' => $this->Ong->NomeFantasia,
                'DataFundacao'=> $this->Ong->DataFundacao,
                'HoraDia' => $this->Ong->HoraDia,
                'SobreOng'=> $this->Ong->SobreOng,
                'LocalFotoPerfil' => $this->Ong->LocalFotoPerfil,
                'email' => $this->Ong->email,
                'email_contato' => $this->Ong->email_contato,
            ]
        ];
    }
}
