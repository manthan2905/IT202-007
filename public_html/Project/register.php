<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container">
  <div class="card">
	<h2>Create an account</h2>
    <form onsubmit="return validate(this)" method="POST">
        <div>
            <input class="inp_fld" type="email" name="email" required placeholder="Email"/>
        </div>
        <div>
            <input class="inp_fld" type="text" name="username" required maxlength="30" placeholder="Username"/>
        </div>
        <div>
            <input class="inp_fld" type="password" id="pw" name="password" required minlength="8" placeholder="Password"/>
        </div>
        <div>
            <input class="inp_fld" type="password" name="confirm" required minlength="8"placeholder="Confirm Password" />
        </div>
        <input class="inp_btn" type="submit" value="Register" />
    </form>
  </div>
</div>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<style>
	.container {
    	width: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
    }
    .card {
		width: 30em;
		padding: 2em;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
		border-radius: 10px;
    }
	.inp_fld {
        border: solid 1px gray;
		border-radius: 5px;
		margin: 1em;
		height: 35px;
		width: 285px;
		padding-left: 25px;
    }
	
	.inp_btn {
		border: none;
		background-color: black;
		border-radius: 5px;
		margin: 1em;
		height: 35px;
		width: 285px;
		color: white;
		font-weight: bold;
	}
	
	h2 {
		font-family: Arial, sans-serif;
	}
</style>

<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $confirm = se(
        $_POST,
        "confirm",
        "",
        false
    );
    $username = se($_POST, "username", "", false);
    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty", "danger");
        $hasError = true;
    }
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!preg_match('/^[a-z0-9_-]{3,16}$/i', $username)) {
        flash("Username must only be alphanumeric and can only contain - or _", "danger");
        $hasError = true;
    }
    if (empty($password)) {
        flash("password must not be empty", "danger");
        $hasError = true;
    }
    if (empty($confirm)) {
        flash("Confirm password must not be empty", "danger");
        $hasError = true;
    }
    if (strlen($password) < 8) {
        flash("Password too short", "danger");
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm
    ) {
        flash("Passwords must match", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            flash("Successfully registered!");
        } catch (Exception $e) {
            flash("There was a problem registering", "danger");
            flash("<pre>" . var_export($e, true) . "</pre>", "danger");
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>