int long [
	to   [ $arg = ($type)Z_LVAL($var); ]
	from [ ZVAL_LONG($var, $arg); ]
	spec [l]
]

char [
	to [ ]
	from [ ZVAL_STRINGL($var, &$arg, 1, 1); ]
	spec [s]
]

char* [
	to   [ $arg = ($type)Z_STRVAL($var); ]
	from [ ZVAL_STRING($var, $arg, 1); ]
	spec [s]
]
