@extends('layouts.dash')

@section('content')
    <div class="card-header">
        <div class="title-dash">
            {{ __('Área do Professor - Chat') }}
        </div>
        <div class="back-dash">
            <a href="/home">< Voltar</a>
        </div>
    </div>

    <div class="card-body">
        <div class="chat-area">
            <div class="left-chat">
                <div class="lista-contatos">
                    <strong>Contatos</strong>
                    <ul>
                        <li>
                            <div class="contato-nome">Felipe</div>
                            <div class="sinal-msg"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-chat">
                <div class="chat-msg-area"></div>
                <div class="chat-input-area">
                    <textarea name="send-msg" id="send-msg" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
                    <button class="btn-send-msg">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('6ad5994258e71b875206', {
          cluster: 'sa1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
          alert(JSON.stringify(data));
        });
      </script>
@endsection
