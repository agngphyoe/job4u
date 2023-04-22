@extends('layouts.admin.app')
@section('title', 'Applicants List')

@section('contents')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-keypad icon-gradient bg-tempting-azure">
                    </i>
                </div>
                <div class="h4">APPLICANTS LIST</div>
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
                    <th>PHONE</th>
                    {{-- <th>Applied Company</th> --}}
                    {{-- <th>Actions</th> --}}
                </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($applicants as $applicant)
                    <tr class="text-center">
                        <td>{{ $i++  }}.</td>
                        <td>{{ $applicant->name }}</td>
                        <td>{{ $applicant->email }}</td>
                        <td>{{ $applicant->phone }}</td>
                        
                        {{-- <td>
                            <a href="{{ route('categories.edit', ['id' => $category->id]) }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="{{ route('catgories.delete', ['id' => $category->id]) }}" type="button" class="btn btn-danger">Delete</a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection