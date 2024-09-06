@extends('layouts.blank')

@section('judul')
   Show Category
@endsection

@section('content')

    <a href="/category/create" class="btn btn-primary"> Tambah Category</a>
    <br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
      <tbody>
        @forelse ($categories as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->name }}</td>
            <td>
                <a href="/category/{{ $item->id }}" class="btn btn-info">Detail</a>
                <a href="/category/{{ $item->id }}/edit" class="btn btn-secondary">Edit</a>
                <form action="/category/{{ $item->id }}" method="POST">
                    @csrf
                    @method("Delete")

                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
          </tr>
        @empty
        <p>No users</p>
        @endforelse
      </tbody>
    </table>
@endsection