<ul id="sideManu1" class="nav nav-tabs nav-stacked">
    <h5>Danh mục sản phẩm</h5>
			@foreach($categories1 as $cat1)
                <li class="subMenu open">

                    <a> {{$cat1->catName}}</a>
                        <ul>
                            @foreach($categories2 as $cat2)
                                @if ($cat2->parentId==$cat1->id)
                                    <li>
                                        <a class="active" href="/category/{{$cat2->slug}}">
                                            <i class="icon-chevron-right"></i>
                                            {{$cat2->catName}}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                </li>
			@endforeach
			
</ul>