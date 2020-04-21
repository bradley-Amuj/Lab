<?php

/**
 *
 */
interface Crud
{
  public function save();
  public function readUnique();
  public function readAll();
  public function search();
  public function removeAll();
  public function update();
  public function removeOne();

}


 ?>
