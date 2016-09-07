<?php

namespace CakeWeb;

final class Registry
{
	private static $values = [];

	public static function set($name, $value)
	{
		self::$values[$name] = $value;
		return $value;
	}

	public static function get($name, $defaultValue = null)
	{
		return isset(self::$values[$name])
			? self::$values[$name]
			: $defaultValue;
	}
}