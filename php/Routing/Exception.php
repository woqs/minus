<?php
namespace Routing;

class Exception extends \Exception
{
	function __construct($message, $code)
	{
		http_response_code($code);
		parent::__construct($message, $code);
	}
}
