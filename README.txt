# Submission by Naveed Ramzan 
## A test assignment given by DigitalTolk

## Suggestions/Recommendations
### tests/app/Repository/UserRepository.php
#### My Assessments
* seems like these are not test created to test repository functions

#### Generic Suggestions
* There is one major function and its not good approach to make one heavy function
* it should be divide and test functions to test each small functionality

### refactor/app/Repository/BookingRepository.php
#### My Assessments
* Seems like database is at BCNF level

#### Generic Suggestions
* variables should be in camel case
* code should be more formatted like 
* common functions should be shifted to BaseRepository like expired, ignored, create, update, delete records etc
* created_at, updated_at should be timestamp in database strcuture (DDL) 
* as we are using language for multilingual so all text for subject/alerts should be from languages tables/database values
* sample formating of query

`$jobs = $cuser->jobs()
		->with('user.userMeta', 'user.average', 'translatorJobRel.user.average', 'language', 'feedback')
		->whereIn('status', ['pending', 'assigned', 'started'])
		->orderBy('due', 'asc')
		->get()`


#### getUsersJobs function 
* immediate condition should be shifted to query level

#### convertToHoursMins function
* can be removed as `Carbon` is being used but not for `convertToHoursMins`
#### bookingExpireNoAccepted function
* it should be broken into atleast 3,4 parts and based on that conditions / filters should be categorized like getSuperManExpiredNoAcceptedJobs should handle only those conditions which are for superman && expired && no accepted 
* same broken strategy for alerts like getSuperManAlerts


Note: Repository pattern is being introduced to bridge between Controller and Model. It also contains 99% of the business logic and all stuff. Creating tests for controller is OK
Creating tests for models is OK
More important is we need to create test for Repository functions as we can achieve by 
* divide functionalities in to chunks
* test that functionality in functions