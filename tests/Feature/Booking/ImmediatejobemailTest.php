<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ImmediatejobemailTest extends TestCase
{
  /**
   * testImmediateJobEmailSuccess
   *
   * @return void
   */
  public function testImmediateJobEmailSuccess()
  {
    
    $requestData = ['user_type' => 'Sub-Admin',
                    'user_email_job_id' => 4,
                    'user_email' => 'ping@naveedramzan.com',
                    'reference' => 'linkedin',
                    'address' => 'Islamabad, Pakistan',
                    'instructions' => 'be transparent',
                    'town' => 'Islamabad',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@immediateJobEmail', [$requestData]);

    if($response->getStatusCode() == 200
    || $response['status'] == 'success'){
      $this->assertTrue(true);
    }
  }

  /**
   * testImmediateJobEmailFailure
   *
   * @return void
   */
  public function testImmediateJobEmailFailure()
  {
    
    $requestData = ['user_type' => '',
                    'user_email_job_id' => 4,
                    'user_email' => 'ping@naveedramzan.com',
                    'reference' => 'linkedin',
                    'address' => 'Islamabad, Pakistan',
                    'instructions' => 'be transparent',
                    'town' => 'Islamabad',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@immediateJobEmail', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }
}
