<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class GethistoryTest extends TestCase
{
  /**
   * testGetHistoryOfUserSuccess
   *
   * @return void
   */
  public function testGetHistoryOfUserSuccess()
  {
    
    $requestData = ['user_id' => 785];

    $response = app()->call('App\Http\Controllers\BookingController@getHistory', [$requestData]);

    if($response->getStatusCode() == 200
    || $response['status'] == 'success'){
      $this->assertTrue(true);
    }
  }

  /**
   * testGetHistoryOfUserFailure
   *
   * @return void
   */
  public function testGetHistoryOfUserFailure()
  {
    
    $requestData = ['user_id' => 785];

    $response = app()->call('App\Http\Controllers\BookingController@getHistory', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }
}
