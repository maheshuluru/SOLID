<?php
/**
* SalesReport
*/
class SalesReporter
{
	public function between($start, $end)
	{
		if (!Auth::check()) throw new Exception("Unauthenticated");
		$sales = $this->queryDBForSalesBetween($start, $end);
		return $this->format($sales);
	}

	private function queryDBForSalesBetween($start, $end)
	{
		return DB::table('sales')
				->whereBetween('created_at', [$start, $end])
				->sum('amount');
	}

	public function format($value)
	{
		return "<H2>Sales : $value</H2>";
	}
}