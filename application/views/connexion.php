    <?php
        $attributes = array('class' => 'form-horizontal', 'id' => 'login', 'method'=> 'POST');
        echo form_open('login/authentifier', $attributes);
    ?>
    <div class="in-container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Veuillez-vous connecter</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Login</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="email" name="email" class="form-control" id="email"
                                   placeholder="E-mail" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <i class="fa fa-close"></i>
                            </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Mot de passe</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                            <!-- Put password error message here -->
                            </span>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Connexion</button>
                    <a class="btn btn-link" href="<?php echo site_url('login/reset_password'); ?>">Mot de passe oublié?</a>
                </div>
            </div>
        </div>
    <?php  form_close(); ?>
    </div>
<!--</body>-->
<!--</html>-->