<div class="modal fade" id="addOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm đơn hàng</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('order.store') }}" id="add-order-form" data-url="{{ route('order.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Họ và tên khách hàng</label>
                <input type="text" name="name" class="form-control" id="input-name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" id="input-email">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" id="input-phone">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" name="address" class="form-control" id="input-address">
            </div>
            <div class="form-group">
                <label for="" class="d-block">Sản phẩm</label>
                <select class="form-select" id="select-product"  aria-label="Default select example">
                    @foreach ($products as $product)
                    <option value={{$product->name}} >{{$product->name}}</option> 
                    @endforeach
                    
                    
                </select>
                <input aria-label="quantity" id="input-qty" min="1" max="9999" type="number" value="1">
                <input id="input-price" type="text" placeholder="Đơn giá">
                <a type="submit" href = "" class="addListPro"><i class="fas fa-plus-square"></i></a>
          
          
          
            </div>
              <div class="form-group">
                <table class="table">
                    <thead>
                      <tr>
                        
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành tiền</th>
                      </tr>
                    </thead>
                    <tbody id="render-product">
                     
                    </tbody>
                  </table>    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>