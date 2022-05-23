@extends('layouts.test')
@section('Title')
student

@endsection

@section('name')

hafsa

@endsection
@section('noteActive')
active
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>math</th>
        <th>pc</th>
        <th>fr</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>16</td>
        <td>15</td>
        <td>19</td>
      </tr>
      <tr>
        <td>20</td>
        <td>50</td>
        <td>10</td>
      </tr>
      <tr>
        <td>17y</td>
        <td>18</td>
        <td>15</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>



@endsection