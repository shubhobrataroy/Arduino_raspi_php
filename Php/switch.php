<?php
 $on='python "E:\Workspace\Control Arduino from your Browser\Arduino_raspi_php\Python\Python\lightOn.py"';
 $off='python "E:\Workspace\Control Arduino from your Browser\Arduino_raspi_php\Python\Python\lightOff.py"';

 if($_GET['switch']=='on')
     exec($on);
 else
     exec($off);
?>