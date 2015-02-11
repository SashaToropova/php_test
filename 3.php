<?php


function do_something($param_1,$param_2)
{
printf("Line:%s\nFile:%s\nFunction:%s\n",__LINE__,__FILE__,__FUNCTION__);
return true;
}
do_something(4,5);
?>