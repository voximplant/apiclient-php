<?php

namespace Voximplant\Helpers;

use DateTime;
use DateTimeZone;

class DateHelpers
{
    /**
     * Convert fields to UTC TimeZone format.
     *
     * @param array $params
     * @param $find
     * @param string $timeZone
     *
     * @return array
     * @throws \Exception
     */
    public function dateModify(array $params, $find, string $timeZone): array
    {
        if (is_array($params)) {
            foreach ($params as $key => $val) {
                if (is_array($val)) {
                    $params[$key] = $this->dateModify($params[$key], $this->step($find, $key), $timeZone);
                } else {
                    $params[$key] = $this->isDate($find, $key, $val, $timeZone) ? $this->setDate($val, $timeZone) : $val;
                }
            }
        }

        return $params;
    }

    /**
     * @param $val
     * @param $timeZone
     *
     * @throws \Exception
     * @return string
     */
    public function setDate(string $val, string $timeZone): string
    {
        $dateTime = new DateTime($val);
        $dateTime->setTimezone(new DateTimeZone($timeZone));

        return $dateTime->format('Y-m-d H:i:s');
    }

    /**
     * @param $find
     * @param $key
     * @param $val
     * @param $timeZone
     *
     * @return bool
     */
    public function isDate($find, $key, $val, $timeZone): bool
    {
        return (
            !empty($find[$key]) && in_array($find[$key], ['date', 'timestamp']) && strtotime($val) && $timeZone
        ) ? true : false;
    }

    /**
     * @param $find
     * @param $key
     *
     * @return mixed
     */
    public function step($find, $key)
    {
        if (!isset($find[$key])) {
            $find[$key] = (is_numeric($key) && !empty($find['|array|'])) ? $find['|array|'] : [];
        }

        return $find[$key];
    }
}
