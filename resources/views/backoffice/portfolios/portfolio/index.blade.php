@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Portfolio</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('portfolio.index') }}">Portfolio</a>
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
                    <h5>Manage Portfolio</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('portfolio.create') }}" class="btn btn-primary btn-xs">
                            <i class="fa fa-plus"> </i> Add Portfolio
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Project Name</th>
                                    <th>Cover Image</th>
                                    <th>Client</th>
                                    <th>Dev Year</th>
                                    <th>Website</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                                @foreach($portfolios as $index => $portfolio)
                                <tr>
                                    <td>{{ $index+1}}</td>
                                    <td>{{ $portfolio->portfolio_type->name }}</td>
                                    <td><a target="_blank" href="">{{ $portfolio->name }}</a></td>
                                    <td><img style="width:100px;" src="{{ asset('uploads/portfolio_cover_images/'.$portfolio->cover_img) }}"></td>
                                    <td>{{ $portfolio->client }}</td>
                                    <td>{{ $portfolio->year }}</td>
                                    <td><a target="_blank" href="{{ $portfolio->website }}"><i class="fa fa-external-link"></i></a></td>
                                    <td>{{ $portfolio->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-default btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Are you sure to delete ?')">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-default" title="Delete"><i class="fa fa-trash"> </i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>

                        @include('default.paginate', ['paginator' => $portfolios])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection