let tblUsuarios;
document.addEventListener('DOMContentLoaded', function () {
    tblUsuarios = $('#tblUsuarios').DataTable({
        ajax: {
            url: base_url + 'Usuarios/listar',
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id_usu'
            },
            {
                'data': 'nom_usu'
            },
            {
                'data': 'ape_usu'
            },
            {
                'data': 'nick_usu'
            },
            {
                'data': 'ema_usu'
            },
            {
                'data': 'nom_rol'
            },
            {
                'data': 'est_usu'
            },
            {
                'data': 'actions'
            },
        ]
    });
})

function frmLogin(e) {
    e.preventDefault();
    const inputUser = document.getElementById('username');
    const inputPassw = document.getElementById('password');
    if (!inputUser.value.trim()) {
        inputPassw.classList.remove('is-invalid');
        inputUser.classList.add('is-invalid');
        inputUser.focus();
    } else if (!inputPassw.value.trim()) {
        inputUser.classList.remove('is-invalid');
        inputPassw.classList.add('is-invalid');
        inputPassw.focus();
    } else {
        const url = base_url + "Usuarios/validar";
        const frm = document.getElementById('frmLogin');
        const http = new XMLHttpRequest();
        http.open("post", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == 'Ok') {
                    window.location = base_url + "Usuarios";
                } else {
                    divAlert = document.getElementById('alert');
                    divAlert.classList.remove('d-none');
                    setTimeout(() => {
                        divAlert.classList.add('d-none')
                    }, 2000)
                    document.getElementById('alert').innerHTML = res;
                }
            }
        }
    }
}
function registerUser(e) {
    e.preventDefault();
    const $ = selector => document.getElementById(selector);
    const firstname = $('firstname').value;
    const lastname = $('lastname').value;
    const nickname = $('nickname').value;
    const email = $('email').value;
    const password = $('password').value;
    const confirm = $('confirm').value;
    const rol = $('rol').value;
    //Valido que los campos no esten vacios
    if (!firstname.trim() || !lastname.trim() || !nickname.trim() || !email.trim() || !password.trim() || !rol.trim()) {
        //Alerta 
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Todos los campos son obligatorios',
            showConfirmButton: false,
            timer: 2000
          })
    } else if (password != confirm) {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Las contraseñas no coinciden',
            showConfirmButton: false,
            timer: 2000
          })
    } else {
        const url = base_url + "Usuarios/register";
        const frm = document.getElementById('frmUsuario');
        const http = new XMLHttpRequest();
        http.open("post", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if(res == 'Ok'){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Usuario registrado con exito',
                        showConfirmButton: false,
                        timer: 2000
                      })
                      frm.reset(); //reseteo los campos del formulario
                      $('#newUser').modal('hide'); //Oculto el modal
                }else if(res == 'exist'){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 2000
                      })
                }else{
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 2000
                      })
                }
            }
        }
    }
}