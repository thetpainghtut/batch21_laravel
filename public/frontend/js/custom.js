function thousands_separators(num){
  var num_parts = num.toString().split(".");
  num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  return num_parts.join(".");
}

$(function(){
  // equal to $( document ).ready(function() {
  showCart()

  $('.addToCart').click(function (e) {
    e.preventDefault();
    item_id = $(this).data('id')
    // alert(item_id)

    qty = 1
    if ($('#exampleModal').hasClass('show')) {
      qty = Number($('.input-number').val())
    }

    url = '/frontend/quickItem/'+item_id;
    // want to be with a method
    $.get(url,function (res) {
      item = res
      item.qty = qty
      console.log(item)

      mycartStr = localStorage.getItem('mycart')
      if (!mycartStr) {
        mycartArr = new Array()
      }else{
        mycartArr = JSON.parse(mycartStr)
      }

      mycartArr.push(item)
      localStorage.setItem('mycart',JSON.stringify(mycartArr))
      showCartCount()
    })
  })

  function showCartCount() {
    alert('hi')
  }

  function showCart() {
    mycartStr = localStorage.getItem('mycart')
    var html;
    subtotal = 0
    yousave = 0
    if (mycartStr) {
      mycartArr = JSON.parse(mycartStr)
      for(item of mycartArr){
        rowtotal = item.qty*item.price
        subtotal += rowtotal
        html+=`<tr>
                <td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
                <td class="product-des" data-title="Description">
                  <p class="product-name"><a href="#">${item.name}</a></p>
                  <p class="product-des">${item.description.substring(0,20)}</p>
                </td>
                <td class="price" data-title="Price"><span>${thousands_separators(item.price)} Ks</span></td>
                <td class="qty" data-title="Qty"><!-- Input Order -->
                  <div class="input-group">
                    <div class="button minus">
                      <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                        <i class="ti-minus"></i>
                      </button>
                    </div>
                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="${item.qty}">
                    <div class="button plus">
                      <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                        <i class="ti-plus"></i>
                      </button>
                    </div>
                  </div>
                  <!--/ End Input Order -->
                </td>
                <td class="total-amount" data-title="Total"><span>${thousands_separators(rowtotal)} Ks</span></td>
                <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
              </tr>`
      }
    }

    $('.subtotal').find('span').html(`Ks ${thousands_separators(subtotal)}`)
    $('.yousave').find('span').html(`Ks ${thousands_separators(yousave)}`)
    $('.youpay').find('span').html(`<span class="font-weight-bold">Ks ${thousands_separators(subtotal-yousave)}</span>`)

    $('.mycart').html(html)
  }
});