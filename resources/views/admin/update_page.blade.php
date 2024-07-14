<!DOCTYPE html>
<html>

<head>

    @include('admin.css')

    <style type="text/css">

        input[type='text']
        {
            width: 400px;
            height: 50px;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        label {
            display: inline-block;
            width: 200px;
            padding: 20px;
            font-size: 20px!important;
            color: white!important;
        }

        textarea {
            width: 400px;
            height: 80px;
        }

        .input_deg {
            padding: 15px;
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

            <h2> Update Product</h2>

            <div class="div_deg">

                <form action="{{url('edit_product',$data->id)}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div>

                        <label> Title </label>

                        <input type="text" name="title" value="{{$data->title}}">

                    </div>

                    <div>

                        <label> Description </label>

                        <textarea name="description">{{$data->description}}</textarea>

                    </div>

                    <div>

                        <label> Price </label>

                        <input type="text" name="price" value="{{$data->price}}">

                    </div>

                    <div>

                        <label> Quantity </label>

                        <input type="number" name="quantity" value="{{$data->quantity}}">

                    </div>

                    <div>

                        <label> Category </label>

                        <select name="category">

                            <option value="{{$data->category}}"> {{$data->category}} </option>

                            @foreach($category as $category)

                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach

                        </select>

                    </div>

                    <div>
                        <label> Current Image </label>
                        <img width="150" src="/products/{{$data->image}}">
                    </div>

                    <div>
                        <label> New Image </label>
                        <input type="file" name="image">
                    </div>

                    <div>
                        <input class="btn btn-success" type="submit" value="Update Product">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
<!-- JavaScript files-->
@include('admin.js')
</body>

</html>
