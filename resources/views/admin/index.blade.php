<x-layout>

<div class="container mt-5">
<form action="/admin" method="post" >
    @csrf
<div class="bg-info text-center py-4 h1">
       Admin Panel
    </div>


    <label for="email">Email</label>
    <input type="email" name="email" class="form-control"  
    value="{{old('email')}}">
 
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control"  
    value="{{old('password')}}">
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-layout>