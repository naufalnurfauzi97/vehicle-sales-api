<?php

namespace App\Repositories;

interface KendaraanRepositoryInterface
{
  public function getAll();
  public function create(array $data);
  public function getById($id);
  public function update($id, array $data);
  public function delete($id);
  public function getStokAll();
  public function getStokMotor();
  public function getStokMobil();
}
