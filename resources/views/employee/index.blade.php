

<x-layout>

<div class="container mt-5">
    <div class="bg-info text-center py-4 h1">
        Employee Details

        <p class="h5 pt-4">{{$company->company_name}}</p>
    </div>


    <div>
        <a href="/employee/{{$company->id}}/create" class="btn btn-primary">Create Employee</a>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">MobileNo</th>
      <th scope="col">Profile Picture</th>
      
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @php $i=1 @endphp
    @if($employee->count())
    @foreach($employee as $employee)

    <tr>
      <th scope="row"><?=$i++;?></th>
      <td>{{$employee->firstname}}</td>
      <td>{{$employee->lastname}}</td>

      <td>{{$employee->email}}</td>
      <td>{{$employee->mobileno}}</td>
      <td>
        <img src="/storage/{{$employee->profile_picture}}" alt="" width="50px" height="50px">
           </td>
      <td>
        <a class="btn btn-primary h6" href="/employee/{{$employee->id}}/edit">Edit</a>
      </form>

      <form action="/employee/{{$employee->id}}" method="post">
        @csrf
        @method('delete')
       
       
       <button class="btn btn-danger">Delete</button>
      </form></td>

    </tr>
    @endforeach
    @else 
    <div class="text-center py-2 text-primary h5">
      No Employee.Check After Some time.
    </div>
    @endif
   <div>
   
   </div>

  </tbody>
</table>
</div>
</x-layout>