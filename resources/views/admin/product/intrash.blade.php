@extends('admin.main')


@section('noidung')

@if($message=Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          id
                      </th>

                      <th>
                          Product Name
                      </th>

                      <th>
                          Slug
                      </th>

                      <th>
                          CatId
                      </th>

                      <th>
                          BrandId
                      </th>

                      <th>
                        Detail
                      </th>

                      <th>
                        Price
                      </th>

                      <th>
                        SalePrice
                      </th>

                      <th>
                        Image
                      </th>
                      
                      <th>
                        Status
                      </th>

                      <th>
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($products as $product)
                  <tr>
                      <td>
                          {{$product -> id}}
                      </td>

                      <td>
                          {{$product -> productName}}
                      </td>

                      <td>
                          {{$product -> slug}}
                      </td>

                      <td>
                          {{$product -> catId}}
                      </td>

                      <td>
                          {{$product -> brandId}}
                      </td>

                      <td>
                          {{$product -> detail}}
                      </td>
                    
                      
                      <td>
                          {{$product -> price}}
                      </td>

                      
                      <td>
                          {{$product -> salePrice}}
                      </td>

                      <td>
                          {{$product -> image}}
                      </td>


                      <td>
                        <a href="/admin/product/{{$product->id}}/restore">
                          <i class="fas fa-trash-restore"></i>
                        </a>

                        <form style='display:inline; ' method="POST" action="/admin/product/{{$product->id}}">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type=submit> Delete </button>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$products->links()}}
@endsection('noidung')
