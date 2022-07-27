<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center">Transaction List</h2>
    <a href="/welcome" class="btn btn-danger m-2">Home</a>
    <br>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Title</th>
            <th scope="col">Date</th>
            <th scope="col">Paid by/to</th>
            <th scope="col">Total</th>
            <th scope="col">Type</th>
            <th scope="col">Status</th>
            <th scope="col">UTR</th>
            <th scope="col">Invoice No.</th>
            <th scope="col">Project</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $count=1;
            @endphp
            @foreach($fields as $field)
                <tr>
                    <td>{{$count++}}</td>
                    <td>{{$field['title']}}</td>
                    <td>{{$field['date']}}</td>
                    <td>{{$field['paid_by_to']}}</td>
                    <td>{{$field['amount']*$field['quantity']}}</td>
                    <td>{{$field['type']}}</td>
                    <td>{{$field['status']}}</td>
                    <td>{{$field['utr']}}</td>
                    <td>{{$field['invoice']}}</td>
                    <td>{{$field['project']}}</td>
                    <td>
                        <a href={{"receipt/".$field['id']}} class="btn btn-primary" >Download PDF</a>
                        <a href={{"edit/".$field['id']}} class="btn btn-primary">Edit</a>
                        <a href={{"destroy/".$field['id']}} class="btn btn-danger">Delete</a>                         
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </body>
</html> 