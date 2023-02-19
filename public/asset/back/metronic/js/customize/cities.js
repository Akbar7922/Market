
$('#state').on('change', function () {
    getCities(0);
});


function getCities(city_id) {
    let state_id = $('#state' + " option:selected").val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        type: 'post',
        url: getCitiesUrl,
        data: {'state_id': state_id},
        success: function (data) {
            if (data.length > 0) {
                $('#city').empty();
                let optionText, optionValue;
                for (let i = 0; i < data.length; i++) {
                    optionText = data[i]['name'];
                    optionValue = data[i]['id'];

                    $('#city').append(`<option value="${optionValue}">
                                ${optionText}
                            </option>`);
                }
                if (city_id > 0)
                    $('select#city option[value=' + city_id + ']').prop('selected', true);
            }
        },
        error: function (e) {
            console.log(e);
        }
    });
}
