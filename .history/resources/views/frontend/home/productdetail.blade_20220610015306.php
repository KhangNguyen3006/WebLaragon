@extends('frontend.main')

@section('noidung')

    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="/">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Products</a> <span class="divider">/</span></li>
            <li class="active">Product Details</li>
        </ul>	
        <div class="row">	  
                <div id="gallery" class="span3">
                    <a href="{{asset('img/product').'/'.$products->image}}" title="{{$products->productName}}">
                <img src="{{asset('img/product').'/'.$products->image}}" style="width:100%" alt="{{$products->productName}}">
                    </a>
                </div>
                <div class="span6">
                    <h3>{{$products->productName}}  </h3>
                    
                    <hr class="soft">
                    <form class="form-horizontal qtyFrm">

                    <h4>Thông tin sản phẩm</h4>
                        <div>
                            <?php echo $products->detail ?>
                        </div>
                        <div class="control-group">
                        <label class="control-label"><span><p>Price</p><del><div class="btn btn-danger">${{$products->price}}</div></del></span></label>
                        <label class="control-label"><span><p>SalePrice</p><div class="btn btn-success">${{$products->salePrice}}</div></span></label>
                        <div class="controls">
                        <a class="btn btn-warning" href="/cart_Add/{{$products->slug}}"> Add to cart <i class=" icon-shopping-cart"></i></a>
                        </div>
                    </div>
                    </form>
                    <hr class="soft">     
                </div>
                <div class="span9 ">

            <br class="clr">
            <hr class="soft">
            <div class="tab-content">
                <x-frontend.product-by-cat :catId="$products->catId" catName='SẢN PHẨM CÙNG LOẠI'/>
            </div>
                    <br class="clr">
                        </div>
            </div>
            </div>

        </div>
    </div>
@endsection