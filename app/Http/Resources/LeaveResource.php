<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeaveResource extends JsonResource
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
            'id' => $this->id,
            'leave_date' => $this->leave_date,
            'duration' => $this->duration,
            'reason' => $this->reason,
            'user_id' => $this->user_id,
            'user' => $this->user,
        ];
    }
}
