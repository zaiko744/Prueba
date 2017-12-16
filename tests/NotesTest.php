<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{	

	use WithoutMiddleware;	

    public function test_notes_list()
    {

    	Note::create(['note'=>'mi primera nota']);
		Note::create(['note'=>'mi segunda nota']);

        $this->visit('notes')
        	->see('mi primera nota')
        	->see('mi segunda nota');
    }
	
	public function test_create_note()
	{

        $this->post('notes')
        	->see('Crear una nota de post');
    }    
}
