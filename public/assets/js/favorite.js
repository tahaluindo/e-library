
loadCart()

$('.add-to-favorite').unbind().on('click', async function(e) {
    e.preventDefault()
    var url = $(this).attr('href')

    const res = await fetch(url)

    if(res.status == 200) {
        loadCart()
    } else {
        alert('Opps! Terjadi Kesalahan')
    }
})
