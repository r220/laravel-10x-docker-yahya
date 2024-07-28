<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="yahya.css" />
  <script src="yahya.js"></script>
</head>

<body>

  <div class="limiter">

    <div class="container-table100">
      <div class="wrap-table100">
        <div class="four">
          <h1><span>Yahya</span> Trading View</h1>
        </div>
        <form method="post">
          <div class="search-form">
            <input type="search" name="asset" value="" placeholder="Search" class="search-input" />
            <svg class="svg-icon search-icon" aria-labelledby="title desc" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.9 19.7">
              <g class="search-path" fill="none" stroke="#848F91">
                <path stroke-linecap="square" d="M18.5 18.3l-5.4-5.4" />
                <circle cx="8" cy="8" r="7" />
              </g>
            </svg>
          </div>
          <div id="message"></div>
          <div class="two-buttons-div">
            <button type="button" name="add" class="addAsset">Add</button>
            <button type="button" name="del" class="addAsset">Delete</button>
          </div>
        </form>

        <div class="table100">
          <table id="table">
            <thead>
              <tr class="table100-head">
                <th>Assets</th>
                <th>1m</th>
                <th>2m</th>
                <th>3m</th>
                <th>5m</th>
                <th>10m</th>
                <th>15m</th>
                <th>30m</th>
                <th>45m</th>
                <th>1h</th>
                <th>2h</th>
                <th>3h</th>
                <th>4h</th>
                <th>1d</th>
                <th>1w</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
