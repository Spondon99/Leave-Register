


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
        <title>Login | BUP Leave Register</title>
    </head>
    <body>
        <div id="back"></div>
        <div id="main">
            <div id="logo-container">
                <img src="/img/bup.png">
            </div>
                <h1>BUP Leave Register Management</h1>
                <div id="form-container">
                    <form action="index.html">
                        <fieldset> 
                            <input type="text" placeholder="   User ID"><br>
                            <input type="password" placeholder="   Password">
                        </fieldset>
                        <fieldset>
                            <input type="submit" value="Login"><br>
                            <label id="forgot"><a href="#">Forgot password?</a></label>
                            <br><br>
                            <?php if(Route::has('login')): ?>
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
            
                                    <?php if(Route::has('register')): ?>
                                        <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        </fieldset>
                    </form>
                </div>
        </div>
    </body>
</html><?php /**PATH E:\testLaravel\testApp\resources\views/welcome.blade.php ENDPATH**/ ?>