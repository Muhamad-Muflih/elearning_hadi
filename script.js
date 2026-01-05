const form = document.querySelector('form')
form.addEventListener('submit' , function(event) {
    const namakaryawan = document.getElementById('Nama');
    const password = document.getElementById('Password');
    const konfirmpassword = document.getElementById('Konfirmpassword');
    if (namakaryawan.value=== '') {
        alert('nama tidak boleh kosong!!');
        event.preventDefault();
    }
    else if (password.value=== '') {
        alert('password tidak boleh kosong!!');
        event.preventDefault();
    }
    else if (konfirmpassword.value=== '') {
        alert('konfirm password tidak boleh kosong!!');
        event.preventDefault();
    }
    else if (konfirmpassword.value != password.value) {
        alert('konfirm password tidak sama dengan password!!');
        event.preventDefault();
    } 
    if (password === konfirmpassword) {
        window.location.href = "index.php";
    }
    else {
        alert('Register Berhasil');
        location.replace("index.php")
    } 
});
