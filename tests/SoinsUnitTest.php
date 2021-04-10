<?php

namespace App\Tests;

use App\Entity\Soins;
use PHPUnit\Framework\TestCase;

class SoinsUnitTest extends TestCase
{
        public function testIsTrue()
 {
     $soins =new Soins();
     $soins ->setTarif('10')
           ->setNom('nom')
           ->setDescription('description')
           ->setPhoto('photo');
     
     $this->assertTrue($soins->getTarif() === '10');
     $this->assertTrue($soins->getNom() === 'nom');
     $this->assertTrue($soins->getDescription() === 'description');
     $this->assertTrue($soins->getPhoto() === 'photo');
 }
 public function testIsFalse()
 {
     $soins =new Soins();
      $soins ->setTarif('10')
            ->setNom('nom')
            ->setDescription('description')
            ->setPhoto('photo');
     
     $this->assertFalse($soins->getTarif() === 'false@test.com');
     $this->assertFalse($soins->getNom() === 'false');
     $this->assertFalse($soins->getDescription() === 'false');
     $this->assertFalse($soins->getphoto() === 'false');
 }
 public function testIsEmpty()
 {
    $soins =new Soins();
     
     $this->assertEmpty($soins->getTarif());
     $this->assertEmpty($soins->getNom());
     $this->assertEmpty($soins->getDescription());
     $this->assertEmpty($soins->getPhoto());
 }
    }

