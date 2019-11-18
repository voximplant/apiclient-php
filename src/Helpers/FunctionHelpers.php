<?php

namespace Voximplant\Helpers;

class FunctionHelpers
{
    /**
     * Generate array params.
     *
     * @param array $params
     *
     * @return array
     */
    public function generateArrayParams(array $params = []): array
    {
        foreach ($params as $keyItemParam => $itemParam) {
            if (is_array($itemParam)) {
                $params[$keyItemParam] = '';
                foreach ($itemParam as $iParam) {
                    $params[$keyItemParam] .= $iParam;
                    $params[$keyItemParam] .= ';';
                }
                $params[$keyItemParam] = rtrim($params[$keyItemParam], ';');
            }
        }

        return $params;
    }
}
