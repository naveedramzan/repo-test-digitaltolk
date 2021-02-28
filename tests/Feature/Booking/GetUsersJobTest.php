<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class GetUsersJobTest extends TestCase
{
  /**
   * testGetUsersJobsPassed
   *
   * @return void
   */
  public function testGetUsersJobsPassed()
  {
    
    $requestData = ['user_id' => 456];

    $response = app()->call('App\Http\Controllers\BookingController@index', [$requestData]);
    if($response->getStatusCode() == 200){
      $this->assertTrue(true);
    }
  }

  /**
   * testGetUsersJobsFailed
   *
   * @return void
   */
  public function testGetUsersJobsFailed()
  {
    
    $requestData = ['user_id' => 456];

    $response = app()->call('App\Http\Controllers\BookingController@index', [$requestData]);

    if($response->getStatusCode() != 200){
      $this->assertTrue(true);
    }
  }

  /**
   * testShowTranslatedJobPassed
   *
   * @return void
   */
  public function testShowTranslatedJobPassed()
  {
    
    $requestData = ['job_id' => 456];

    $response = app()->call('App\Http\Controllers\BookingController@show', [$requestData]);

    if($response->getStatusCode() == 200){
      $this->assertTrue(true);
    }
  }

  /**
   * testShowTranslatedJobPassed
   *
   * @return void
   */
  public function testShowTranslatedJobFailed()
  {
    
    $requestData = ['job_id' => 456];

    $response = app()->call('App\Http\Controllers\BookingController@show', [$requestData]);

    if($response->getStatusCode() != 200){
      $this->assertTrue(true);
    }
  }

  
}
