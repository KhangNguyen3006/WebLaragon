@extends('admin.main')


@section('noidung')
@if($message=Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif
@if ($errors->any())
  	<div class="alert alert-danger">
  		<ul>
  			@foreach ($errors->all() as $error)
  			<li>{{$error}}</li>
  			@endforeach
  		</ul>
  	</div>
 @endif

<form action="/admin/product" method=post>
	@csrf
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" class="form-control" name=productName>
            </div>


            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" id="slug" class="form-control" name=slug>
            </div>


            <div class="form-group">
                <label for="catId">catName</label>
                <select name=catId>
                <option>----</option>
                    @foreach($categories1 as $category1)
                        <optgroup label="{{$category1->catName}}">

                        @foreach($categories2 as $category2)
                            @if($category2->parentId==$category1->id)
                                <option value={{$category2->id}}>
                                    {{$category2->catName}}
                                </option>
                            @endif
                        @endforeach  

                        </optgroup>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="brandId">BrandID</label>
                <select name=brandId>
                    @foreach($brands as $brand)
                        <option value='{{$brand->id}}'>{{$brand->brandName}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea class=editor name=detail cols=100 rows=5></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" class="form-control" name=price>
            </div>

            <div class="form-group">
                <label for="salePrice">Sale Price</label>
                <input type="number" id="salePrice" class="form-control" name=salePrice>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" class="form-control" name=image>
            </div>

            
            <div class="form-group">
                <label for="status">Status</label>
                <select name=status>
                	<option value=0>Ẩn</option>
                	<option value=1>Hiện</option>
                </select>
            </div>
            
            <div class="form-group">
            	<input type=submit value=submit>
            </div>

              
</form>

@endsection('noidung')