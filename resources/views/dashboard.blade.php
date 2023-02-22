<x-app-layout>

    <div style="height: 10vh; width: 100%; background-color: rgba(0,0,0,0.8);">
        
        @csrf

      <form action="{{url('view_post')}}" method="get">
          <input type="submit" value="View post" style="padding:1%; margin-left: 630px; margin-top:5px; border-radius:5px; background-color: white; font-weight: bold;" >
      </form>

    </div>



    <div style="padding-left: 35%; padding-top: 10%; padding-bottom:10%; background-color: rgba(0,0,0,0.5);">
      <label style="font-size: 25px; font-weight: bold; padding-left: 10%;"> Upload Anything</label> 
        <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 2%;">
                <label>Description</label>
                <input type="text" name="description" style="border-radius: 5px;">
            </div>
            <div style="padding: 2%;">
                <label>Upload an Image</label>
                <input type="file" name="image">
            </div>
            <br><br>
            <div>
                <input type="submit"  style="margin-left:120px; padding-left: 5%; padding-right: 5%; border-radius: 5px; background: white; cursor: pointer">
            </div>
        </form>
    </div>

    
</x-app-layout>
