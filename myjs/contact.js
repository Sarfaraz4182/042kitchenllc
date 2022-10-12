$(document).ready(function () {
    $(".contact").click(function () {

        var form_data = new FormData();

        form_data.append("name", $("input[name='name']").val());
        form_data.append("email", $("input[name='email']").val());
        form_data.append("subject", $("input[name='subject']").val());
        form_data.append("message", $('#message').val());
        $.ajax({
            url: "includes/contact_now.php",
            type: "POST",
            data: form_data,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#requestOverlay").show();
            },
            success: function (response) {
                console.log(response);
                $("#requestOverlay").hide();
                response = JSON.parse(response);
                if (response["message"] === 'success') {
                    $(".alert").addClass("alert-success").html(response["alert"]).fadeIn(200);
                    setTimeout(function () {
                        location.reload("/contact");
                    }, 2000);
                    $("html, body").animate({scrollTop: 0}, "slow");
                } else {
                    $(".alert").addClass("alert-danger").html(response["alert"]).fadeIn(200);
                    $("html, body").animate({scrollTop: 0}, "slow");
                }
            }
        });

    });
});
