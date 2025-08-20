@extends('pendaftaran_web.app')
@section('content')
{{-- <div class="card">
  <div class="card-header">
    <div class="card-title">Manage Students</div>
  </div>
  <div class="card-body">
    <div class="table table-responsive"></div>
  </div>
</div> --}}
    <div class="card">
    <div class="card-header">
      <div class="card-title">Manage Students</div>
    </div>
    <div class="card-body">
      <div class="mt-2">
        <a href="{{ url('create/student/instructor') }}" class="btn btn-primary">Create</a>
      </div>
      <div class="mt-2 table table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Actions</th>
              <th>Student Name</th>
              <th>Email</th>
              <th>Majore</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            {{-- @php
              $no = 1;
            @endphp
            @foreach ($students as $i)
            @if ($i->id_majore == Auth::user()->id_majore)
            <tr>
              <td>{{ $no++ }}</td>
              <td>
                <a href="{{ route('edit.student.instructor', $i->id) }}" class="btn btn-success">Edit</a>
                <form action="{{ route('destroy.student.instructor', $i->id) }}" method="post" onclick="return confirm('Yahin di delete ?')" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td>{{ $i->name }}</td>
              <td>{{ $i->email }}</td>
              <td>{{ $i->majore }}</td>
              <td>{{ Str::upper($i->status) }}</td>
            </tr>
            @endif
            @endforeach --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
