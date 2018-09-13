<!DOCTYPE html>
<html>
 <head>
  <title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Laravel - How to Generate Dynamic PDF from HTML using DomPDF</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Customer Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>Name</th>
       <th>Address</th>
       <th>City</th>
       <th>Postal Code</th>
       <th>Country</th>
      </tr>
     </thead>
     <tbody>
     @foreach($buildings_data as $building)
      <tr>
       <td>{{ $building->name }}</td>
       <td>{{ $building->address }}</td>
       <td>{{ $building->locality }}</td>
       <td>{{ $building->postcode }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>atiate1310</th>
       <th>atiate1550</th>
       <th>ateati1310</th>
       <th>ateati1550</th>
      </tr>
     </thead>
     <tbody>
     @foreach($measurements_data as $measurement)
      <tr>
       <td>{{ $measurement->atiate1310 }}</td>
       <td>{{ $measurement->atiate1550 }}</td>
       <td>{{ $measurement->ateati1310 }}</td>
       <td>{{ $measurement->ateati1550 }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>
