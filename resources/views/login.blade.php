<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title> Monitorando </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <!-- mediaquery -->
</head>

<body>

    <div class="topnav">
        <a class="active" href="#home"> HOME </a>
        <a href="#monitorias"> @lang('lang.Monitorias') </a>
        <a href="#calendario"> @lang('lang.Calendario') </a>
        <a href="#quem somos"> @lang('lang.QuemSomos') </a>
        <button class="button_on"> @lang('lang.Entrar') </button>
        <button class="button_new"> @lang('lang.Registre-se') </button>
    </div>
    
    <section>
        <img src="{{ asset('/img/banner.jpg') }}" alt="banner_monitorando" class="banner" width=1503>
        <div id="login">
            <form method="POST" action="{{ route('login', ['locale' => app()->getLocale()]) }}">
                @csrf
                <h1> L O G I N </h1>

                <p id="camp">
                    <label for="email"> E-mail: </label>
                    <input id="email" name="email" value="{{ old('email') }}" type="text" placeholder="nome@aluno.ifsp.edu.br" />
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                </p>

                <p id="camp">
                    <label for="senha"> @lang('lang.Senha'): </label>
                    <input id="senha" name="senha" type="password" />
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                </p>

                <p class="link">
                    <a href="#paracadastro">@lang('lang.RecuperarSenha')</a>
                </p>

                <p id="check">
                    <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                    <label for="manterlogado">@lang('lang.Manter-meLogado')</label>
                </p>

                <p>
                    <button class="button_login" type="submit"> @lang('lang.Entrar') </button>
                </p>

            </form>

            <p>
                <button class="button_registro"><a href="{{ route('cadastro.create') }}"> @lang('lang.Registre-se') </a></button>
            </p>

            {{ isset($erro) && $erro != '' ? $erro : '' }}
            
        </div>
    </section>
    <div class="info1">
        <h2>
            Monitorando
        </h2>
        <p> @lang('lang.Paragrafo1')</p>
    </div>
    <div class="info">
        <h2> @lang('lang.Praticidade') </h2>
        <p> @lang('lang.Paragrafo2')</p>
        <h3> @lang('lang.Vergonha') </h3>
        <p>@lang('lang.Paragrafo3')</p>
    </div>

    <!-- <footer class="footer">
        <div id="criacao">
            <h1 id="tfooter"> Criado por:</h1>
            <div id="nomes">
                <li> Ana Beatriz Silva Nascimento </li>
                <li> Fernanda Cesar da Silva </li>
                <li> Gustavo Angelozi Frederico </li>
                <li> Larissa Yumi Ohashi </li>
                <li> Mariana Souza Santos </li>
                <li> Wilson de Souza Oliveira Junior </li>
            </div>
        </div>

        <h2> Contato </h2>
        <div class="contato">
            <p> E-mail:
                equipe.loading06@gmail.com </p>
            <a href="https://www.youtube.com/channel/UC4h1uvG3epGzdxZNYYyVrBQ" target="_blank" class="link"> Youtube
                Monitorando </a>
            <a href="https://blogmonitorando.blogspot.com/" target="_blank" class="link"> Blog Monitorando </a>
        </div>
        < </footer> -->

</body>

</html>