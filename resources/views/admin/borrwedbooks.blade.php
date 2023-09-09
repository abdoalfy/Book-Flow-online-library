@extends('layouts.admin')
@section('borrow')
active
@endsection
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 style="margin-bottom: 30px" class="card-title mb-4 d-inline">Borowed Books</h5>
          <table style="width:100% margin-top:20px" class="text-center table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Book name</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
                <th scope="col">category</th>
                <th scope="col">Borrowed At</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($books as $book )
                <tr>
                <th>{{$book->id}}</th>
                <td>{{ $book->name }}</td>
                <td style="width:20%">{{ $book->description}}</td>
                <td><img width="180px" src="{{ asset('assets/images/'. $book->image .'') }}"></td>
                <td>{{ $book->category}}</td>
                <td>{{ $book->deleted_at->diffForHumans()}}</td>         
                <td>{{ $book->created_at->diffForHumans()}}</td>
                <td>{{ $book->updated_at->diffForHumans()}}</td>         
              </tr>
              @endforeach
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"></script>
@endsection