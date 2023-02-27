$(document).ready(function () {
    $('.btn-details').click(function () {
        let modal = $('#modal_details');
        let trackingCode = $(this).closest('tr').attr('data-trackingCode');
        let position = $(this).closest('tr').attr('data-position');
        modal.find('span#trackingCode').text(trackingCode);
        modal.modal('show');
        let data = JSON.parse(orders.replace(/&quot;/g, '"'))[position];
        console.log(data);
        modal.find('#status').text(data.status.name);
        modal.find('#payType').text(data.pay_type.name);
        modal.find('#sendType').text(data.send_type.name);
        modal.find('#created_at').text(data.created_at);
        modal.find('#address').text(data.address);
        modal.find('#send_price').text(parseInt(data.send_price).toLocaleString('en') + ' ريال ');
        modal.find('#price').text(parseInt(data.price).toLocaleString('en') + ' ريال ');
        getOrderProducts(trackingCode, modal);
    });

    function getOrderProducts(trackingCode, modal) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': token
            },
            type: 'post',
            url: orderDetails_url,
            data: {
                'trackingCode': trackingCode
            },
            success: function (data) {
                modal.find('table tbody tr').remove();
                modal.find('#spinner').css('display', 'none');
                for (let i = 0; i < data.length; i++) {
                    let product_url = show_product_url.replace('1234', data[i].shop_product
                        .slug);
                    modal.find('table tbody').append(`
                    <tr>
                        <td>
                            <span class="mt-0">` + data[i].shop_product.product.name + `</span>
                        </td>
                        <td>
                            <span>` + data[i].count + `</span>
                        </td>
                        <td>
                            <span class="theme-color fs-6">` + parseInt(data[i].price).toLocaleString('en') +
                        ' ريال ' + `</span>
                        </td>
                        <td>
                            <a href="` + product_url + `" class="btn btn-outline-info rounded" style="vertical-align:middle;">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </td>
                    </tr>
                `);
                }
            },
            error: function (error) {
                console.log(error);
                modal.find('#spinner').css('display', 'none');
            }
        });
    }
});
