


<ul id="topMenu" class="nav navbar-nav">
	@foreach($links as $link)
	 <li class=""><a href="{{$link->link}}">{{$link->title}}</a></li>
	 @endforeach

<?php 
if($customerName==''){
?>


	<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">User <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/login">LogIn</a></li>
                <li><a href="/register">Register</a></li>
              </ul>
        </li>


		<!-- <div class="btn-group"> -->





	 		<!-- <a href="/login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	 		<a href="/register" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Register</span></a> -->
		<!-- </div> -->
		<!-- <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Login Block</h3>
			</div>
			<div class="modal-body">
				<form action="/dologin" method="post">
			@csrf
				<div class="control-group">								
					<input type="text" id="inputEmail" placeholder="Email" name=email>
				</div>
				<div class="control-group">
					<input type="password" id="inputPassword" placeholder="Password"name=password>
				</div>
				<div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
				</div>
				<button type="submit" class="btn btn-success">Sign in</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				</form>		
				
			</div> -->
		<!-- </div> -->
	<?php }
	else
	{
	?>
	<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">User <b class="caret"></b></a>
              <ul class="dropdown-menu">
					<li class="">
						<span>{{$customerName}}</span>
						<i class="fa fa-user dropdown__icon"></i>
					</li>
					<li><a href="/historycart">Lịch sử đơn hàng</a></li>
                <li><a href="/logout">LogOut</a></li>
              </ul>
    </li>

		<?php
	}
	?>
</ul>
