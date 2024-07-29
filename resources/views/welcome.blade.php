<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('yahya.css') }}" />
  <script src="{{ asset('yahya.js') }}"></script>
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