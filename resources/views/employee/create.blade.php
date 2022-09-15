<x-layout>

<div class="container mt-5">
<form action="/employee" method="post" enctype="multipart/form-data">
    @csrf
<div class="bg-info text-center py-4 h1">
       Create Employee 
    </div>
            @if ($errors->any())
                  @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                  @endforeach
            @endif
            
    <input type="hidden" name="company_id" value="{{$id}}">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" class="form-control"  
    value="{{old('firstname')}}">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" class="form-control"  
    value="{{old('lastname')}}">

    <label for="email">Email</label>
    <input type="email" name="email" class="form-control"  
    value="{{old('email')}}">
 
    <label for="mobileno">Mobile No</label>
    <input type="number" name="mobileno" class="form-control"  
    value="{{old('mobileno')}}">
    
    <label for="profile_picture">Profile Picture</label>
   <input type="file" name="profile_picture" id="profile_picture" class="form-control"  >

    

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-layout>