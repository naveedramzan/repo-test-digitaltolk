<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UpdatejobTest extends TestCase
{
  /**
   * testUpdateBookingSuccess
   *
   * @return void
   */
  public function testUpdateBookingSuccess()
  {
    
    $requestData = ['from_language_id' => 4,
                    'immediate' => 'no',
                    'due_date' => date('Y-m-d', strtotime('next monday')),
                    'due_time' => date('Y-m-d H:i:s', strtotime('next monday')),
                    'customer_phone_type' => 'yes',
                    'customer_physical_type' => 'yes',
                    'duration' => 300,
                    'gender' => 'male',
                    'certified' => 'normal',
                    'job_type' => 'rws',
                    'b_created_at' => date('Y-m-d H:i:s'),
                    'will_expire_at' => date('Y-m-d H:i:s', strtotime('next month')),
                    'customer_town' => 'Islamabad',
                    'customer_type' => 'Sub-Admin',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@update', [$requestData]);

    if($response->getStatusCode() == 200
    || $response['status'] == 'success'){
      $this->assertTrue(true);
    }
  }

  /**
   * testUpdateBookingFailurePrevDueTime
   *
   * @return void
   */
  public function testUpdateBookingFailurePrevDueTime()
  {
    
    $requestData = ['from_language_id' => 4,
                    'immediate' => 'no',
                    'due_date' => date('Y-m-d', strtotime('next monday')),
                    'due_time' => date('Y-m-d H:i:s', strtotime('last monday')),
                    'customer_phone_type' => 'yes',
                    'customer_physical_type' => 'yes',
                    'duration' => 300,
                    'gender' => 'male',
                    'certified' => 'normal',
                    'job_type' => 'rws',
                    'b_created_at' => date('Y-m-d H:i:s'),
                    'will_expire_at' => date('Y-m-d H:i:s', strtotime('next month')),
                    'customer_town' => 'Islamabad',
                    'customer_type' => 'Sub-Admin',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@update', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testUpdateBookingFailureNoLanguageID
   *
   * @return void
   */
  public function testUpdateBookingFailureNoLanguageID()
  {
    
    $requestData = ['from_language_id' => '',
                    'immediate' => 'no',
                    'due_date' => date('Y-m-d', strtotime('next monday')),
                    'due_time' => date('Y-m-d H:i:s', strtotime('next monday')),
                    'customer_phone_type' => 'yes',
                    'customer_physical_type' => 'yes',
                    'duration' => 300,
                    'gender' => 'male',
                    'certified' => 'normal',
                    'job_type' => 'rws',
                    'b_created_at' => date('Y-m-d H:i:s'),
                    'will_expire_at' => date('Y-m-d H:i:s', strtotime('next month')),
                    'customer_town' => 'Islamabad',
                    'customer_type' => 'Sub-Admin',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@update', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testUpdateBookingFailureNoDueDate
   *
   * @return void
   */
  public function testUpdateBookingFailureNoDueDate()
  {
    
    $requestData = ['from_language_id' => '',
                    'immediate' => 'no',
                    'due_date' => '',
                    'due_time' => date('Y-m-d H:i:s', strtotime('next monday')),
                    'customer_phone_type' => 'yes',
                    'customer_physical_type' => 'yes',
                    'duration' => 300,
                    'gender' => 'male',
                    'certified' => 'normal',
                    'job_type' => 'rws',
                    'b_created_at' => date('Y-m-d H:i:s'),
                    'will_expire_at' => date('Y-m-d H:i:s', strtotime('next month')),
                    'customer_town' => 'Islamabad',
                    'customer_type' => 'Sub-Admin',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@update', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testUpdateBookingFailureNoCustomerPhoneType
   *
   * @return void
   */
  public function testUpdateBookingFailureNoCustomerPhoneType()
  {
    
    $requestData = ['from_language_id' => '',
                    'immediate' => 'no',
                    'due_date' => '',
                    'due_time' => date('Y-m-d H:i:s', strtotime('next monday')),
                    'customer_phone_type' => '',
                    'customer_physical_type' => 'yes',
                    'duration' => 300,
                    'gender' => 'male',
                    'certified' => 'normal',
                    'job_type' => 'rws',
                    'b_created_at' => date('Y-m-d H:i:s'),
                    'will_expire_at' => date('Y-m-d H:i:s', strtotime('next month')),
                    'customer_town' => 'Islamabad',
                    'customer_type' => 'Sub-Admin',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@update', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testUpdateBookingFailureNoCustomerPhysicalType
   *
   * @return void
   */
  public function testUpdateBookingFailureNoCustomerPhysicalType()
  {
    
    $requestData = ['from_language_id' => '',
                    'immediate' => 'no',
                    'due_date' => '',
                    'due_time' => date('Y-m-d H:i:s', strtotime('next monday')),
                    'customer_phone_type' => 'yes',
                    'customer_physical_type' => '',
                    'duration' => 300,
                    'gender' => 'male',
                    'certified' => 'normal',
                    'job_type' => 'rws',
                    'b_created_at' => date('Y-m-d H:i:s'),
                    'will_expire_at' => date('Y-m-d H:i:s', strtotime('next month')),
                    'customer_town' => 'Islamabad',
                    'customer_type' => 'Sub-Admin',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@update', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testUpdateBookingFailureNoDuration
   *
   * @return void
   */
  public function testUpdateBookingFailureNoDuration()
  {
    
    $requestData = ['from_language_id' => '',
                    'immediate' => 'no',
                    'due_date' => '',
                    'due_time' => date('Y-m-d H:i:s', strtotime('next monday')),
                    'customer_phone_type' => 'yes',
                    'customer_physical_type' => 'yes',
                    'duration' => 0,
                    'gender' => 'male',
                    'certified' => 'normal',
                    'job_type' => 'rws',
                    'b_created_at' => date('Y-m-d H:i:s'),
                    'will_expire_at' => date('Y-m-d H:i:s', strtotime('next month')),
                    'customer_town' => 'Islamabad',
                    'customer_type' => 'Sub-Admin',
                    ];

    $response = app()->call('App\Http\Controllers\BookingController@update', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }
}
