$(document).ready(function () {
    $(".reservation").click(function () {

        var form_data = new FormData();

        form_data.append("name", $("input[name='name']").val());
        form_data.append("email", $("input[name='email']").val());
        form_data.append("phone", $("input[name='phone']").val());
        form_data.append("date", $("input[name='date']").val());
        form_data.append("person", $('#person').find(":selected").val());
        form_data.append("time", $('#time').find(":selected").val());

        $.ajax({
            url: "includes/reserve_now.php",
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
                        location.reload("/reservation");
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
