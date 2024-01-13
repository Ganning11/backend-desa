$(document).ready(function () {
    $.ajax({
        url: "api/admin/dashboard",
        method: "GET",
        dataType: "json",
        headers: {
            Authorization: "Bearer " + storedToken,
            Accept: "application/json",
            "Content-Type": "application/json",
        },
        success: function (data) {
            // Tampilkan data di dalam elemen dengan id "result"
            console.log(data);
            $("#categories").text(data.data.categories + " Categories");
        },
        error: function (xhr, status, error) {
            console.error("Error:", status, error);
        },
    });
});
