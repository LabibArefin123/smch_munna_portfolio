(function () {
    function buildLocationUrls(name, address) {
        const destination = [name, address].filter(Boolean).join(", ");
        const encodedDestination = encodeURIComponent(destination);

        return {
            uber:
                "https://m.uber.com/ul/?action=setPickup&pickup=my_location&dropoff[formatted_address]=" +
                encodedDestination +
                "&dropoff[nickname]=" +
                encodeURIComponent(name),
            pathao: getPathaoAppUrl(),
            map:
                "https://www.google.com/maps/dir/?api=1&destination=" +
                encodedDestination,
        };
    }

    function getPathaoAppUrl() {
        const isAndroid = /Android/i.test(navigator.userAgent);

        if (isAndroid) {
            return "intent://ride/#Intent;scheme=pathao;package=com.pathao.user;end";
        }

        return "pathao://ride";
    }

    function openRideUrl(action, url) {
        if (!url) {
            return;
        }

        const newWindow = window.open(url, "_blank", "noopener,noreferrer");

        if (!newWindow) {
            window.location.href = url;
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        document
            .querySelectorAll(".location-ride-actions")
            .forEach(function (group) {
                const name = group.getAttribute("data-location-name") || "";
                const address =
                    group.getAttribute("data-location-address") || "";
                const urls = buildLocationUrls(name, address);

                group
                    .querySelectorAll("[data-ride-action]")
                    .forEach(function (button) {
                        button.addEventListener("click", function () {
                            const action =
                                button.getAttribute("data-ride-action");
                            openRideUrl(action, urls[action]);
                        });
                    });
            });
    });
})();
