define(["core/str", "core_user/repository", "core/config"], function(str, Repository, Config) {

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
                syncPreference(target.id, checked);
            });
        })
    }


    function syncPreference(key, value) {        
        const url = Config.wwwroot + '/local/suap/api/index.php?sync_user_preference'
                + '&category=accessibility'
                + '&key=' + key
                + '&value=' + encodeURIComponent(value ? 'true' : 'false');

        console.log('Syncing preference:', url);

        fetch(url, {
            method: 'GET',
            credentials: 'same-origin' // garante que os cookies do Moodle sejam enviados
        })
        .then(resp => resp.json())
        .then(data => {
            console.log('Sync response:', data);
        })
        .catch(err => {
            console.error('Erro ao sincronizar preferência:', err);
        });
    }



    const container = document.getElementById('selector-cycle-access');
    const zoomValue = document.getElementById('zoom-value');
    const indicators = document.getElementById('cycle-indicators');
    const button = document.getElementById('cycle-toggle');

    let preferences = {
        zoom_level: 100,
        zoom_options: [100, 120, 130, 150, 160]
    };

    Repository.getUserPreference('theme_suap_accessibility_zoom_level').then(value => {
        if (value) {
            preferences.zoom_level = parseInt(value);
        }

        button.addEventListener('click', cycleAccessibility);

        renderZoom();
    })


    function renderZoom() {
        // Atualizar classe ativa do container
        if (preferences.zoom_level > 100) {
            container.classList.add('active');
        } else {
            container.classList.remove('active');
        }

        // Atualizar valor do zoom
        zoomValue.textContent = preferences.zoom_level + '%';

        // Renderizar indicadores
        indicators.innerHTML = ''; // limpar antes de recriar
        preferences.zoom_options
        .filter(level => level > 100)
        .forEach(level => {
            const span = document.createElement('span');
            span.classList.add('cycle-indicator');
            if (level <= preferences.zoom_level) {
                span.classList.add('active');
            }
            indicators.appendChild(span);
        });
    }


    function cycleAccessibility() {
        const currentIndex = preferences.zoom_options.indexOf(preferences.zoom_level);
        const nextIndex = (currentIndex + 1) % preferences.zoom_options.length;
        preferences.zoom_level = preferences.zoom_options[nextIndex];

        Repository.setUserPreference('theme_suap_accessibility_zoom_level', preferences.zoom_level);

        // Atualizar atributo no body
        document.body.setAttribute('data-zoom', preferences.zoom_level);

        renderZoom();
    }

    return {        
        init: () => {            
            Repository.getUserPreferences().then(prefs => {

                if (prefs['theme_suap_accessibility_vlibras_active'] === undefined) {
                    prefs['theme_suap_accessibility_vlibras_active'] = "1";
                }

                for (const key in prefs) {
                    if (key.startsWith('theme_suap_accessibility_') && prefs[key] === "1") {
                        const id = key.replace('theme_suap_accessibility_', '');
                        const input = document.getElementById(id);
                        if (input) {
                            input.checked = true;
                            // document.body.classList.add(`accessibility_${id}`);
                        }
                    }
                }
            });

            activeAccessibility();

        }
    }

})