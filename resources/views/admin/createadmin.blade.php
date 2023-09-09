@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
     <div class="col">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title mb-5 d-inline">Create New Admin</h5>
           <form method="POST" action="{{ route('storeadmin') }}" enctype="multipart/form-data">
            @csrf
             <div class="form-outline mb-4 mt-4">
               <input type="text" name="username" id="form2Example1" class="form-control" placeholder="username" />
             </div>
             <div class="form-outline mb-4">
                <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />
              </div>
             <div class="form-outline mb-4">
               <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
             </div>
             <!-- Submit button -->
             <button type="submit" name="submit" class="btn btn-success  mb-4 text-center">Add Admin</button>
           </form>
         </div>
       </div>
     </div>
   </div>
</div>
<script type="text/javascript">
</script>
@endsection