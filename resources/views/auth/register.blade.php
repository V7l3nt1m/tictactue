<x-guest-layout>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="loginBox"> 
            <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
            <h3>Login</h3>
            <x-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
                <div class="inputBox">
                    <input id="name" type="text" name="name" required autofocus autocomplete="name" placeholder="Nome Completo" required autofocus autocomplete="name"> 

                     <input id="uname" type="text" name="username" placeholder="Nome de Usuário" required autofocus autocomplete="username"> 

                     <input id="pass" type="password" name="password" required autocomplete="new-password" placeholder="Palavra-Passe">

                     <input id="pass" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar a Palavra-Passe">

                     <select name="genero" id="select_genero" class="form-control">
                        <option disabled selected>Genero</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                     </select>
                     <br>

            </div>
            <input type="submit" value="Cadastrar">
            <div class="text-center">
               <p style="color: white;">Já estou cadastrado:</p> <a style="color: #59238F;" href="/login">Logar</a>
            </div>
            
        </div>
        </form>
</x-guest-layout>
