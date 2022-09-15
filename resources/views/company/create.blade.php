<x-layout>

<div class="container mt-5">
<form action="/esoft" method="post" enctype="multipart/form-data">
    @csrf
<div class="bg-info text-center py-4 h1">
        Create Company 
    </div>
            @if ($errors->any())
                  @foreach($errors->all() as $error)
                    <li class="text-danger h6">{{$error}}</li>
                  @endforeach
            @endif

  <div class="form-group">
    <label for="companyname">Company Name</label>
    <input type="text" name="company_name" class="form-control"  
    value="{{old('company_name')}}">

    <label for="email">Email</label>
    <input type="email" name="email" class="form-control"  
    value="{{old('email')}}">

    
    <label for="logo">Logo</label>
   <input type="file" name="logo" id="logo" class="form-control"  >

    <label for="website">Website</label>
    <input type="url" name="website" class="form-control"  
    value="{{old('website')}}">

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-layout>