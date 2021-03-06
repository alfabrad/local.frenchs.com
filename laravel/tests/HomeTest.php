<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * A basic test example.
   *
   * @return void
   */
  public function testHomeAvailability()
  {
      $this->visit( '/' )
           ->assertResponseOk();
  }
}
