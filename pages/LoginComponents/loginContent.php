<div>
    <div class="login-main">
        <div class="login-heading">
            Log in
        </div>
        <div class="login-form">
           <div class="inner">
            <div class="form-group">
                    <label>
                        <span class="label">Email/Username</span>
                        <input type="text" name="a-username" autocomplete="off"
                            readonly onfocus="this.removeAttribute('readonly');"/>
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <span class="label">Password</span>
                        <input name="a-password" type="password" autocomplete="off"
                            readonly onfocus="this.removeAttribute('readonly');"/>
                    </label>
                </div>
                <a class="forgot-password" href="/forgot-password">Forgot Password?</a>
           </div>
            <br>
            <button class="button-main">Login</button>
            <div class="auth-comment">
                Don't have an account yet? <a href="/register">Register</a>
            </div>
        </div>
    </div>
</div>