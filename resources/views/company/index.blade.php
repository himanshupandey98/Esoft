

<x-layout>

<div class="container mt-5">
    <div class="bg-info text-center py-4 h1">
        Company Details
    </div>

    <div>
        <a href="/esoft/create" class="btn btn-primary">Create Company</a>
    </div>

    <div class="mt-2">
      <form action="/admin/{{'del'}}" method="post">
       @csrf
        @method('delete')
        <button>Logout</button>
      </form>
        
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Company Name</th>
      <th scope="col">Email</th>
      <th scope="col">Logo</th>
      <th scope="col">Website</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @php $i=1 @endphp
    @foreach($company as $company)

    <tr>
      <th scope="row"><?=$i++;?></th>
      <td>{{$company->company_name}}</td>
      <td>{{$company->email}}</td>
      <td><img src="/storage/{{$company->logo}}" alt="" width="50px" height="50px"></td>
      <td>{{$company->website}}</td>
      <td>
        <a class="btn btn-primary h6" href="/esoft/{{$company->id}}/edit">Edit</a>
      </form>

      <form action="/esoft/{{$company->id}}" method="post">
        @csrf
        @method('delete')
       
       
       <button class="btn btn-danger">Delete</button>
      </form>
      <a href="/employee/{{$company->id}}">Check Employees</a>
    </td>
      
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>
</x-layout>