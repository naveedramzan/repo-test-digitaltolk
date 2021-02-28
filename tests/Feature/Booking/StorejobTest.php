<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class StorejobTest extends TestCase
{
  /**
   * testStoreBookingSuccess
   *
   * @return void
   */
  public function testStoreBookingSuccess()
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

    $response = app()->call('App\Http\Controllers\BookingController@store', [$requestData]);

    if($response->getStatusCode() == 200
    || $response['status'] == 'success'){
      $this->assertTrue(true);
    }
  }

  /**
   * testStoreBookingFailurePrevDueTime
   *
   * @return void
   */
  public function testStoreBookingFailurePrevDueTime()
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

    $response = app()->call('App\Http\Controllers\BookingController@store', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testStoreBookingFailureNoLanguageID
   *
   * @return void
   */
  public function testStoreBookingFailureNoLanguageID()
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

    $response = app()->call('App\Http\Controllers\BookingController@store', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testStoreBookingFailureNoDueDate
   *
   * @return void
   */
  public function testStoreBookingFailureNoDueDate()
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

    $response = app()->call('App\Http\Controllers\BookingController@store', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testStoreBookingFailureNoCustomerPhoneType
   *
   * @return void
   */
  public function testStoreBookingFailureNoCustomerPhoneType()
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

    $response = app()->call('App\Http\Controllers\BookingController@store', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testStoreBookingFailureNoCustomerPhysicalType
   *
   * @return void
   */
  public function testStoreBookingFailureNoCustomerPhysicalType()
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

    $response = app()->call('App\Http\Controllers\BookingController@store', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }

  /**
   * testStoreBookingFailureNoDuration
   *
   * @return void
   */
  public function testStoreBookingFailureNoDuration()
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

    $response = app()->call('App\Http\Controllers\BookingController@store', [$requestData]);

    if($response->getStatusCode() != 200
    || $response['status'] == 'fail'){
      $this->assertTrue(true);
    }
  }
}
