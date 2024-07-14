<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    @include('home.css')

    <style type="text/css">

        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table
        {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th
        {
            border: 2px solid black;
            text-align: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
            background-color: black;
        }

        td
        {
            border: 2px solid skyblue;
        }

        label
        {
            display: inline-block;
            width: 150px;
        }

    </style>


</head>
<body>


    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')

        <div class="div_deg">

            <table>

                <tr>

                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Delivery Status</th>
                    <th>Image</th>

                </tr>


                @foreach($order as $order)

                <tr>
                    <td>{{$order->product->title}}</td>
                    <td>{{$order->product->price}}</td>
                    <td>{{$order->status}}</td>

                    <td>
                        <img width="150px" src="products/{{$order->product->image}}" alt="">
                    </td>

                </tr>

                @endforeach

            </table>
        </div>

    </div>


    @include('home.footer')

</body>
</html>
