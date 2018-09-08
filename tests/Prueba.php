<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Prueba extends TestCase
{

    public function testExample()
    {
    	// Heaving
		Note::create(['nota'=>'Nota 1']);
		Note::create(['nota'=>'Nota 2']);

		// When			
        $this->visit('nota')
        	// then
        	->see('Nota 1')
        	->see('Nota 2');

    }
}
