<?php

namespace App\Domain\Leads;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Leads\Lead;

class LeadRepository extends Model
{
    public function store($data)
    {
        if (!$lead = $this->find($data['email'])) {
            return Lead::create($data);
        } else {
            return $lead->update($data);
        }
    }

    public function find($email)
    {
        return Lead::where('email', $email)->first();
    }
}
