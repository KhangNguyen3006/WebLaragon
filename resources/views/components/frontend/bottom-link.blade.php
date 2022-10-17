<div class="span3">
				@foreach($links as $link)
				<a href="{{$link->link}}">{{$link->title}}</a>
				@endforeach
			 </div>