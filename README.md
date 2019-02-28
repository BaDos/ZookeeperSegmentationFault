# ZookeeperSegmentationFault
The simple app to reproduce segmentation fault

# Steps to reproduce
* Clone this repo
* Run `composer install`
* Run `php test.php app:test`

## Expected result
In ErrorHandler.php line 48:
Notice: Undefined offset: 3 in /Users/bohdan/Sites/console-test/src/TestCommand.php on line 28

## Actual result
[1]    14737 segmentation fault  php test.php app:test


# Reproduced on:
- PHP version: 7.1.15, 7.1.26, 7.2.15
- OS: MacOS, Linux
- Zookeeper version: 0.6.3, 0.7.0
