<?php

class Var_List {
	var $vars = array();
	var $indent = '    ';

	function add($c_type, $name)
	{
		$this->vars[$c_type][] = $name;
	}

	function to_string()
	{
		$result = array();
		foreach (array_keys($this->vars) as $c_type)
			$result[] = "$this->indent$c_type " . implode(', ', $this->vars[$c_type]) .  ";\n";
		if (count($result)) {
			$result[] = "\n";
			return implode('', $result);
		} else
			return '';
	}
}

?>
