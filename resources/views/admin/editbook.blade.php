@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Edit Book</h5>
          <form method="POST" action="{{ route('updatebook' ,$book->id ) }}" enctype="multipart/form-data">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4 mt-4">
                <label for="exampleFormControlTextarea1">Book Name</label>
              <input type="text" value="{{ $book->name }}" name="name" id="form2Example1" class="form-control" placeholder="name" />
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Book Description</label>
                <input type="text" value="{{ $book->description }}" name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
              </div>
            <div class="form-outline mb-4 mt-4">
                <label for="exampleFormControlTextarea2">Book image</label>
              <input type="file" name="image" id="exampleFormControlTextarea2" class="form-control"  />
            </div>
            <div class="form-outline mb-4 mt-4">
                <label for="exampleFormControlTextarea2">Book Ctegory</label>
              <select name="category" class="form-select  form-control" aria-label="Default select example">
                <option selected>{{ $book->category }}</option>
                <option value="Horror">Horror</option>  
                <option value="Action">Action</option>  
                <option value="Romantic">Romantic</option>  
                <option value="Comedy">Comedy</option>  
              </select>
            </div>
            <br>
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-success  mb-4 text-center">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
@endsection