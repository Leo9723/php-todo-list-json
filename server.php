<?php

$string = file_get_contents('todoList.json');

$todoList = json_decode($string, true);
