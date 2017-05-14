<?php
namespace SRP/Repository;

/**
* SalesRepository
*/
class SalesRepository
{
	public function between($start, $end)
	{
		return DB::table('sales')
				->whereBetween('created_at', [$start, $end])
				->sum('amount');
	}
}
