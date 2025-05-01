<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student Systems</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="server_side/sign_up.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="user_name" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" >Sign up</button>
				</form>
			</div>


			<div class="login">
                <form method="POST" action="server_side/sign_in.php">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="pswd" placeholder="Password" required="">
                    <button type="submit">Login</button>
                </form>
			</div>
	</div>
</body>
</html>
<!-- Loader -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll("form").forEach(form => {
        form.addEventListener("submit", function (e) {
            e.preventDefault(); // Stop form for now

            const isLogin = form.querySelector("button").textContent.trim().toLowerCase() === 'login';

            Swal.fire({
                title: isLogin ? 'Logging you in...' : 'Creating your account...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Simulate small delay then submit
            setTimeout(() => {
                form.submit(); // Submit for real
            }, 3000); // Delay to allow animation
        });
    });
</script>

</body>
</html>
