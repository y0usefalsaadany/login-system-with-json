<?php require "header.php";?>
        <section>
            <div class="container">
                <div class="user singin-bx" id="singin">
                    <div class="img-bx"><img src="img/pexels-cottonbro-3585074.jpg" alt="Login"></div>
                    <div class="form-bx">
                        <form action="login.php" method="post">
                            <h2>sign in</h2>
                            <input type="email" placeholder="email" name="mail">
                            <input type="password" placeholder="Password" name="password">
                            <input type="submit" value="Login" name="send">
                            <p class="singup">don't have an account ? <a href="#singup" onclick="toggleFrom();">sing up.</a></p>
                        </form>
                    </div>
                </div>
                
                <div class="user singup-bx" id="singup">
                    <div class="form-bx">
                        <form action="register.php" method="post">
                            <h2>creat an account</h2>
                            <input type="text" placeholder="Your Name" name="name">
                            <input type="email" placeholder="Email" name="mail">
                            <input type="password" placeholder="Password" name="password">
                            <input type="submit" value="Sing Up" name="send">
                            <p class="singup">already have an account ? <a href="#singin" onclick="toggleFrom();">sign in.</a></p>
                        </form>
                    </div>
                    <div class="img-bx"><img src="img/pexels-cottonbro-4629633.jpg" alt="Sing"></div>
                </div>
            </div>
        </section>
<?php require "footer.php"; ?>