<!doctype html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                    <input type="text" class="form-control" id="inputNom" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPrenom" class="col-sm-2 col-form-label">Prénom</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputPrenom" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDate" class="col-sm-2 col-form-label">Date de naissance</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="inputDate" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCheck" class="col-sm-2 col-form-label">Aime le cours Web?</label>
                <div class="col-sm-3">
                    <input type="checkbox" class="form-control" id="inputCheck">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputRemarques" class="col-sm-2 col-form-label">Remarques</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputRemarques" >
                </div>
            </div>
            
            <div class="form-group row">
                <span class="col-sm-2"></span>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </div>
            </div>
        </form>
        <script>
        let students =[];
        let studentMaxId=0;
        let IdEdited=-1;

        function edit(id){
            let studentToEdit=students[id];
            
            IdEdited=id;
        }

        function onFormSubmit() {
            // prevent the form to be sent to the server
            event.preventDefault();
            let newStudent={};
            newStudent.nom = $("#inputNom").val();
            newStudent.prenom = $("#inputPrenom").val();
            newStudent.date = $("#inputDate").val();
            newStudent.remarques = $("#inputRemarques").val();
            newStudent.check=$("#inputCheck").prop("checked") ? "oui" : "non";
            if(newStudent.nom!=''){
                if(IdEdited>=0){
                    newStudent.id=IdEdited;
                    students[newStudent.id]=newStudent;
                    $("#student-"+newStudent.id).empty();
                    $("#student-"+newStudent.id).append(`<td>${newStudent.nom}</td>
                        <td>${newStudent.prenom}</td>
                        <td>${newStudent.date}</td>
                        <td>${newStudent.check}</td>
                        <td>${newStudent.remarques}</td>
                        <td><button onclick="edit(${newStudent.id});">Edit</button></td>`);
                    
                    IdEdited=-1;
                }
                else{
                    newStudent.id=studentMaxId;
                    studentMaxId++;
                    students.push(newStudent);
                    $("#studentsTableBody").append(`<tr id="student-${newStudent.id}"><td>${newStudent.nom}</td>
                    <td>${newStudent.prenom}</td>
                    <td>${newStudent.date}</td>
                    <td>${newStudent.check}</td>
                    <td>${newStudent.remarques}</td>
                    <td><button onclick="edit(${newStudent.id});">Edit</button></td>
                    </tr>`);
                
                }
 
            }
        }
        </script>
    </body>
</html>