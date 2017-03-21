@extends('layout.master')

@section('content')

<div class="main-content align-center">
  <div class="container">
    <div class="row hideaway-content">
      <div style="padding-top: 50px;"></div>
      <div class="col-md-8"><img style="padding-top: 10px;" alt="" src="{{ asset('img/about.jpg') }}" class="person-photo"></div>
      <div class="col-md-4">
        <h1 class="about-header text-1-opacity"><span>About&nbsp;</span>Myself</h1>
        <div class="contact-info">
          <p><span class="info text-uppercase">age</span><span class="info-description"> 22 years old</span></p>
          <p><span class="info text-uppercase">address</span><span class="info-description"> Maefahluang University, Chiangrai</span></p>
          <p><span class="info text-uppercase">e-mail</span><span class="info-description"> teerpong.me@gmail.com</span></p>
          <p><span class="info text-uppercase">phone</span><span class="info-description"> 086 175 2745</span></p>
        </div>
        <p>
          I become a web developer freelance sice I was 2nd year student in university. It's my way. If I just study in study room, Exactly I can't become to web developer. I spend a lot of time to study and develop myself.  I work as fullstack web developer, develop and design a system from server-side till client-side.
        </p>
        <p>
          Every works are important for me, therefore I will pay attention in every detail and do it with my best.
        </p>
        <p class="download-resume"><i aria-hidden="true" class="fa fa-file-text"></i><a href="#">Download resume</a></p>
      </div>
    </div>
    <div class="row about-toggle-button">
      <div class="btn-path">
        <div class="line"></div>
        <div id="aboutGraph" class="circle-btn"></div>
      </div>
    </div>
    <div class="showing-content">
      <div class="about-graph-buttons"><a href="#" class="skills">Skills</a><a href="#" class="education">Education & Experience</a></div>
      <div class="about-graph container"></div>
    </div>
  </div>
</div>

@endsection