define(["core/str", "jquery"], function(str, $) {

    function toggleUserProfile() {
        const collapseElement = document.getElementById("collapseProfile");
        const toggleButton = document.querySelector(".toggle-section[data-toggle='collapse']");

        if (collapseElement && toggleButton) {
            $('#collapseProfile').on('show.bs.collapse', function () {
                toggleButton.textContent = "Ver menos";
            });

            $('#collapseProfile').on('hide.bs.collapse', function () {
                toggleButton.textContent = "Ver mais";
            });
        }
    }

    return {
        init: () => {
            toggleUserProfile();
        }
    }
})