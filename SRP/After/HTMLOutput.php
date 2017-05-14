<?php

/**
* HTMLOutput
*/
class HTMLOutput implements SalesOutputInterface
{
	public function output($value)
	{
		return "<H2>Sales : $value</H2>";
	}
}
