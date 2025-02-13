function push_state(id) {
      $('#product-id-delete').val(id)
}

async function edit_product(id) {
      $(`#loading-${id}`).show();
      $(`#editlogo-${id}`).hide();
      try {
            axios.get(`api/products/${id}`).then(response => {
                  let product = response.data
      
                  $("#name").val(product.name);
                  $("#description").val(product.description);
                  $("#price").val(product.price);
                  $("#stok").val(product.stok);
      
                  // $('.updateProductButton').click(function () {
                  $("#drawer-update-product-default").removeClass('translate-x-full').addClass('translate-x-0')
                  $(`#loading-${id}`).hide();
                  $(`#editlogo-${id}`).show();
                  // })
            })
      } catch(error) {
            console.log(error)
      }
      
}