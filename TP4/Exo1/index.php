<!doctype html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <title>tabletest</title>
</head>

<body>
    <h1>Table test</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Aime le cours Web</th>
                <th scope="col">Remarques</th>
                <th scope="col">CRUD</th>
            </tr>
        </thead>
        <tbody id="studentsTableBody">
        </tbody>
    </table>
    <form id="addStudentForm" action="" onsubmit="onFormSubmit();" style="margin-left: auto; margin-right: auto; width: 6em">
        <div class="form-group row">
            <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputNom">
            </div>
            <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputPrenom">
            </div>
            <label for="inputBirthday" class="col-sm-2 col-form-label">Date de naissance</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="inputBirthday">
            </div>
            <label for="inputAvis" class="col-sm-2 col-form-label">Aime le cours de web</label>
            <div class="col-sm-3">
                <input type="checkbox" class="form-control" id="inputAvis">
            </div>
            <label for="inputRemarques" class="col-sm-2 col-form-label">Remarques</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputRemarques">
            </div>
        </div>
        <div class="form-group" style="margin-top:10px">
            <span class="col-sm-2"></span>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary form-control" id="submit">Submit</button>
            </div>
        </div>
    </form>
    <script>
        let editStudent = false;
        let currentStudent = -1;
        let students = [];

        function displayStudents() {

            let showStudents = "";
            for (let i = 0; i < students.length; i++) {
                showStudents += `<tr id="#row"+"${i}"><td>${students[i]['nom']}</td>
                <td>${students[i]['prenom']}</td>
                <td>${students[i]['birthday']}</td>
                <td>${students[i]['avis']}</td>
                <td>${students[i]['remarque']}</td>
                <td>
                <button class="btn btn-primary" onclick="editStudent(${i})" style="margin-right:10px">Edit</button>
                <button class="btn btn-primary" onclick="deleteStudent(${i})">Delete</button>
                </td></tr>`
            }

            $('#studentsTableBody').html(showStudents);

        }

        function addStudent() {
            let nom = $("#inputNom").val();
            let prenom = $("#inputPrenom").val();
            let birthday = $("#inputBirthday").val();
            let remarques = $("#inputRemarques").val();
            let avis
            if ($("#inputAvis").prop('checked')) {
                avis = 'oui';
            } else {
                avis = 'non'
            };

            if (nom != "") {
                students.push({
                    id: students.length + 1,
                    nom: nom,
                    prenom: prenom,
                    avis: avis,
                    birthday: birthday,
                    remarque: remarques
                })
            }
        }

        function addStudentInRow(index) {

            let nom = $("#inputNom").val();
            let prenom = $("#inputPrenom").val();
            let birthday = $("#inputBirthday").val();
            let remarques = $("#inputRemarques").val();
            let avis
            if ($("#inputAvis").prop('checked')) {
                avis = 'oui';
            } else {
                avis = 'non'
            };

            if (nom != "") {
                let newStudent = {
                    id: student.length + 1,
                    nom: nom,
                    prenom: prenom,
                    birthday: birthday,
                    avis: avis,
                    remarque: remarques
                }
            }

            console.log(students.join());
            arr.splice(index, 0, newStudent);
            console.log(arr.join());
        }

        function onFormSubmit() {
            // prevent the form to be sent to the server
            event.preventDefault();
            if (editStudent) {
                echo('true');
                addStudentInRow(currentStudent);
                students.splice(currentStudent + 1, 1);
                displayStudents();
            } else {
                echo('false');
                addStudent();
                displayStudents();
            }
            editStudent = false;
            currentStudent = -1;
        }

        function deleteStudent(index) {
            students.splice(index, 1);
            displayStudents();
        }

        function editStudent(index) {
            $(':input', '#addStudentForm')
                .val('')
                .prop('checked', false);
            editStudent = true;
            currentStudent = index;
        }
    </script>
</body>

</html>