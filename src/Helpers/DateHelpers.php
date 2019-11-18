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
     * @param string $replace
     *
     * @return array
     * @throws \Exception
     */
    public function dateModify(array $params, $find, string $replace = ''): array
    {
        if (is_array($params)) {
            foreach ($params as $key => $val) {
                if (is_array($val)) {
                    if (!isset($find[$key])) {
                        if (is_numeric($key) && !empty($find['|array|'])) {
                            $find[$key] = $find['|array|'];
                        } else {
                            $find[$key] = [];
                        }
                    }

                    $params[$key] = $this->dateModify($params[$key], $find[$key], $replace);
                } else {
                    if (
                        !empty($find[$key]) &&
                        in_array($find[$key], ['date', 'timestamp']) &&
                        strtotime($val) &&
                        $replace
                    ) {
                        $dateTime = new DateTime($val);
                        $dateTime->setTimezone(new DateTimeZone($replace));
                        $params[$key] = $dateTime->format('Y-m-d H:i:s');
                    } else {
                        $params[$key] = $val;
                    }
                }
            }
        }

        return $params;
    }
}
