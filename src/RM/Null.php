<?php

namespace RM;

/**
 * @author Roman Mátyus <romanmatyus@romiix.org>
 */
class Null
{
	/**
	 * Allways return NULL
	 * @param  mixed $var
	 * @return bool Always NULL
	 */
	public static function get($var)
	{
		return NULL;
	}
}
