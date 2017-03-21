@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Experience</h2>
        <ol class="breadcrumb">
            <li>
                <strong>Experience</strong>
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
                    <h5>Manage Experience Infomation</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('experience.create') }}" class="btn btn-primary btn-xs">
                            <i class="fa fa-plus"> </i> Add Experience
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Year</th>
                                    <th>Text</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                                @foreach($experiences as $index => $experience)
                                <tr>
                                    <td>{{ $index+1}}</td>
                                    <td>{{ $experience->title }}</td>
                                    <td>{{ $experience->subtitle }}</td>
                                    <td>{{ $experience->year }}</td>
                                    <td>{{ $experience->text }}</td>
                                    <td>{{ $experience->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('experience.edit', $experience->id) }}" class="btn btn-default btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Are you sure to delete ?')">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-default" title="Delete"><i class="fa fa-trash"> </i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>

                        @include('default.paginate', ['paginator' => $experiences])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection