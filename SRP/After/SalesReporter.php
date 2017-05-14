<?php

/**
* SalesReport
*/
class SalesReport
{
	protected $repo;

	function __construct(SalesRepository $repo)
	{
		$this->repo = $repo;
	}

	public function between($start, $end, SalesOutputInterface $formatter)
	{
		$sales = $this->repo->between($start, $end);
		return $formatter->output($sales);
	}
}