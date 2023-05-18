<x-guest-layout>
        <x-slot name="logo">

        </x-slot>
        <form method="POST" action="{{ route('login') }}">
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
                     <input id="uname" type="text" name="username" placeholder="Nome de Usuário" required autofocus autocomplete="username"> 
                     <input id="pass" type="password" name="password" required autocomplete="current-password" placeholder="Palavra-Passe">
                     </div>
            <input type="submit" value="Logar">
            <div class="text-center">
                <p style="color: white;">Não tenho conta:</p> <a style="color: #59238F;" href="/register">Cadastrar</a>
            </div>
            
        </div>
        </form>
</x-guest-layout>

