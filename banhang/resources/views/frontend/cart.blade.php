@extends('frontend.master')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

  <table id="cart" class="table table-hover table-condensed">
    <h1 style="margin-top: 100px;">Giỏ Hàng</h1>
    <thead>
        <p
        class="breadcrumbs mb-0">
           <span class="mr-2"><h4>Số Lượng Sp:  {{count($cart)}} Lọai</h4> </span>
   </p></div></div>
   <form  action="{{route('cart.update')}}" method="post">
      <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">Price</th>
        <th style="width:8%">Quantity</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
        @php $tong = 0; @endphp
                        @foreach ($cart as $id=>$item)
                        @php $tt = $item['gia']*$item['soluongmua']; $tong+=$tt; @endphp
      <tr>
        <td data-th="Product">
          <div class="row">
            <div class="col-sm-2 hidden-xs"><img style="width: 100px; height: 44px;"src="{{$item['hinh']}}" alt="..." class="img-responsive" /></div>
            <div class="col-sm-10">
              <h4 class="nomargin">{{$item['ten']}}</h4>
              <p></p>
            </div>
          </div>
        </td>
        <td data-th="Price">{{number_format($item['gia'])}}</td>
        <td data-th="Quantity">
            <input id="soluong" type="text"  name="soluongmua[{{$id}}]" value="{{$item['soluongmua']}}" class="quantity form-control input-number"
            min="1" max="100">
        </td>
        <td data-th="Subtotal" class="text-center">{{number_format($tt)}}</td>
        <td class="actions" data-th="">
            @csrf
          <p><button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button></p>
          <a  onclick="return confirm('bạn có chắc muốn xóa sp ko')" href="{{route('cart.del',$id)}}"  >
          <span class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></span>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr class="visible-xs">
        <td class="text-center"><strong>Tổng Tiền {{number_format($tong)}}</strong></td>
      </tr>
      @csrf
      <tr>
        <td><a href="{{route('f.home')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Mua Tiếp</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Tổng Tiền {{number_format($tong)}}</strong></td>
        <td><a href="{{route('checkout.index')}}" class="btn btn-success btn-block">Thanh Toán <i class="fa fa-angle-right"></i></a></td>
      </tr>
    </tfoot>
  </table>
   </form>

</div>
<style>

.table>tbody>tr>td,
.table>tfoot>tr>td {
  vertical-align: middle;
}

@media screen and (max-width: 600px) {
  table#cart tbody td .form-control {
    width: 20%;
    display: inline !important;
  }
  .actions .btn {
    width: 36%;
    margin: 1.5em 0;
  }
  .actions .btn-info {
    float: left;
  }
  .actions .btn-danger {
    float: right;
  }
  table#cart thead {
    display: none;
  }
  table#cart tbody td {
    display: block;
    padding: .6rem;
    min-width: 320px;
  }
  table#cart tbody tr td:first-child {
    background: #333;
    color: #fff;
  }
  table#cart tbody td:before {
    content: attr(data-th);
    font-weight: bold;
    display: inline-block;
    width: 8rem;
  }
  table#cart tfoot td {
    display: block;
  }
  table#cart tfoot td .btn {
    display: block;
  }
}
</style>
@endsection
