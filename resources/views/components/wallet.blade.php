    <div id="wrapper" class="wallet-wrapper" style="display:none">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        CARTEIRA NANO
                    </a>
                </li>
                <li class="active">
                    <a href="#" id="ghome"><i class="fa fa-home" aria-hidden="true" style="display:inline"></i> Home</a>
                </li>
                <li>
                    <a href="#" id="gtxs"><i class="fa fa-exchange" aria-hidden="true" style="display:inline"></i> Transações</a>
                </li>
                <li>
                    <a href="#" id="gsettings"><i class="fa fa-cogs" aria-hidden="true" style="display:inline"></i> Configurações</a>
                </li>
                <li>
                    <a href="#" id="gsecurity"><i class="fa fa-lock" aria-hidden="true" style="display:inline"></i> Segurança</a>
                </li>
                <li>
                    <a href="#" id="gdebug"><i class="fa fa-bug" aria-hidden="true" style="display:inline"></i> Debug</a>
                </li>
                <li>
                    <a href="/out" id="gout"><i class="fa fa-sign-out" aria-hidden="true" style="display:inline"></i> Sair</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="padding:0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 b-line">
                        <div class="col-md-12 main-box">
                            <div class="row">
                                <div class="col-xs-6 buttons">
                                    <h2 style="font-weight:700">SUAS NANOS, EM QUALQUER LUGAR.</h2>
                                    <a href="#menu-toggle" class="btn btn-info" id="menu-toggle">Alternar</a>
                                    <button type="button" class="btn btn-primary" id="send">Enviar</button>
                                    <button type="button" class="btn btn-primary" id="receive">Receber</button>
                                    <button type="button" class="btn btn-primary" id="change">Mudar Representante</button>
                                </div>
                                <div class="col-xs-6 text-right" id="refresh">
                                    <h2><span id="balance">0</span> NANO</h2>
                                    <h4>(<span id="pending">0</span> pendente)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- DASHBOARD -->
                <div class="row dashboard current">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h3>Blocos Pendentes </h3>
                            <small style="color: #666;">Transações pendentes vão aparecer aqui</small>
                            <div class="recent">
                                <ul>

                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <h3>Sua(s) conta(s)</h3>
                            <div class="accounts">
                                <ul>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Transactions -->
                <div class="row transactions" style="display:none">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Ultimas transações</h3>
                            <div class="acc-selector">
                                <select name="acc" id="acc-select" class="form-control" style="font-family:monospace">
                                    
                                </select>
                            </div>
                            <div class="txs">
                                <ul>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Settings -->
                <div class="row settings" style="display:none">
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Quantidade mínima para recebimento</h3>
                            <p>
                                Digite abaixo o valor mínimo em uma transação de recebimento que você deseja gastar PoW. Os valores mais baixos não serão 
                                "recebidos". Você pode alterar esta configuração sempre que desejar.
                            </p>
                            <form method="post" class="form-minimum">
                                <div class="form-group">
                                    <label>Quantidade mínima de recebimento </label>
                                    <input type="text" name="minimum_receive" id="minimum_receive" class="form-control" placeholder="e.g.: 1000000" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="change_minimum" class="btn btn-primary">
                                        Atualizar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Gerar PoW Localmente</h3>
                            <p>
                                Desmarque esta opção se o seu computador levar muito tempo para gerar PoW ou se você estiver usando um dispositivo móvel. 
                                É mais rápido ao usar o Mozilla Firefox ou o Google Chrome.
                            </p>
                            <form method="post" class="form-pow">
                                <div class="form-group">
                                    <label>Local PoW</label>
                                    <input type="checkbox" name="local_pow" id="pow_checkbox" checked />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Mudar Alias</h3>
                            <p>
                                Você pode definir um alias para iniciar sessão sem ter que copiar o identificador toda vez: P<br/>
                                Uma vez configurado, não pode ser alterado.
                            </p>
                            <form method="post" class="form-alias">
                                <div class="form-group">
                                    <label>Alias</label>
                                    <input type="text" name="alias" id="alias" class="form-control" placeholder="e.g.: johndoe" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="change_alias" class="btn btn-primary">
                                        Definir Alias
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Tempo de saída automática</h3>
                            <p>
                                Por padrão, você será desconectado da carteira após 30 minutos de inatividade. Você pode personalizar esse tempo aqui.
                            </p>
                            <form method="post" class="form-autologout">
                                <div class="form-group">
                                    <label>Desconectar depois de: (minutos)</label>
                                    <input type="text" name="time" id="aso_time" class="form-control" placeholder="e.g.: 10" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="autologout" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Security -->
                <div class="row security" style="display:none">
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Seed da Carteira</h3>
                            <p>
                                Se você ainda não o fez, por favor, faça backup de sua seed. Com isso, você poderá recuperar seus fundos caso você perca a senha ou os dados da carteira.
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <label>Seed</label>
                                    <input type="text" name="seed" id="seed_backup" class="form-control" disabled value="<?php for($i = 0; $i < 64; $i++) echo '&#9679;'; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Digite sua senha para desbloquear a seed</label>
                                    <input type="password" name="pass" id="seed_pass" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="seed_button">
                                        Mostrar Seed
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Mude sua Senha</h3>
                            <p>
                                Você pode mudar sua senha da carteira aqui. Certifique-se de não esquecer!
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <label>Senha Atual</label>
                                    <input type="password" name="current" id="change-pass-current" class="form-control"/>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label>Nova Senha</label>
                                    <input type="password" name="new1" id="change-pass-new1" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Digite a nova senha de novo</label>
                                    <input type="password" name="new2" id="change-pass-new2" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="change-pass">
                                        Alterar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>2FA</h3>
                            <p>
                                Aumente a segurança da carteira adicionando 2FA (Google authenticator, Authy, etc.).
                            </p>
                            <form method="post" class="2fa_set_form">
                                <div class="form-group" id="qr_2fa"></div>
                                <div class="form-group"><label id="2fa_key"></label></div>
                                <div class="form-group" id="2fa_confirm" style="display:none">
                                    <label for="2facode">Digite o código 2fa para confirmar</label>
                                    <input type="text" name="2fa" id="2fa_confirm_input" class="form-control" placeholder="e.g.: 000000" />
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="button_2fa">
                                        Ativar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Password Stretching Iterations</h3>
                            <p>
                                The higher the number the more difficult it will be to brute force your password and decrypt your wallet.
                                But it will also increase the time your browser will need to decrypt it.
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <label>PBKDF2 Iterations</label>
                                    <input type="text" name="iterations" id="iteration_number" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="change-iterations">
                                        Change
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    -->
                    <div class="col-md-12 b-line">
                        <div class="col-md-12">
                            <h3>Baixar o data da sua carteira</h3>
                            <p>
                                Se quiser, você também pode baixar seus dados da carteira codificados. Ter a seed é muito mais eficiente,
                                mas quem sabe, você pode querer tê-lo: P <br/>
                                Além disso, como nosso código é de código aberto, você pode desenvolver sua própria carteira a partir de lá e carregá-la com suas chaves
                                ou algo assim.
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="download_wallet">
                                        Download
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Debug -->
                <div class="row debug" style="display:none">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Logs</h3>
                            <pre id="debug-box">
                            
                            </pre>
                            <h4>
                                Blocos Pendentes
                            </h4>
                            <pre id="pending-blocks">
                            
                            </pre>
                            <h4>
                                Blocos Prontos
                            </h4>
                            <pre id="ready-blocks">
                            
                            </pre>
                            <button type="button" class="btn btn-primary" id="refreshdebug">
                                Recarregar
                            </button>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        
    </div>
    <!-- /#wrapper -->




