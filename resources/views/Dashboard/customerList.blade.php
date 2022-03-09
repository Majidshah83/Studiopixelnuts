@extends('Dashboard.layout.master')
@section('content')
<div class="height-100 bg-light">
      <h4>Customer List</h4>
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Website</th>
                <th>View Profile</th>
            </tr>
        </thead>
        <tbody>
             @foreach($logo as $logos)
            <tr>
                <td>{{$logos->id}}</td>
                <td>{{$logos->fname}}&nbsp{{$logos->surname}}</td>
                <td>{{$logos->email}}</td>
                <td>{{$logos->companyname}}&nbsp{{$logos->city}}&nbsp{{$logos->country}}&nbsp{{$logos->zipcode}}</td>
                <td>{{$logos->webUrl}}</td>
                <td><a href="{{ URL('/customer-profile/'.$logos->id )}}">View</a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    </div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>



    @endsection
