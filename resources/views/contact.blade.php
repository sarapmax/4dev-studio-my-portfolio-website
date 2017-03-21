@extends('layout.master')

@section('content')

<div class="main-content align-center">
	<div class="container">
	  <div class="row">
	    <div class="col-md-4 col-md-offset-1 col-sm-8 col-sm-offset-1 contact-info">
	      <h4 class="text-1-opacity">How to Find Me</h4>
	      <p><span class="info text-uppercase">adress</span><span class="info-description"> Maefahluang university, Chiangrai</span></p>
	      <p><span class="info text-uppercase">phone</span><span class="info-description"> 086 175 2745</span></p>
	      <p><span class="info text-uppercase">web site</span><span class="info-description"> http://www.sarapmax.com</span></p>
	      <p><span class="info text-uppercase">e-mail</span><span class="info-description"> work@sarapmax.com</span></p>
	    </div>
	    <div class="col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-1 form-wrapper">
	      <h4 class="margin-0 text-1-opacity">Get in Touch</h4>
	      <form action="{{ url('contact') }}" method="POST" role="form" id="contact-form">
      		{{ csrf_field() }}
	        <div class="form-group name" {{ $errors->has('name') ? 'style=margin-top0px;margin-bottom:0px;' : '' }}>
	          <input type="text" name="name" id="input-name" class="form-control {{ old('name') ? 'filled' : '' }}" value="{{ old('name') }}">
	          <label for="input-name">Your name</label>
	        </div>
	        @if($errors->has('name'))
	        <span style="color:#A51207;font-size:10px;">{{ $errors->first('name') }}</span>
	        @endif
	        <div class="form-group name" {{ $errors->has('phone_number') ? 'style=margin-top0px;margin-bottom:0px;' : '' }}>
	          <input type="text" name="phone_number" id="input-name" class="form-control {{ old('phone_number') ? 'filled' : '' }}" value="{{ old('phone_number') }}">
	          <label for="input-name">Your phone number</label>
	        </div>
	        @if($errors->has('phone_number'))
	        <span style="color:#A51207;font-size:10px;">{{ $errors->first('phone_number') }}</span>
	        @endif
	        <div class="form-group email" {{ $errors->has('email') ? 'style=margin-top0px;margin-bottom:0px;' : '' }}>
	          <input type="email" name="email" id="email" class="form-control {{ old('email') ? 'filled' : '' }}" value="{{ old('email') }}">
	          <label for="email">Your e-mail</label>
	        </div>
	        @if($errors->has('email'))
	        <span style="color:#A51207;font-size:10px;">{{ $errors->first('email') }}</span>
	        @endif
	        <div class="form-group text-area message" {{ $errors->has('message') ? 'style=margin-top0px;margin-bottom:0px;' : '' }}>
	          <textarea rows="3" name="message" id="message" class="scroll form-control {{ old('message') ? 'filled' : '' }}">{{ old('message') }}</textarea>
	          <label for="message">Message</label>
	        </div>
	        @if($errors->has('message'))
	        <span style="color:#A51207;font-size:10px;">{{ $errors->first('message') }}</span><br/><br/>
	        @endif
	        <button type="submit" class="btn btn-primary submit-btn">send message</button>
	      </form>
	      <div class="contact-help-block"></div>
	    </div>
	  </div>
	</div>
</div>

@endsection