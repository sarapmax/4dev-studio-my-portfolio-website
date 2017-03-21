@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Tag</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li>
                <a href="{{ route('tag.index') }}">Tag</a>
            </li>
            <li>
                <strong>Create</strong>
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
                    <h5>Create Blog Tag</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('tag.index') }}" class="btn btn-primary btn-xs">
                            Blog Tag
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('tag.store') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Blog Tag</label>
                            <div class="col-md-5">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-5">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> </i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection