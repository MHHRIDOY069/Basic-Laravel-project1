<x-app-layout>


    <div style="padding-left: 35%; padding-top: 10%; padding-bottom:10%; background-color: rgba(0,0,0,0.5);">
      <label style="font-size: 25px; font-weight: bold; padding-left: 10%;"> Update Data</label> 
        <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 2%;">
                <label>Description</label>
                <input type="text" name="description" value="{{$data->description}}" style="border-radius: 5px;">
            </div>
            <div>
                <label>Current Image</label>
                <img height="200px" width="300px" src="/post/{{$data->image}}">
            </div>
            <div style="padding: 2%;">
                <label>Change Image</label>
                <input type="file" name="image">
            </div>
            <br><br>
            <div>
                <input type="submit" value="Update" style="margin-left:120px; padding-left: 5%; padding-right: 5%; border-radius: 5px; background: white; cursor: pointer">
            </div>
        </form>
    </div>

    
</x-app-layout>