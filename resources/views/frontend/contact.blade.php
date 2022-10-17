@extends('frontend.main')


<link rel="stylesheet" href="{{asset('template/frontend/themes/css/button.css')}}">
@section('noidung')

<div class="container">
	<hr class="soften">
	<h1>Visit us</h1>
	<hr class="soften">	
	<div class="row">
		<div class="span3">
		<h4>Địa chỉ liên hệ</h4>
		<p>	1147 Đường Nguyễn Duy Trinh<br> Long Trường, Thành phố Thủ Đức, Thành phố Hồ Chí Minh
			<br><br>
			info@bootsshop.com<br>
			﻿Tel 123-456-6780<br>
			Fax 123-456-5679<br>
			web:bootsshop.com
		</p>		
		</div>
			
		<div class="span3">
		<h4>Thời gian mở cửa</h4>
			<h5> Thứ 2 - Thứ 7</h5>
			<p>09:00am - 09:00pm<br><br></p>
			<h5>Chủ Nhật</h5>
			<p>09:00am - 10:00am<br><br></p>
		</div>
		<div class="span3">
		<h4>Email phản hồi</h4>
	<form class="form-horizontal" method="post" action="/docontact">
    @csrf
        <fieldset>
		   <div class="control-group">
           
              <input type="email" name="email" placeholder="Email" class="input-xlarge">
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="title" placeholder="Title" class="input-xlarge">
          
          </div>
          <div class="control-group">
              <textarea rows="3" name="content" placeholder="Content" class="input-xlarge"></textarea>
           
          </div>

            <!-- <button class="btn btn-large" type="submit">Send Messages</button> -->
			<button class="button" type="submit" name=SUBMIT >Send Messages</button>
        </fieldset>
      </form>
		</div>
	</div>
	<div class="row">
	<div class="span9">
    <h4>Location</h4>
	<iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15676.894501565408!2d106.8060391!3d10.7941773!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1641923156785!5m2!1svi!2s"></iframe><br>
	</div>
	</div>
</div>

@endsection