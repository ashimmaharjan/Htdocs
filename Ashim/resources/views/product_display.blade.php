<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

<div class="container">
    <table class="table">
        <thead>
            <td>Name</td>
            <td>Price</td>
            <td>Image</td>
            <td>Edit</td>
            <td>Delete</td>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>{{$item->name}} </td>
                    <td>{{$item->price}} </td>
                    <td><img src="{{$item->image}}" alt="{{$item->name}}" width="500px"></td>
                    <td>

                    </td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>