<?php
interface UserOperation
{
    public function getData();
    public function addUser($f, $l, $c);
    public function deleteUser($i);
    public function updateUser($f, $l, $c, $i);
}
