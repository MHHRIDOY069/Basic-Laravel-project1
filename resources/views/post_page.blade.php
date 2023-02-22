
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <style type="text/css">

        table,tr,th,td
        {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }


    </style>
    </head>
    <body>
<x-app-layout>
 
    <div>
        <table style="width: 80%; margin-left: 10%; margin-top: 3%; ">

            <tr>
                <th>Post Description</th>

                <th>Image</th>

                <th>Update</th>

                <th>Delete</th>
            </tr>

            @foreach($post as $post)
            <tr>
                <td>{{$post->description}}</td>
                <td><img height="200px" width="200px" src="post/{{$post->image}}"></td>
                <td style="text-decoration: none; color: blue; font-weight: bold"><a href=" {{url('update_post',$post->id)}}">Update</a></td>
                <td style="text-decoration: none; color: red; font-weight: bold"><a onclick="return confirm('Are you sure to delete this')" href="{{url('delete_post',$post->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>

    </div>
</x-app-layout> 
</body>
</html>
  
 