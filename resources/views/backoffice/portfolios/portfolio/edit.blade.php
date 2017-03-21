@extends('backoffice.layout.admin')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Portfolio</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('portfolio.index') }}">Portfolio</a>
            </li>
            <li>
                <strong>Edit</strong>
            </li>
            <li>
                <strong>{{ $portfolio->name }}</strong>
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
                    <h5>Create Portfolio</h5>
                    <div class="ibox-tools">
                        <a href="{{ route('portfolio.index') }}" class="btn btn-primary btn-xs">
                            <i class="fa fa-book"> </i> Portfolio
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH">

                        <div class="form-group {{ $errors->has('portfolio_type_id') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Project Type</label>
                            <div class="col-md-5">
                                <select class="form-control" name="portfolio_type_id">
                                    <option value="">Choose portfolio type</option>
                                    @foreach($portfolio_types as $portfolio_type)
                                    <option @if($portfolio_type->id == old('portfolio_type_id', $portfolio->portfolio_type_id)) selected="selected" @endif value="{{ $portfolio_type->id }}">{{ $portfolio_type->name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('portfolio_type_id'))
                                <span class="help-block">{{ $errors->first('portfolio_type_id') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Project Name</label>
                            <div class="col-md-5">
                                <input type="text" name="name" class="form-control" value="{{ old('name', $portfolio->name) }}">
                                @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('cover_img') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Cover Image <br/><small>(360x244 px)</small></label>
                            <div class="col-md-5">
                                <input type="file" name="cover_img" class="form-control">
                                @if($errors->has('cover_img'))
                                <span class="help-block">{{ $errors->first('cover_img') }}</span>
                                @endif
                                @if($portfolio->cover_img)
                                <br/>
                                <img style="width:150px;" src="{{ asset('uploads/portfolio_cover_images/'.$portfolio->cover_img) }}">
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="description" rows="10">{{ old('description', $portfolio->description) }}</textarea>
                                @if($errors->has('description'))
                                <span class="help-block">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('client') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Client</label>
                            <div class="col-md-3">
                                <input type="text" name="client" class="form-control" value="{{ old('client', $portfolio->client) }}">
                                @if($errors->has('client'))
                                <span class="help-block">{{ $errors->first('client') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('services') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Services</label>
                            <div class="col-md-3">
                                <input type="text" name="services" class="form-control" value="{{ old('services', $portfolio->services) }}">
                                @if($errors->has('services'))
                                <span class="help-block">{{ $errors->first('services') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Dev Year</label>
                            <div class="col-md-3">
                                <input type="text" name="year" class="form-control" value="{{ old('year', $portfolio->year) }}">
                                @if($errors->has('year'))
                                <span class="help-block">{{ $errors->first('year') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Website</label>
                            <div class="col-md-3">
                                <input type="text" name="website" class="form-control" value="{{ old('website', $portfolio->website) }}">
                                @if($errors->has('website'))
                                <span class="help-block">{{ $errors->first('website') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('dev_icons') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Dev Icons <br/> <small>(Use | to saperate icons)</small></label>
                            <div class="col-md-5">
                                <input type="text" name="dev_icons" class="form-control" value="{{ old('dev_icons', $portfolio->dev_icons) }}">
                                @if($errors->has('dev_icons'))
                                <span class="help-block">{{ $errors->first('dev_icons') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group {{ $errors->has('images') ? 'has-error' : '' }}">
                            <label for="" class="control-label col-md-2">Image Album <br/><small>(765x400 px)</small></label>
                            <div class="col-md-5">
                                <input type="file" name="images[]" class="form-control" multiple="multiple">
                                @if($errors->has('images'))
                                <span class="help-block">{{ $errors->first('images') }}</span>
                                @endif
                                @if($portfolio->portfolio_image)
                                    <br/>
                                    @foreach($portfolio->portfolio_image as $image)
                                    <img style="width:150px;" src="{{ asset('uploads/portfolio_images/'.$image->image) }}">
                                    @endforeach
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