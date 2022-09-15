
<x-layout>

<div class="container mt-5">
<form action="/esoft/{{$company->id}}" method="post" enctype="multipart/form-data">
     @csrf
    @method('put')
<div class="bg-info text-center py-4 h1">
        Edit Company Details
    </div>
           @if ($errors->any())
                  @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                  @endforeach
            @endif
    
  <div class="form-group">
    <label for="companyname">Company Name</label>
    <input type="text" name="company_name" class="form-control"  
    value="{{$company->company_name}}">

    <label for="email">Email</label>
    <input type="email" name="email" class="form-control"  
    value="{{$company->email}}">

    <label for="logo">Logo</label>
    <input type="file" name="logo" class="form-control"  
    value="{{$company->logo}}">

    <label for="website">Website</label>
    <input type="url" name="website" class="form-control"  
    value="{{$company->website}}">

  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
</x-layout>