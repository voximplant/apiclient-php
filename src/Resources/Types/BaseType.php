<?php

namespace Voximplant\Resources\Types;

class BaseType
{
	public $fieldMap;


	public function recursiveArraySearch($needle, $haystack, $currentKey = '', $result = [])
	{
		foreach($haystack as $key=>$value) {
		    if (is_array($value)) {
		        $status = $this->recursive_array_search($needle,$value, $currentKey . '[' . $key . ']', $result);
		        if ($status == 'stop') {
		            return $result;
		        } else {
		            $result = $status;
		        }
		    } else if($value==$needle) {
		        $result[] =  is_numeric($key) ? $currentKey . '[' .$key . ']' : $currentKey . '["' .$key . '"]';
		    }
		}

		if ($result) {
		    return $result;
		}

		return 'stop';
	}


	public function isHasTimestamp()
	{
		return $this->recursive_array_search('timestamp', $this->fieldMap);
	}


	public function isHasDate()
	{
		return $this->recursive_array_search('date', $this->fieldMap);
	}
}
