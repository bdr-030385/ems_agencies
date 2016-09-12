<script type="text/javascript">
    var BASE_URL = "<?= $base_url; ?>";
</script>
<div id="login">    
    <div class="login-form">
        <center class="login-head">
            <!--<?= $this->Html->image('/images/logo-icon.png') ?>-->
            <h2 id="page-title">Sign In</h2>
            <p id="page-desc">Enter your username and password.</p>
        </center>
        <div class="login-body">
            <div id="login-container" >
                <?= $this->Flash->render() ?>
                <?= $this->Flash->render('auth') ?>
                <?= $this->Form->create() ?>
                <div class="form-group">
                    <?= $this->Form->input('username',["class" => "form-control", "id" => "exampleInputEmail1", "placeholder" => "Email", "type" => "email", "label" => false]) ?>                
                </div>
                <div class="form-group">
                    <?= $this->Form->input('password',["id" => "exampleInputPassword1", "class" => "form-control", "placeholder" => "Password", "label" => false]) ?>
                </div>
                <?= $this->Form->button(__('Sign In'),["class" => "btn btn-block btn-lg btn-success"]); ?> 

                <div class="form-group" style="text-align: right; margin-top:20px;">
                    <a href="javascript:void(0);" id="btn-forgot-password" >Forgot password?</a>
                </div>
                </form>
            </div>

            <div id="forgot-password-container" style="display: none;">
                <form id="frm-forgot-password" onsubmit="return false;" data-toggle="validator" role="form" method="post">
                    <div class="form-group">
                        <input type="email" name="email_username" class="form-control" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-lg btn-success btn-continue-forgot-password">Continue</button>
                    </div>
                    <div class="form-group" style="text-align: right; margin-top:20px;">
                        <a href="javascript:void(0);" id="btn-return-login" >Back to Sign In</a>
                    </div>
                </form>    
            </div>
            
        </div>
    </div>
</div>