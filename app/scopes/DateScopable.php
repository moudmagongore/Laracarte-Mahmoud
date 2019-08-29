<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

trait DateScopable
{
	 public function scopeTwoMonthsOld(Builder $query)
    {
    	$query->where('created_at', '<=', Carbon::parse('1 month ago'));
    }
}