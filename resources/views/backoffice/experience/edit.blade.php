@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Experience</h2>
        <ol class="breadcrumb">
             <li>
                <a href="{{ route('experience.index') }}">Experience</a>
            </li>
            <li>
                <strong>Edit</strong>
            </li>
            <li><strong>{{ $experience->title }}</strong></li>
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
                    <h5>Edit Experience Information</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('experience.index') }}" class="btn btn-primary btn-xs">
                            Experience
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('experience.update', $experience->id) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH">

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Title</label>
                            <div class="col-md-5">
                                <input type="text" name="title" class="form-control" value="{{ old('title', $experience->title) }}">
                                @if($errors->has('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('subtitle') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Sub Title</label>
                            <div class="col-md-5">
                                <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $experience->subtitle) }}">
                                @if($errors->has('subtitle'))
                                <span class="help-block">{{ $errors->first('subtitle') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Year</label>
                            <div class="col-md-5">
                                <input type="text" name="year" class="form-control" value="{{ old('year', $experience->year) }}">
                                @if($errors->has('year'))
                                <span class="help-block">{{ $errors->first('year') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Text</label>
                            <div class="col-md-7">
                                <textarea class="form-control" rows="7" name="text">{{ old('text', $experience->text) }}</textarea>
                                @if($errors->has('text'))
                                <span class="help-block">{{ $errors->first('text') }}</span>
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