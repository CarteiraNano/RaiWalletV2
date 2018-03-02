
<html>
  <head></head>
  <body>
    <div style="width:100%; height:100%; margin:0; padding:0">
      <h1>
        Email de recuperação Carteira Nano
      </h1>
      <p style="text-align:left">
        Você recebe esse e-mail porque solicitou a recuperação do identificador da carteira.<br/><br/>
        
        Para entrar, você vai precisar do seu identificador de carteira, isto é / são: <br/>
        
        @foreach($identifiers as $wid)
          <code>{{ $wid }}</code><br/><br/>
        @endforeach
        
        <br/><br/>
        Então... If you need anything you can contact us at support@nanowallet.io.<br/><br/>
        Obrigado,<br/>
        Time da Carteira Nano.
      </p>
    </div>
  </body>
</html>