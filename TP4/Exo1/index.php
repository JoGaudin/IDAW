<!doctype html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <title>tabletest</title>
    <style>
        body{ margin-top: 5em; }
        .table {
        margin-top: 100px;
        margin-bottom: 100px;
        }
    </style>
</head>

<body>
    <h1>Tableau de personnes</h1>
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
    <form id="addStudentForm" action="" onsubmit="onFormSubmit();">
        <div class="form-group row">
            <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputNom">
            </div>
            <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputPrenom">
            </div>
            <label for="inputanniv" class="col-sm-2 col-form-label">Date de naissance</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="inputanniv">
            </div>
            <label for="inputAime" class="col-sm-2 col-form-label">Aime le cours de web</label>
            <div class="col-sm-3">
                <input type="checkbox" class="form-control" id="inputAime">
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
                <td>${students[i]['anniv']}</td>
                <td>${students[i]['avis']}</td>
                <td>${students[i]['remarque']}</td>
                <td>
                <button class="btn btn-primary" onclick="edit_Student(${i})" style="margin-right:10px">Edit</button>
                <button class="btn btn-primary" onclick="deleteStudent(${i})">Delete</button>
                </td></tr>`
            }

            $('#studentsTableBody').html(showStudents);

        }

        function addStudent() {
            let nom = $("#inputNom").val();
            let prenom = $("#inputPrenom").val();
            let anniv = $("#inputanniv").val();
            let remarques = $("#inputRemarques").val();
            let avis
            if ($("#inputAime").prop('checked')) {
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
                    anniv: anniv,
                    remarque: remarques
                })
            }
        }

        function addStudentInRow(index) {
            let newStudent = [];
            let nom = $("#inputNom").val();
            let prenom = $("#inputPrenom").val();
            let anniv = $("#inputanniv").val();
            let avis
            if ($("#inputAime").prop('checked')) {
                avis = 'oui';
            } else {
                avis = 'non'
            };
            let remarques = $("#inputRemarques").val();
            

            if (nom != "") {
                newStudent.push({
                    id: students.length + 1,
                    nom: nom,
                    prenom: prenom,
                    anniv: anniv,
                    avis: avis,
                    remarque: remarques
                }) 
            }


        }

        function onFormSubmit() {
            // prevent the form to be sent to the server
            event.preventDefault();
            if (editStudent) {
                document.getElementById('inputNom').style.background = '#696969';
                document.getElementById('inputPrenom').style.background = '#696969';
                document.getElementById('inputanniv').style.background = '#696969';
                document.getElementById('inputRemarques').style.background = '#696969';
                console.log('true');
                addStudentInRow(currentStudent);
                edit_Student(currentStudent);
                students.splice(currentStudent + 1, 1);
                displayStudents();
            } else {
                document.getElementById('inputNom').style.background = '#999999';
                document.getElementById('inputPrenom').style.background = '#999999';
                document.getElementById('inputanniv').style.background = '#999999';
                document.getElementById('inputRemarques').style.background = '#999999';
                console.log('false');
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

        function edit_Student(index) {
            $(':input', '#addStudentForm')
                .val('')
                .prop('checked', false);
            editStudent = true;
            currentStudent = index;
        }
    </script>
</body>

</html>