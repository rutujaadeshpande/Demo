function message(e){
    e.preventDefault();
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    const success = document.getElementById('success');
    const danger= document.getElementById('danger');

    if(email.value === '' && password.value === ''){
        success.style.display = 'block';
    }
    else{
        danger.style.display = 'block';
        success.style.display = 'block';
    }
}

<script src="sweetalert.min.js">
    swal("Hello world!");
</script>