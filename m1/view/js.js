function regi() {
uname_error.innerHTML = '';
pass_error.innerHTML = '';
name_error.innerHTML = '';
email_error.innerHTML = '';


     if(uname.checkValidity() == false || uname.value == '') {
     document.getElementById('regierror').style.display = 'block';
    }

      if(pass.checkValidity() == false || pass.value == '') {
     document.getElementById('regierror').style.display = 'block';
    }
      if(name.checkValidity() == false || name.value == '') {
     document.getElementById('regierror').style.display = 'block';
    }
      if(email.checkValidity() == false || email.value == '') {
     document.getElementById('regierror').style.display = 'block';
    }



}

function forgot() {
    forg_error.innerHTML = '';


     if(forg.checkValidity() == false || forg.value == '') {
     document.getElementById('forgerror').style.display = 'block';
    }

}
