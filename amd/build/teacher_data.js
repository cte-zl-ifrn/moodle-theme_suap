define(["core/str"], function(str) {
    let url = '';
    let course = document.querySelector('#course-infos');
    let courseid = course.getAttribute('data-courseid');
    let teacherDataContainers = document.querySelectorAll('[data-render="teacher-numbers"]');

    async function loadTeacherData() {
        if (!url) {
            console.error('URL da API não foi definida.');
            return;
        }

        try {
            const response = await fetch(`${url}?courseid=${courseid}`);

            if (!response.ok) {
                throw new Error(`Erro na requisição: ${response.status} ${response.statusText}`);
            }

            const teacherData = await response.json();
            renderTeacherData(teacherData);

        } catch (error) {
            console.error('Error loading teacher data:', error);
        }

    }

    function renderTeacherData(teacherData) {
        teacherData.forEach((teacher, i) => {
            teacherDataContainers[i].innerHTML = `
                <div data-info="students">
                    <i class="fa-solid fa-user-group"></i>
                    <span>${teacher.totalstudents} alunos</span>
                </div>
                <div data-info="courses">
                    <i class="fa-regular fa-file-lines"></i>
                    <span>${teacher.courses.length} cursos</span>
                </div>
            `;    
        });
    }

    return {
        init: (requestUrl) => {
            url = requestUrl;
            loadTeacherData();
        }
    }
})