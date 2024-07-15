<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="table-responsive">
  <table class="table table-striped">
    <thead class="thead-light">
<h1>List Of Products</h1>
<!-- @if (empty($products)) -->
 @empty ($products) 
<div class="alert alert-warning">
  The list of products is empty
</div>
@else
      <th>Id</th>
      <th>Title</th>    
      <th>Description</th>
      <th>Price</th>
      <th>Stock</th>
      <th>Status</th>

</thead>
<tbody>
  <tr>
<td>Id</td>
<td>Soap</td>
<td>Best soap Decription</td>
  </tr>
  <tr>
  <td>2</td>
<td>Milk</td>
<td>Description about milk</td>
</tr>
</tbody>
  </table>
</div>

</body>
</html>
