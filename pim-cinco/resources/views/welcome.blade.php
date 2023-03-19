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
            <p>Colégio Vencer Nunca</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="container-form flex justify-around">
            <button class="sign-in" onclick="addData()">
                Cadastrar
            </button>

            <button class="login" onclick="checkData(), setNamePerson()">
                Logar
            </button>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

    <div class="container-sign-in">

        <div class="header">
            <p>Colégio Vencer Sempre</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="container-form">
            <form action="" method="post">

                @csrf

                <div>
                    <label for="name">Insira seu nome:</label>
                    <input type="text" id="name" name="name">
                </div>

                <div>
                    <p>Insira o código de funcionário:</p>
                    <input type="text" id="code" name="email" required>
                </div>

                <div class="pb-10">
                    <p>Insira a senha:</p>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="flex justify-around">
                    <button class="sign-in" onclick="addData()">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

    <div class="container-login">

        <div class="header">
            <p>Colégio Vencer Sempre</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="container-form">
            <form action="" method="post">

                @csrf

                <div>
                    <p>Insira o código de funcionário:</p>
                    <input type="text" id="code" name="email" required>
                </div>

                <div class="pb-10">
                    <p>Insira a senha:</p>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="flex justify-around">
                    <button class="login" onclick="checkData(), setNamePerson()">
                        Logar
                    </button>
                </div>
            </form>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

    <div class="container-home">

        <div class="header">
            <p>Bem vindo <span class="namePerson"></span></p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="options">
            <div>
                <button class="book">
                    Agendar
                </button>
            </div>

            <div>
                <button class="see">
                    Vizualizar
                </button>
            </div>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

    <div class="container-booking">

        <div class="header mb-4">
            <p>*-*Data de hoje*-*</p>
        </div>

        <form action="">
            <div>
                <p>Escolha o equipamento:</p>
                <select name="" id="">
                    <option value="">DVD-1</option>
                    <option value="">DVD-2</option>
                    <option value="">DVD-3</option>
                </select>
            </div>

            <div>
                <p>Escolha o dia:</p>
                <input type="date">
            </div>

            <div>
                <p>Escolha o turno:</p>
                <select name="" id="">
                    <option value="">Matutino</option>
                    <option value="">Vespertino</option>
                    <option value="">Noturno</option>
                </select>
            </div>

            <div>
                <p>Escolha a aula:</p>
                <select name="" id="">
                    <option value="">Aula 1</option>
                    <option value="">Aula 2</option>
                    <option value="">Aula 3</option>
                    <option value="">Aula 4</option>
                    <option value="">Aula 5</option>
                </select>
            </div>

            <div class="flex justify-center mt-4">
                <button class="confirm">Confirmar</button>
            </div>
        </form>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

    <div class="container-see-and-cancel">
        <div class="header">
            <p>Seus Agendamentos:</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="bookings">
            <p class="insert-from-db">vem do banco</p>
            <p class="cancel">X</p>
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
