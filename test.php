<?

require_once("C.php");
$function1 = <<<EOF
PHP_FUNCTION(times) 
{
    long i,j;
    if (zend_parse_parameters(ZEND_NUM_ARGS()  TSRMLS_CC, "ll", &i,&j) == FAILURE) {
        WRONG_PARAM_COUNT;
    }
    RETURN_LONG(i*j);
}

EOF;

$function2 = <<<EOF
PHP_FUNCTION(cube)
{
    long i;
    if (zend_parse_parameters(ZEND_NUM_ARGS()  TSRMLS_CC, "l", &i) == FAILURE) {
        WRONG_PARAM_COUNT;
    }
    RETURN_LONG(i*i*i);
}

EOF;

$inline = new Inline_C;
$inline->add_code($function1);
$inline->add_code($function2);
// To link against libfoo
//$inline->library("sp","/usr/local/lib");
$inline->compile();
for($i=0;$i<10;$i++) {
    for($j=0; $j<10; $j++) {
        print "$i * $j = ".times($i,$j)."\n";
    }
}
for($i=0;$i<10; $i++) {
    print "$i^3 = ".cube($i)."\n";
}

?>
