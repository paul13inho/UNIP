<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<div class="master-container flex space-x-2">

    <div class="container-start">

        <div class="header">
            <p>Colégio Vencer Sempre</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="container-form flex justify-around">
            <a href="/register">
                <button class="sign-in">
                    Cadastrar
                </button>
            </a>

            <a href="login">
                <button class="login">
                    Logar
                </button>
            </a>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

</div>


<script>
    let btnRegister = document.querySelector('.sign-in');

    function addData(){
        let name = document.querySelector('#name').value;
        let code = document.querySelector('#code').value;
        let password = document.querySelector('#password').value;

        localStorage.setItem('userName', name);
        localStorage.setItem('userCode', code);
        localStorage.setItem('userPassword', password);

        alert("cadastrado");
    }

    function checkData(){
        let enterName = document.querySelector('#name').value;
        let enterCode = document.querySelector('#code').value;
        let enterPassword = document.querySelector('#password').value;

        let getName = localStorage.getItem('userName');
        let getCode = localStorage.getItem('userCode');
        let getPassword = localStorage.getItem('userPassword');

        if (enterCode == getCode)
        {
            if (enterPassword == getPassword){
                alert('Sucess');
            } else {
                alert("Wrong password");
            }
        }
        else {
            alert("Wrong detais");
        }
    }

    function setNamePerson(){
        let setNamePerson = document.querySelector('.namePerson');

        let getName = localStorage.getItem('userName');

        setNamePerson.textContent = getName;
    }






</script>
</body>
</html>
