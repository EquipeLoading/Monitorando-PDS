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
        <a href="#monitorias"> MONITORIAS </a>
        <a href="#calendario"> CALENDÁRIO </a>
        <a href="#quem somos"> QUEM SOMOS? </a>
        <button class="button_on"> ENTRAR </button>
        <button class="button_new"> REGISTRE-SE </button>
    </div>
    
    <section>
        <img src="{{ asset('/img/banner.jpg') }}" alt="banner_monitorando" class="banner" width=1503>
        <div id="login">
            <form method="POST" action="{{ route('cadastro.store') }}">
                @csrf
                <h1> C A D A S T R O </h1>

                <p id="camp">
                    <label for="nome"> Nome: </label>
                    <input id="email" name="nome" value="{{ old('nome') }}" type="text">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                </p>

                <p id="camp">
                    <label for="email"> E-mail: </label>
                    <input id="email" name="email" value="{{ old('email') }}" type="text" placeholder="nome@aluno.ifsp.edu.br" />
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                </p>

                <p id="camp">
                    <label for="prontuario"> Prontuário: </label>
                    <input id="email" name="prontuario" value="{{ old('prontuario') }}" type="text" placeholder="SPXXXXXXX" />
                    {{ $errors->has('prontuario') ? $errors->first('prontuario') : '' }}
                </p>

                <p id="camp">
                    <label for="turma"> Turma: </label>
                    <input id="email" name="turma" value="{{ old('turma') }}" type="text" />
                    {{ $errors->has('turma') ? $errors->first('turma') : '' }}
                </p>

                <p id="camp">
                    <label for="curso"> Curso: </label>
                    <input id="email" name="curso" value="{{ old('curso') }}" type="text" />
                    {{ $errors->has('curso') ? $errors->first('curso') : '' }}
                </p>

                <p id="camp">
                    <label for="senha"> Senha: </label>
                    <input id="senha" name="senha" value="{{ old('senha') }}" type="password" />
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                </p>

                <p id="camp">
                    <label for="senha"> Confirmação de senha: </label>
                    <input id="senha" name="confirmacao_senha" value="{{ old('confirmacao_senha') }}" type="password" />
                    {{ $errors->has('confirmacao_senha') ? $errors->first('confirmacao_senha') : '' }}
                </p>

                <p id="check">
                    <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                    <label for="manterlogado">Manter-me logado</label>
                </p>

                <p>
                    <button class="button_login" type="submit"> Registrar </button>
                </p>

            </form>
        </div>
    </section>
    <div class="info1">
        <h2>
            Monitorando
        </h2>
        <p> O sistema tem como objetivo ajudar e informar os alunos e monitores a terem um maior controle e capacidade
            de
            organização sobre as monitorias ministradas dentro do Instituto, podendo também localizar com mais
            facilidade
            onde acontecerá a monitoria e ao final de tudo poder avaliar o monitor segundo o quanto foi proveitoso a
            presença no evento.</p>
    </div>
    <div class="info">
        <h2> Praticidade </h2>
        <p> Não fique mais se preocupando em anotar horário de atendimento do seu professor ou de seu monitor favorito,
            pois de onde você estiver o Monitorando disponibilizará todas as monitorias e plantões de dúvidas de todo o
            Instituto Federal de São Paulo, de forma organizada, prática e eficiente.</p>
        <h3> TEM VERGONHA DE TIRAR DÚVIDAS? </h3>
        <p>Isso não será mais um problema, você poderá tirar suas dúvidas por meio de um fórum de dúvidas e mensagens
            dentro da plataforma de onde estiver!</p>
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