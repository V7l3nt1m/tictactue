<x-guest-layout>
        <x-slot name="logo">

        </x-slot>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1 id="titulo-xisbola">XISBOLA</h1>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-6">
                        <div class="loginBox">
                            <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
                            <h3 style="color:#3380cc">Login</h3>
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
                            <input type="submit" value="Logar" style="background: #3380cc">
                            <div class="text-center">
                                <p style="color: white;">Não tenho conta:</p> <a style="color: #3380cc;" href="/register">Cadastrar</a>
                            </div>
                
                        </div>
                    </div>
                
                </div>
            </div>
       

        </form>
</x-guest-layout>

