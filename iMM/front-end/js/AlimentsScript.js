

function utilDelete(ctl) {
    crud ="suppr";
    $(ctl).parents("tr").remove();
    $.ajax({
        url : backendurl + 'suppFood.php',
        type : 'POST',
        data : 'label='+ document.getElementById('label').value + '&type='+document.getElementById('type').value+ '&crud='+document.getElementById('crud').value,
        dataType : 'application/json'
    });
}

