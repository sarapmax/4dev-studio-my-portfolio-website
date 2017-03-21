@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Blog</h2>
        <ol class="breadcrumb">
            <li>
                <strong>Blog</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInUp">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Manage Blog</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('blog.create') }}" class="btn btn-primary btn-xs">
                            <i class="fa fa-plus"> </i> Add Blog
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Active</th>
                                    <th>Tag(s)</th>
                                    <th>Cover Image</th>
                                    <th>Title</th>
                                    <th>View</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                                @foreach($blogs as $index => $blog)
                                <tr>
                                    <td>{{ $index+1}}</td>
                                    <td>
                                        @if($blog->active)
                                        <i class="fa fa-check c-green text-success"></i>
                                        @else
                                        <i class="fa fa-circle-o-notch fa-spin"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($blog->tag)
                                                @foreach($blog->tag as $tag)
                                                <a href="">
                                                    <label class="label label-default"><i class="fa fa-tag"> </i> {{ $tag->name }}</label>
                                                </a>
                                                @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <img style="width:100px;" src="{{ asset('uploads/blog_cover_images/'.$blog->cover_img) }}">
                                    </td>
                                    <td><a target="_blank" href="">{{ $blog->title }}</a></td>
                                    <td>{{ number_format($blog->view) }}</td>
                                    <td>{{ $blog->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-default btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Are you sure to delete ?')">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-default" title="Delete"><i class="fa fa-trash"> </i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>

                        @include('default.paginate', ['paginator' => $blogs])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection