Usage
=====

# Requirements
* `PHP 5.3` or higher.
* `php-curl` for curl request support.
* A [VPS.net](http://www.vps.net) user account.

1. Choose an API Adapter
  * This API currently only provides a CURL adapter.
    * If you already have a PHP server using the existing API, the `LegacyCurlApiAdapter` may suit your needs better.
  * Or override the abstract `ApiAdapter` and use your own.

2. Configure the API Adapter.
  * Set the `apiVersion` (VPS.net's current value is `'api10json'`)
  * Set the `userAgent` (VPS.net's current value is `'VPSNET_API_10_JSON/PHP'`).
    * TODO: This is probably not required.
  * Set the `username` (Whatever your VPS.net account username is.)

3. Start interacting with your account!

