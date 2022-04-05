@extends('Dashboard.layout.master')
@section('content')
<div class="height-100 bg-light">
    <h4>Customer List</h4>
    <table id="logo-datatable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>View Form</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logo as $logos)
            <tr>

                <td>{{$logos->fname}}&nbsp{{$logos->surname}}</td>
                <td><a href="mailto:">{{$logos->email}}</a></td>
                <td><a href="{{ URL('/list-profile/'.$logos->id )}}" target="blank">View</a></td>
                <td>{{$logos->created_at}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
<script>
$(document).ready(function() {
    $('#logo-datatable').DataTable({
        "order": [
            [3, "desc"]
        ]
    });
});
</script>



@endsection