@extends('Dashboard.layout.master')
@section('content')
<div class="height-100 bg-light">
      <h4>Customer List</h4>
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>View Profile</th>
            </tr>
        </thead>
        <tbody>
             @foreach($logo as $logos)
            <tr>

                <td>{{$logos->fname}}&nbsp{{$logos->surname}}</td>
                <td><a href="mailto:">{{$logos->email}}</a></td>
                <td><a href="{{ URL('/customer-profile/'.$logos->id )}}" target="blank">View</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
    </div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>



    @endsection
