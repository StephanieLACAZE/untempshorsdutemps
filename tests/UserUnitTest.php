<?php

namespace App\Tests;

use App\Entity\Utilisateurs;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $utilisateurs =new Utilisateurs();

        $utilisateurs ->setEmail('true@test.com')
              ->setPrenom('prenom')
              ->setNom('nom')
              ->setMotdepasse('password')
              ->setIdentifiant('identifiant');
        
        $this->assertTrue($utilisateurs->getEmail() === 'true@test.com');
        $this->assertTrue($utilisateurs->getPrenom() === 'prenom');
        $this->assertTrue($utilisateurs->getNom() === 'nom');
        $this->assertTrue($utilisateurs->getMotdepasse() === 'password');
        $this->assertTrue($utilisateurs->getIdentifiant() === 'identifiant');
    }
    public function testIsFalse()
    {
        $utilisateurs =new Utilisateurs();
        $utilisateurs ->setEmail('true@test.com')
              ->setPrenom('prenom')
              ->setNom('nom')
              ->setMotdepasse('password')
              ->setIdentifiant('identifiant');
        
        $this->assertFalse($utilisateurs->getEmail() === 'false@test.com');
        $this->assertFalse($utilisateurs->getPrenom() === 'false');
        $this->assertFalse($utilisateurs->getNom() === 'false');
        $this->assertFalse($utilisateurs->getMotdepasse() === 'false');
        $this->assertFalse($utilisateurs->getIdentifiant() === 'false');
    }
    public function testIsEmpty()
    {
        $utilisateurs =new Utilisateurs();

        
        $this->assertEmpty($utilisateurs->getEmail());
        $this->assertEmpty($utilisateurs->getPrenom());
        $this->assertEmpty($utilisateurs->getNom());
        $this->assertEmpty($utilisateurs->getMotdepasse());
        $this->assertEmpty($utilisateurs->getIdentifiant());
    }

}
