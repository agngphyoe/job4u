@extends('layouts.admin.app')
@section('title', 'Categories List')

@section('contents')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-keypad icon-gradient bg-tempting-azure">
                    </i>
                </div>
                <div class="h4">JOB CATEGORIES LIST</div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('categories.create') }}" type="button" class="btn btn-lg btn-outline-primary">Add New Category</a>               
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
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($categories as $category)
                    <tr class="text-center">
                        <td>{{ $i++  }}.</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', ['id' => $category->id]) }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="{{ route('catgories.delete', ['id' => $category->id]) }}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection