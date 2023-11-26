
$(function () {
    $("#postcode").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "api/postcode-autocomplete",
                dataType: "json",
                data: {
                    term: request.term
                },
                type: "GET",
                success: function (data) {

                    response(data['value']);

                }
            });
        }
    });
});


