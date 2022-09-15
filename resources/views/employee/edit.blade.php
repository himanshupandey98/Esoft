<x-layout>

<div class="container mt-5">
<form action="/employee/{{$employee->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
<div class="bg-info text-center py-4 h1">
        Edit Employee Details
    </div>

            @if ($errors->any())
                  @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                  @endforeach
            @endif
    <input type="hidden" name="company_id" value="{{$employee->id}}">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" class="form-control"  
    value="{{$employee->firstname}}">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" class="form-control"  
    value="{{$employee->lastname}}"">

    <label for="email">Email</label>
    <input type="email" name="email" class="form-control"  
    value="{{$employee->email}}">
 
    <label for="mobileno">Mobile No</label>
    <input type="number" name="mobileno" class="form-control"  
    value="{{$employee->mobileno}}">
    
    <label for="profile_picture">Profile Picture</label>
   <input type="file" name="profile_picture" id="profile_picture" class="form-control" value="{{$employee->profile_picture}}" >

    

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-layout>