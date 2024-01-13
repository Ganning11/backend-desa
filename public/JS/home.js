$(document).ready(function () {
    $("#logoutButton").on("click", function () {
        const apiEndpoint = "/api/logout";
        console.log(storedToken);

        $.ajax({
            url: apiEndpoint,
            method: "POST",
            headers: {
                Authorization: "Bearer " + storedToken,
                "Content-Type": "application/json",
            },
            success: function (response) {
                window.location.href = "/login";
                localStorage.removeItem("token");
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText);
            },
        });
    });
    let tokenTimeout;

    function setTokenTimeout() {
        tokenTimeout = setTimeout(function () {
            localStorage.removeItem("token");
            window.location.href = "/login";
        }, 600000);
        // 600,000 milliseconds = 10 minutes
    }

    function resetTokenTimeout() {
        clearTimeout(tokenTimeout);
        setTokenTimeout();
    }

    $(document).on("mousemove keydown", function () {
        resetTokenTimeout();
    });

    $(window).on("beforeunload", function () {
        setTokenTimeout();
        console.log("tutup");
    });
    // $(window).on("unload", function () {
    //     setTokenTimeout();
    // });

    setTokenTimeout();
});
