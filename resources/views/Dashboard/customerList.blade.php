@extends('Dashboard.layout.master')
@section('content')
<section class="content">

    <div class="container mt-2">

        <div class="row">
            <div class="col-md-12 card-header text-center font-weight-bold">
                <h2>Customer List</h2>
            </div>

            <ul id="save_msgList"></ul>
            <div class="col-md-8">
                <table class="table" id="example" style="
    margin-left: 36%;
">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th>Customer Profile</th>




                        </tr>

                    </thead>
                    <tbody class="tab">
                         @foreach($logo as $logos)
                        <tr>
                            <td>{{$logos->id}}</td>
                            <td>{{$logos->fname}}</td>
                            <td><a href="{{ URL('/customer-profile/'.$logos->id )}}">View</a></td>

                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });


    </script>


    @endsection
