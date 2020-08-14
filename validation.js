const form = document.getElementById("form")
const nit = document.getElementById("nit")
const dpi = document.getElementById("dpi")
const name1 = document.getElementById("name1")
const last1 = document.getElementById("last1")
const nac = document.getElementById("nac")
const cel = document.getElementById("cel")
const tC = document.getElementById("tC")
const mail = document.getElementById("mail")
const dir = document.getElementById("dir")
const dn = document.getElementById("dn")
const etb = document.getElementById("etb")
const aI = document.getElementById("aI")
const aF = document.getElementById("aF")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let send = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    
    if (nit.value.length < 8 || nit.value === '') {
        alert("El NIT no es válido.")
        send = true
    }

    if (dpi.value.length < 13 || dpi.value === '') {
        alert("El DPI no es válido.")
        send = true
    }

    if (name1.value === '') {
        alert("Primer Nombre: No puede dejar este campo en blanco.")
        send = true
    }

    if (last1.value === '') {
        alert("Primer Apellido: No puede dejar este campo en blanco.")
        send = true
    }

    if (nac.value === '') {
        alert("Fecha de Nacimiento: No puede dejar este campo en blanco.")
        send = true
    }

    if (cel.value.length < 8 || cel.value === '') {
        alert("El Celular no es válido.")
        send = true
    }

    if (tC.value.length < 8 || tC.value === '') {
        alert("El Teléfono no es válido.")
        send = true
    }

    console.log(regexEmail.test(mail.value))
    if (!regexEmail.test(mail.value) || mail.value === '') {
        alert("El Email no es válido.")
        send = true
    }

    if (dir.value === '') {
        alert("Dirección: No puede dejar este campo en blanco.")
        send = true
    }

    if (dn.value === '') {
        alert("Detalle Nivel: No puede dejar este campo en blanco.")
        send = true
    }

    if (etb.value === '') {
        alert("Establecimiento: No puede dejar este campo en blanco.")
        send = true
    }

    if (aI.value.length < 4 || aI.value === '') {
        alert("El Año no es válido.")
        send = true
    }

    if (aF.value.length < 4 || aF.value === '') {
        alert("El Año no es válido.")
        send = true
    }
    
    if (send.value === true) {
        alert("Formulario enviado.")
    }
})
