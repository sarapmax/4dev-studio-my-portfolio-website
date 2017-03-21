@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Skill</h2>
        <ol class="breadcrumb">
             <li>
                <a href="{{ route('skill.index') }}">Skill</a>
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
                    <h5>Add Skill Information</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('skill.index') }}" class="btn btn-primary btn-xs">
                            Skill
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('skill.store') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Technology</label>
                            <div class="col-md-5">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Perfomance(100%)</label>
                            <div class="col-md-2">
                                <input type="number" name="value" class="form-control" value="{{ old('value') }}">
                                @if($errors->has('value'))
                                <span class="help-block">{{ $errors->first('value') }}</span>
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