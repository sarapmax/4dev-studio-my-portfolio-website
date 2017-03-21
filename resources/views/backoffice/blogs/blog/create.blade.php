@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Blog</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('blog.index') }}">Blog</a>
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
                    <h5>Create Blog</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('blog.index') }}" class="btn btn-primary btn-xs">
                            Blog
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('blog.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Blog Title</label>
                            <div class="col-md-5">
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                                @if($errors->has('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('cover_img') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Cover Image <br/> <small>(540x375 px)</small></label>
                            <div class="col-md-5">
                                <input type="file" name="cover_img" class="form-control">
                                @if($errors->has('cover_img'))
                                <span class="help-block">{{ $errors->first('cover_img') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Blog Content</label>
                            <div class="col-md-10">
                                <textarea class="form-control ckeditor" id="body" name="body">{{ htmlspecialchars(old('body')) }}</textarea>
                                @if($errors->has('body'))
                                <span class="help-block">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group {{ $errors->has('tag_ids') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Blog Content</label>
                            <div class="col-md-10">
                                <select style="height: 150px;" class="form-control" name="tag_ids[]" multiple>
                                    <option value="">Choose blog tag</option>
                                    @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('tag_ids'))
                                <span class="help-block">{{ $errors->first('tag_ids') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('active') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Active</label>
                            <div class="col-md-5">
                                <input checked data-toggle="toggle" name="active" type="checkbox">
                                @if($errors->has('active'))
                                <span class="help-block">{{ $errors->first('active') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
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
