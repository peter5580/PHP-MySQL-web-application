// show error message when username or password is empty
$(document).ready(function() {
    $('#login_btn').click(function() {
        if ($('#username_input').val() == '' || $('#password_input').val() == '') {
            alert('Username and password cannot be empty.');
        }
    });
});

// change content of iframe when selecting storey
$(document).ready(function() {
    $('#storey-input').change(function() {
        var src = $('#storey-input option:selected').attr('class');
        $('iframe').attr('src', src);
    });
});

// filter progress record by storey and submission status
$(document).ready(function() {
    $('#storey-filter, :checkbox').change(function() {
        // selector for selected storey
        var storey = $('#storey-filter option:selected').text();
        // selector for unchecked submission status
        var checkbox = $(':checkbox:not(:checked)');
        if (storey == "All") {
            //show all rows when the storey filter is 'All'
            $('tr').show();
        }
        else {
            // hide all rows
            $('td').parent().hide();
            // show data rows for selected storey
            $('td:nth-child(3)').each(function() {
                if ($(this).text() == storey) {
                    $(this).parent().show();
                }
            });
        }

        // hide rows for unchecked checkbox
        checkbox.each(function() {
            var status = $(this).val();
            $('td:nth-child(7):contains(' + status + ')').parent().hide();
        })
    });
});
