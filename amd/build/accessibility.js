define(["core/str", "core_user/repository"], function(str, Repository) {

    function activeAccessibility() {
        let checkboxes = document.querySelectorAll('.custom-checkbox-access input[type="checkbox"]');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', (event) => {
                let target = event.target;
                const checked = target.checked;
                const className = `accessibility_${target.id}`;
                const prefName = `theme_suap_accessibility_${target.id}`;

                if (checked) {
                    document.body.classList.add(className);
                } else {
                    document.body.classList.remove(className);
                }

                Repository.setUserPreference(prefName, checked);
            });
        })

    }

    return {
        init: () => {
            Repository.getUserPreferences().then(prefs => {
                for (const key in prefs) {
                    // console.log(key + ' = ' + prefs[key]);
                    if (key.startsWith('theme_suap_accessibility_') && prefs[key] === "1") {
                        const id = key.replace('theme_suap_accessibility_', '');
                        const input = document.getElementById(id);
                        if (input) {
                            input.checked = true;
                            document.body.classList.add(`accessibility_${id}`);
                        }
                    }
                }
            });

            activeAccessibility();            
        }
    }

})