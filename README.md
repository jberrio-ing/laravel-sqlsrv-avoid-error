# Resolve the `SQLSTATE[IMSSP]: An invalid attribute was designated on the PDO object.` error

This error is generated when the `PDO::ATTR_STRINGIFY_FETCHES` attribute is present in the `PDO_Sqlsrv` configuration. To fix the error, follow the steps below:

## Prerequisites

Make sure you have a Laravel application set up.

## Steps to Register the service provider

1. **Locate the `config/app.php` file**

   Open the `config/app.php` file in your Laravel project.

2. **Add the Service Provider**

   In the `providers` array, add the fully qualified class name of the `SqlsrvAvoidErrorProvider` from the `SqlsrvAvoidError` namespace. Your `config/app.php` should look something like this:

   ```php
   'providers' => [
       // Other service providers
       SqlsrvAvoidError\Providers\SqlsrvAvoidErrorProvider::class,
   ],
