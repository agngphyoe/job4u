@extends('layouts.admin.app')
@section('title', 'Posts List')

@section('contents')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-keypad icon-gradient bg-tempting-azure">
                    </i>
                </div>
                <div class="h4">JOBS LIST</div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('jobposts.create') }}" type="button" class="btn btn-lg btn-outline-primary">Add New Post</a>               
            </div> 
        </div>
    </div>           
     <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr class="text-center">
                    <th style="width: 50px">No.</th>
                    <th>Title</th>
                    <th>Company</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($posts as $post)
                    <tr class="text-center">
                        <td>{{ $i++  }}.</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            @php
                                $company = App\Models\Company::find($post->company_id);
                            @endphp
                            {{ $company->name }}
                        </td>
                        <td>
                            <a href="{{ route('jobposts.edit', ['id' => $post->id]) }}" type="button" class="btn btn-warning">Edit</a>
                            <a href="{{ route('jobposts.delete', ['id' => $post->id]) }}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection