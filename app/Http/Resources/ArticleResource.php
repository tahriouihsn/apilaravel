<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code'=> $this->id,
            'titre'=>$this->title,
            'contenu'=>$this->content,
            'category'=>[
            'code'=> $this->category_id,
            'libelle'=>$this->category->label,
            ]
    ];
    }
}
