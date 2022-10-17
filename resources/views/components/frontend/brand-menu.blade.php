<ul id="sideManu" class="nav nav-tabs nav-stacked">
	<li class="subMenu open">
		<a> Thương hiệu sản phẩm </a>
		<ul>
			@foreach($brands as $b)
				<li>
					<a class="active" href="/brand/{{$b->slug}}"><i class="icon-chevron-right"></i>
							{{$b->brandName}}
					</a>
				</li>
			@endforeach
				
		</ul>
	</li>
</ul>