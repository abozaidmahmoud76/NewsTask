<?php

namespace App\Http\Resources\NewsSourceTwo;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsSourceTwoResource extends JsonResource
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
           'headline' => $this['description'],
           'link'     => $this['url']
       ];
    }
}
