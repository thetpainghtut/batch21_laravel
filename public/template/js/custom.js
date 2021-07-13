// Custom JS
$(document).ready(function(){
  // Insert into LS
  $('.add-to-cart').click(function(){
    // id, name, photo, price, qty
    var id = $(this).data('id');
    var name = $(this).data('name');
    var photo = $(this).data('photo');
    var price = $(this).data('price');
    var discount = $(this).data('discount');

    var item = {id:id,name:name,photo:photo,price:price,qty:1};

    var mycartjson = localStorage.getItem('mycart');
    if (!mycartjson) {
      mycartarray = new Array();
    }else{
      mycartarray = JSON.parse(mycartjson);
    }
    // condition
    mycartarray.push(item);

    localStorage.setItem('mycart',JSON.stringify(mycartarray));
  })

  // Retrieve For Cart Page
  getData();

  function getData(argument) {
    var mycartjson = localStorage.getItem('mycart');
    var html="";
    var total = 0;
    if (mycartjson) {
      mycartarray = JSON.parse(mycartjson);

      for(item of mycartarray){
        total += (item.price*item.qty);
        html+= `<tr>
            <td><button class="btn btn-danger btn-sm">x</button> 1</td>
            <td>
              ${item.name}
              <img src="{{asset('/template/assets/img/home-bg.jpg')}}" class="w-25">
            </td>
            <td>
              ${item.price}
            </td>
            <td>
              <input type="number" name="quantity" class="form-control" value="${item.qty}">
            </td>
            <td>
              ${(item.price*item.qty)}
            </td>
          </tr>`;
      }

      html += `<tr>
                <td colspan="4">Total: </td>
                <td>${total}</td>
              </tr>`;
      $('.checkout').attr('data-total',total);
    }else{
      $('.checkout').addClass('disabled');
      html = `<tr>
                <td colspan="5">Empty Cart!</td>
              </tr>`;
    }
    $('#tbody').html(html);
  }

  // checkout process
  $('.checkout').click(function(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var mycartjson = localStorage.getItem('mycart');
    var total = $(this).data('total');
    $.post("/order",{data:mycartjson,total:total},function(res){
      // console.log(res);
      // remove ls
      localStorage.clear();
      getData();
      // use sweetalert
    })
  })
})