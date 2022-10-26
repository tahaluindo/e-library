loadCart()

// Cart
async function loadCart(){
    const res = await fetch('/data-cart')
    console.log(res);

    if(res.status == 200){
        var data = await res.json()
        $('.cartCount').text(data.count)
        if(data.count > 0){
            $('.cartCount').removeClass('d-none')
        } else {
            $('.cartCount').addClass('d-none')
        }

        var render = ''
        $.each(data.data, function(key, val) {
            render += `
            <li class="single-shopping-cart">
            <div class="shopping-cart-img">
                <img alt="" width="60px" src="${$('meta[name="base_url"]').attr('content')}/${val.product.foto_buku}">
            </div>
            <div class="shopping-cart-title">
                <h4><a href="#">${val.product.nama_buku}</a></h4>
                <span>Simpleman</span>
            </div>
            <div class="shopping-cart-delete">
                <a class="remove-from-cart" href="/remove-from-cart/${val.id}"><i class="ion ion-close"></i></a>
            </div>
        </li>`

        })

        $('.minicart-list').html(render)
        $('.remove-from-cart').unbind().on('click', async function(e) {
            e.preventDefault()
            const res = await fetch($(this).attr('href'), {
                method: 'delete',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            if(res.status == 200) {
                loadCart()
            } else {
                alert('Data Gagal Dihapus')
            }
        })
    } else {
        alert('Opps! Terjadi Kesalahan')
    }
}

$('.add-to-cart').unbind().on('click', async function(e) {
    e.preventDefault()
    var url = $(this).attr('href')

    const res = await fetch(url)

    if(res.status == 200) {
        loadCart()
    } else {
        alert('Opps! Terjadi Kesalahan')
    }
})


