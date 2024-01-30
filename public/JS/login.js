$(document).ready(function () {
    $("#loginForm").submit(async function (event) {
        event.preventDefault();

        let row = $("#dataLogin");
        let email = row.find('input[name="emailLogin"]').val();
        let password = row.find('input[name="passwordLogin"]').val();

        var data = {
            email: email,
            password: password,
        };

        console.log(data);

        try {
            const response = await $.ajax({
                url: "/api/login",
                method: "POST",
                contentType: "application/json",
                data: JSON.stringify(data),
            });
            console.log(data);

            if (response.success) {
                const token = response.token;
                console.log(response.nama);
                console.log(response.email);
                console.log(response.token);

                localStorage.setItem("token", token);
                // var urlSimpan = localStorage.getItem("urlDefault");

                // if (urlSimpan !== null) {
                //     window.location.href = urlSimpan;
                //     setTimeout(function () {
                //         localStorage.removeItem("urlDefault");
                //     }, 400);
                // } else {
                window.location.href = "/";
                // }
            }
        } catch (error) {
            Swal.fire({
                title: "Terjadi Kesalahan",
                text: "Email atau Password Salah",
                icon: "error",
                timer: 2000,
                showConfirmButton: false,
            });
        }
    });
});
