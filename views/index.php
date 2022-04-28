<?php include('header.php')?>
<div class="login_wrapper">
    <div>
        <section class="login_content">
            <form action="../controller/verify_login.php" method="post">
                <h1><img src="../images/idoneo.png" alt="Idoneo"></h1>
                <div>
                    <input type="text" class="form-control" name="user" placeholder="User" required="" />
                </div> 
                <div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                </div>
                <div id="errorMSG" class="error" style="display:block;">
                    <p>
                        Wrong username or password
                    </p>
                </div>
                <div>
                    <button type="submit">
                        Login
                    </button>
                </div>
            </form>
        </section>
    </div>
</div>
<?php include('footer.php')?>
