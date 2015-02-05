$(document).ready(function() {
    $('#api_method1').change(function()

        {

            var method = $('#api_method1').val();
            $('#api_action').find('option').remove();
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: 'apix/action',
                data: {method: method},
                success: function(data) {

                    data_Arr = data;
                    var line = '';
                    $.each(data_Arr, function(key, value) {
                        line = "<option value=" + value + ">" + value + "</option>";
                        $("#api_action").append(line);
                    });

                }

            });
        }
    );
    $('#api_action').change(function() {

        $(".test").remove();

        var method = $('#api_method1').val();

        var actio = $('#api_action').val();

        $.ajax({
            type: 'POST',
            url: 'apix/listparam',
            dataType: 'json',
            data: {method: method, actio: actio},
            success: function(data) {

                addNewParamRow('action', actio);

                for (var i = 0; i < data.data.p.length; i++)

                {

                    addNewParamRow(data.data.p[i], data.data.v[i]);

                }

            }

        });

    });
});
    $('#more_param').click(function() {

        addNewParamRow("", "");

    });
    function addNewParamRow(pKey, pValue)

    {
        Xnew_row_html = '<tr class="test"><td><span class = "delParam" > [ - ] </span></td><td class="pa"><input class="form-control col-lg-7" type="text" name="params[]" placeholder="Param" value = "' + (!pKey ? '' : pKey) + '"></td><td class="value"><input class="va form-control col-lg-7"" type="text" name="values[]" placeholder="Value" value = "' + ((!pValue || pValue === null) ? '' : pValue) + '"></td></tr>';
        if ($('#paramTable tr:last') != null) {

            $('#paramTable tr:last').after(Xnew_row_html);

        } else {

            $('#paramTable tbody').html(Xnew_row_html);

        }
        $("table td span.delParam").unbind('click');

        $("table td span.delParam").click(function() {

            $(this).parent().parent().fadeTo(400, 0, function() {

                $(this).remove();

            });

            return false;

        });

    }