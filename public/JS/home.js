$(document).ready(function () {
    function logout() {
        const apiEndpoint = "/api/logout";
        $.ajax({
            url: apiEndpoint,
            method: "POST",
            headers: {
                Authorization: "Bearer " + storedToken,
                "Content-Type": "application/json",
            },
            success: function (response) {
                localStorage.removeItem("token");
                $.removeCookie("token");
                window.location.href = "/login";
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText);
            },
        });
    }
    $("#logoutButton").on("click", function () {
        console.log(storedToken);
        logout();
    });

    let tokenTimeout;

    function setTokenTimeout() {
        tokenTimeout = setTimeout(function () {
            localStorage.removeItem("token");
            $.removeCookie("token");
            window.location.href = "/login";
        }, 3600000); // 60 minutes
        // 600,000 milliseconds = 10 minutes
    }

    function resetTokenTimeout() {
        clearTimeout(tokenTimeout);
        setTokenTimeout();
    }

    $(document).on("mousemove keydown", function () {
        resetTokenTimeout();
    });

    $(window).on("unload", function () {
        // setTokenTimeout();
        console.log("buka");
    });

    // setTokenTimeout();
    $(window).on("beforeunload", function () {
        console.log("tutup");
    });
});
