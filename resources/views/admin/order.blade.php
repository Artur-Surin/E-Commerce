<!DOCTYPE html>
<html>

<head>

    @include('admin.css')

    <style type="text/css">

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }

        .table_deg {
            border: 2px solid yellowgreen;
        }

        th {
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 2px solid goldenrod;
            text-align: center;
            color: white;
        }

        h3
        {
            color: white;
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>

</head>


<body>

    @include('admin.header')

    @include('admin.sidebar')
<!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <h3>All Orders</h3>

                <br>
                <br>

                <div class="div_deg">
                    <table class="table_deg">
                        <tr>
                            <th>Customer name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Payment Status</th>
                            <th>Status</th>
                            <th>Change Status</th>
                            <th>Print PDF</th>
                        </tr>


                        @foreach($data as $data)

                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->rec_address}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->product->title}}</td>
                                <td>{{$data->product->price}}</td>

                                <td>
                                    <img width="150" src="products/{{$data->product->image}}">
                                </td>

                                <td>{{$data->payment_status}}</td>

                                <td>

                                    @if($data->status == 'in progress')

                                        <span style="color:red"> {{$data->status}} </span>

                                    @elseif(($data->status == 'Delivered'))

                                        <span style="color:yellowgreen">{{$data->status}}</span>

                                    @else

                                        <span style="color:blue">{{$data->status}}</span>

                                    @endif

                                </td>

                                <td>
                                    <a class="btn btn-success" href="{{url('on_the_way',$data->id)}}">On the way</a>

                                    <a class="btn btn-primary" href="{{url('delivered',$data->id)}}">Delivered</a>
                                </td>

                                <td>

                                    <a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}">Print PDF</a>

                                </td>
                            </tr>

                        @endforeach

                    </table>
                </div>

            </div>
        </div>
    </div>
<!-- JavaScript files-->
    @include('admin.js')
</body>

</html>

