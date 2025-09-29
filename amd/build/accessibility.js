define(["core/str"], function(str) {

    function activeAccessibility() {
        let checkboxes = document.querySelectorAll('.custom-checkbox-access input[type="checkbox"]');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('click', (event) => {
                let target = event.target;
                if (checkbox.checked) {
                    document.body.classList.add(`accessibility-${target.id}`);
                } else {
                    document.body.classList.remove(`accessibility-${target.id}`);
                }

            });
        })

    }

    return {
        init: () => {
            activeAccessibility();            
        }
    }

})