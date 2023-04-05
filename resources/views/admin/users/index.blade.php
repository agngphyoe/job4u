@extends('layouts.admin.app')
@section('title', 'Users List')

@section('contents')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-keypad icon-gradient bg-tempting-azure">
                    </i>
                </div>
                <div class="h4">Users List</div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('users.create') }}" type="button" class="btn btn-lg btn-outline-primary">Add New User</a>               
            </div> 
        </div>
    </div>           
     <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr class="text-center">
                    <th style="width: 50px">No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($users as $user)
                    <tr class="text-center">
                        <td>{{ $i++ }}.</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            {{-- <button class="btn btn-info">Details</button> --}}
                            <a href="{{ route('users.edit', ['id' => $user->id]) }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="{{ route('users.delete', ['id' => $user->id]) }}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection