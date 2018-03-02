    <!-- Sign up -->
    <div class="modal fade" id="signup-modal" role="dialog">
        <div class="modal-dialog modal-reg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Sign Up</h4>
                </div>
                <div class="modal-body registering" style="padding:40px 50px;">
                    <form role="form" class="form-register" method="post">
                        <div class="form-group">
                            <label for="mail">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu email aqui" required>
                        </div>
                        <div class="form-group">
                            <label for="psw">Senha</label>
                            <input type="password" class="form-control" id="psw" placeholder="Digite sua senha">
                        </div>
                        <div class="form-group">
                            <label for="psw">Repita sua Senha</label>
                            <input type="password" class="form-control" id="psw2" placeholder="Repita sua senha">
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
                    </form>
                </div>
                <div class="modal-body registered" style="padding:40px 50px; display:none">
                    <h3>
                        Carteira registrada com sucesso!
                    </h3>
                    <p class="text-center">
                        <h4>
                            Identificador
                        </h4>
                        <code id="wallet_id_reg"></code>
                    </p>
                    <p class="text-left">
                        Este é o seu identificador de carteira. Você precisa que ele faça o login na sua carteira. Pode ser substituído por um apelido para torná-lo
                        mais fácil de lembrar da página de configurações da carteira. Se você perder, pode ser recuperado se você tiver acesso ao e-mail
                        com o qual você se registrou. A carteira sob este identificador é armazenada em nossos servidores criptografados com sua senha,
                        a que você usou no cadastro. Se você esquecer essa senha, não poderá descriptografar sua carteira e, como não sabemos sua senha
                        não poderemos recuperá-la. <strong>Mas</strong> há outra medida de segurança que você pode tomar.
                        Essa é a Seed da sua Carteira:
                    </p>
                    <p class="text-center">
                        <h4>
                            Seed    
                        </h4>
                        <code id="wallet_seed_reg"></code>
                    </p>
                    <p class="text-left">
                        Faça backup da seed em algum lugar seguro. Quem tiver acesso a ela é capaz de gerar todas as suas chaves privadas, tendo acesso ao
                        seu dinheiro. Então, se você esquecer sua senha, mas tiver a seed, você pode recuperar seu dinheiro.
                    </p>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary form-control gotowallet">
                            Ir para a minha carteira
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-center">
                    Já se cadastrou? <a href="#" class="login">Login</a><br/>
                    Já tem uma Carteira Nano? <a href="#" class="import">Importe sua carteira com sua seed</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="login-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" class="form-login" method="post">
                        <div class="form-group">
                            <div class="alert alert-info">
                                <p>Você NÃO pode usar a mesma carteira do NanoWallet.io</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="wid">Identificador da Carteira <a href="#" id="lost_id">Perdeu seu identificador?</a></label>
                            <input type="text" name="wallet_id" id="wid" class="form-control" placeholder="e.g.: id_33f52770e537dbae2fe307bdc4ccd4de262c705e3b565f67b37754ad46f8525f" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="pass" id="password" class="form-control" placeholder="Digite sua senha" required />
                        </div>
                        <div class="form-group" style="display:none" id="_2fa_input">
                            <label for="2fa">Google Authenticator</label>
                            <input type="text" name="2fa" id="2fa_login_code" class="form-control" placeholder="" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login"/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-center">
                        Não é cadastrado? <a href="#" class="signup">Cadastre-se aqui</a><br/>
                        Perdeu sua senha? <a href="#" class="import">Recupere sua carteira com a seed</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="recover-id-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Recupere seu identificador</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" class="form-recovery" method="post">
                        <div class="form-group">
                            <label for="wid">EEndereço de Email</label>
                            <input type="text" name="email" id="r_email" class="form-control" placeholder="exemplo: satoshi@nakamoto.com" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="recover_id" class="btn btn-primary btn-block" value="Recover"/>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-center">Não é cadastrado? <a href="#" class="signup">Cadastre-se aqui</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="import-seed-modal" role="dialog" style="overflow-y:auto;">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Carteira da Seed</h4>
                </div>
                <div class="modal-body importing" style="padding:40px 50px;">
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <p>Leve em conta que todos os endereços de carteira anteriores gerados a partir da seed terão que ser <b>gerados manualmente</b>, novamente, após fazer login.</p>
                        </div>
                    </div>
                    <form role="form" class="form-import" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="i_email" class="form-control" id="email-import" placeholder="e.g.: john@doe.com" />
                        </div>
                        <div class="form-group">
                            <label for="wid">Coloque sua Seed</label>
                            <input type="text" name="seed" id="i_seed" class="form-control" placeholder="e.g.: CD92CFF974A3E3773909BBCF053970B12C9D4A09F320F792814B6F0EB2DDA3AD" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Digite uma senha para criptografar sua carteira</label>
                            <input type="password" name="psw1" id="import_psw1" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password2">Repita sua senha</label>
                            <input type="password" name="psw2" id="import_psw2" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="seed_import" class="btn btn-primary btn-block" value="Import"/>
                        </div>
                    </form>
                </div>
                <div class="modal-body imported" style="padding:40px 50px; display:none">
                    <h3>
                        Carteira registrada com sucesso!
                    </h3>
                    <p class="text-center">
                        <h4>
                            Identificador
                        </h4>
                        <code id="wallet_id_import"></code>
                    </p>
                    <p class="text-left">
                        Este é o seu identificador de carteira. Você precisa que ele faça o login na sua carteira. Pode ser substituído por um apelido para torná-lo
                        mais fácil de lembrar da página de configurações da carteira. Se você perder, pode ser recuperado se você tiver acesso ao e-mail
                        com o qual você se registrou. A carteira sob este identificador é armazenada em nossos servidores criptografados com sua senha,
                        a que você usou no cadastro. Se você esquecer essa senha, não poderá descriptografar sua carteira e, como não sabemos sua senha
                        não poderemos recuperá-la. <strong>Mas</strong> há outra medida de segurança que você pode tomar.
                        Essa é a Seed da sua Carteira:
                    </p>
                    <p class="text-center">
                        <h4>
                            Seed    
                        </h4>
                        <code id="wallet_seed_import"></code>
                    </p>
                    <p class="text-left">
                        Faça backup da seed em algum lugar seguro. Quem tiver acesso a ela é capaz de gerar todas as suas chaves privadas, tendo acesso ao
                        seu dinheiro. Então, se você esquecer sua senha, mas tiver a seed, você pode recuperar seu dinheiro.
                    </p>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary form-control gotowallet">
                            Ir para a minha carteira
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-center">Não tem uma carteira? <a href="#" class="signup">Cadastre-se</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Send -->
    <div class="modal fade" id="send-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary" style="padding:10px 20px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-send"></span> Send</h4>
                </div>
                <div class="modal-body" style="padding:25px">
                    <form role="form" class="form-send">
                        <div class="form-group">
                            <label for="wid">De</label>
                            <select name="from" id="send-select" class="form-control" style="font-family:monospace">
            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Para</label>
                            <input type="text" name="to" id="to" class="form-control" placeholder="Receiving account" required />
                        </div>
                        <div class="form-group">
                            <label for="amount">Quantidade (Nano)</label>
                            <input type="text" name="amount" id="samount" class="form-control" placeholder="e.g.: 10.5" required />
                        </div>
                        <!--
                        <div class="form-group">
                            <input type="checkbox" name="pow" checked > <a data-toggle="tooltip" data-placement="top" title="Check to generate the PoW needed for the block at RaiWallet servers. It is recommended if you are on a mobile device, if you have to send and receive many blocks or if you are in a rush.">Get PoW remotely</a>
                        </div>
                        -->
                        <div class="form-group">
                            <input type="submit" name="send" class="form-control btn btn-primary" value="Enviar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Receive -->
    <div class="modal fade" id="receive-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary" style="padding:10px 20px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-send"></span> Receber</h4>
                </div>
                <div class="modal-body" style="padding:25px">
                    <form role="form" class="form-receive">
                        <div class="form-group">
                            <div class="alert alert-warning">
                                <p>Antes de enviar fundos para esta carteira, certifique-se de que a <b>Seed da Carteira</b> está corretamente armazenada em um local seguro. Pode ser encontrado em Segurança> Seed da carteira.</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="wid">Minhas Contas</label>
                            <select name="from" id="receive-select" class="form-control" style="font-family:monospace">
            
                            </select>
                        </div>
                        <p>Lembre-se que o valor abaixo é usado apenas para criar o código QR de recebimento. Qualquer quantidade de NANO enviada para o endereço selecionado será creditada.</p>
                        <div class="form-group">
                            <label for="amount">Quantidade (Nano)</label>
                            <input type="text" name="amount" id="receive-amount" class="form-control" placeholder="e.g.: 10.5" required />
                        </div>
                        <div class="form-group text-center" id="qr">
                            <div class="img img-responsive"></div>
                            <div class="qr-bot"></div>
                        </div>
                        <div class="form-group">
                            <input type="button" name="acc_create" id="generate_acc" class="form-control btn btn-primary" value="Gerar nova conta" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Change -->
    <div class="modal fade" id="change-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary" style="padding:10px 20px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-send"></span> Mudar</h4>
                </div>
                <div class="modal-body" style="padding:25px">
                    <form role="form" class="form-receive">
                        <p class="text-left">
                            Na Nano, os representantes mantém a segurança da rede, quando necessário. Aqui, você pode escolher um representante para votar em seu nome. Pode encontrar uma lista de representantes <a href="https://raiblocks.net/page/representatives" target="_blank">aqui</a>.
                        </p>                        
                        <div class="form-group">
                            <label for="wid">Minhas Contas</label>
                            <select name="from" id="change-select" class="form-control" style="font-family:monospace">
            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Representante</label>
                            <input type="text" name="representative" id="acc-repr" class="form-control" placeholder="e.g.: xrb_1anrzcuwe64rwxzcco8dkhpyxpi8kd7zsjc1oeimpc3ppca4mrjtwnqposrs" />
                        </div>
                        <div class="form-group">
                            <button type="button" name="repr_change" id="change_repr" class="form-control btn btn-primary">Mudar o meu representante</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>