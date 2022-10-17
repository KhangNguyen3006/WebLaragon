@extends('frontend.main')
@section('noidung')
    <h4>Tìm thấy {{count($products)}} sản phẩm</h4>
        <ul class="thumbnails">
            @foreach($products as $p)
                    <li class="span4">
                        <div class="thumbnail">
                            <a href="/detail/{{$p->slug}}"><img src="{{asset('img/product').'/'.$p->image}}" alt=""></a>
                            <div class="caption">
                                <h5>{{$p->productName}}</h5>
                                <h4 style="text-align:center"><a class="btn" href="/detail/{{$p->slug}}"> <i class="icon-zoom-in"></i></i></a><del> <a class="btn btn-primary" href="#">{{$p->price}}$</a><a class="btn btn-danger" href="#">{{$p->salePrice}}$</a></h4>
                            </div>
                        </div>
                    </li>
            @endforeach
            
        </ul>
 @endsection('noidung')
