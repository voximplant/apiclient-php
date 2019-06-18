<?php

namespace Voximplant\Helpers;

use DateTime;
use DateTimeZone;

class DateHelpers
{
	/**
	 * Convert date fields to UTC TimeZone format
	 */
	public function dateModify($array, $find = '', $replace = '')
	{
		if (is_array($array) || is_object($array)) {

		    foreach($array as $key => $val) {

		        if (is_array($val)) {
		            if (!isset($find[$key])) {
		                if (is_numeric($key) && !empty($find['|array|'])) {
		                    $find[$key] = $find['|array|'];
		                } else {
		                    $find[$key] = [];
		                }
		            }

		            $array[$key] = $this->dateModify($array[$key], $find[$key], $replace);

		        } else {

		            if (
		                !empty($find[$key]) &&
		                in_array($find[$key], ['date', 'timestamp']) &&
		                strtotime($val) &&
		                $replace
		            ) {
		                $dateTime = new DateTime($val);
		                $dateTime->setTimezone(new DateTimeZone($replace));
		                $array[$key] = $dateTime->format('Y-m-d H:i:s');
		            } else {
		                $array[$key] = $val;
		            }
		        }
		    }
		}

		return $array;
	}
}
