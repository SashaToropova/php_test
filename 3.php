<?php


function do_something($param_1,$param_2)
{
printf("Line:%s\nFile:%s\nFunction:%s\n",__LINE__,__FILE__,__FUNCTION__);
$numargs = func_num_args();
$arg_list = func_get_args();
for($i =1; $i<$numargs;$i++)
{
    echo "Parametr $i = ".$arg_list[$i]."\n";
}
return true;
}
do_something(4,5);
?>