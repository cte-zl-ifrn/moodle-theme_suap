define(["core/str"], function(str) {
    let url = '';
    let course = document.querySelector('#course-infos');
    let courseid = course.getAttribute('data-courseid');
    console.log(courseid)

    async function loadTeacherData() {
        if (!url) {
            console.error('URL da API não foi definida.');
            return;
        }

        try {
            const response = await fetch(`${url}?courseid=${courseid}`);
            console.log(response)

            if (!response.ok) {
                throw new Error(`Erro na requisição: ${response.status} ${response.statusText}`);
            }

            const teacherData = await response.json();
            console.log(teacherData);
        } catch (error) {
            console.error('Error loading teacher data:', error);
        }

    }

    return {
        init: (requestUrl) => {
            url = requestUrl;
            loadTeacherData();
        }
    }
})