<?php
<<<<<<< HEAD
ob_start();
require_once __DIR__ . "/partials/nav.php";
if (!is_logged_in()) {
  //this will redirect to login and kill the rest of this script (prevent it from executing)
  flash("You don't have permission to access this page");
  die(header("Location: login.php"));
}

if (isset($_GET["type"])) {
  $type = $_GET["type"];
} else {
  $type = 'deposit';
}
=======
require_once __DIR__ . "/partials/nav.php";
>>>>>>> dev

// init db
$user = get_user_id();
$db = getDB();

// Get user accounts
<<<<<<< HEAD
$stmt = $db->prepare(
  "SELECT id, account_number, account_type, balance
  FROM Accounts
  WHERE user_id = :id AND account_type NOT LIKE 'loan'
  ORDER BY id ASC
");
=======
$stmt = $db->prepare('SELECT * FROM Accounts WHERE user_id = :id ORDER BY id ASC');
>>>>>>> dev
$stmt->execute([':id' => $user]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["save"])) {
<<<<<<< HEAD
  $account_src = $_POST["account_src"];
  $balance = $_POST["balance"];
  $memo = $_POST["memo"];
  $last_four = $_POST["last_four"];

  if(strlen($last_four) != 4){
    flash("Please enter last 4 digits of the destination account.");
    die(header("Location: transaction_out.php"));
  }

  $stmt = $db->prepare(
    'SELECT Accounts.id, Users.username, account_type
    FROM Accounts
    JOIN Users ON Accounts.user_id = Users.id
    WHERE Accounts.account_number LIKE :last_four
  ');
  $stmt->execute([
    ':last_four' => "%$last_four"
  ]);
  $account_dest = $stmt->fetch(PDO::FETCH_ASSOC);

  if($account_src != $account_dest["id"] || $account_dest["username"] != get_username()) {
    flash("Cannot transfer to the different user!");
    die(header("Location: transaction_out.php"));
  }
  if($account_dest["account_type"] == "loan") {
    flash("Cannot transfer to a loan account!");
    die(header("Location: transaction_out.php"));
  }

  $stmt = $db->prepare('SELECT balance FROM Accounts WHERE id = :id');
  $stmt->execute([':id' => $account_src]);
  $acct = $stmt->fetch(PDO::FETCH_ASSOC);
  if($acct["balance"] < $balance) {
    flash("Not enough funds to transfer!");
    die(header("Location: create_transaction.php?type=transfer"));
  }
  $r = changeBalance($db, $account_src, $account_dest["id"], 'ext-transfer', $balance, $memo);
  
  if ($r) {
    flash("Successfully executed transaction.");
  } else {
    flash("Error doing transaction!");
  }
}
ob_end_flush();
?>

<h3 class="text-center mt-4">Create Transection</h3>

<form method="POST">
  <?php if (count($results) > 0): ?>
  <div class="form-group">
    <label for="account">Account Source</label>
    <select class="form-control" id="account" name="account_src">
      <?php foreach ($results as $r): ?>
      <option value="<?php safer_echo($r["id"]); ?>">
        <?php safer_echo($r["account_number"]); ?> | <?php safer_echo($r["account_type"]); ?> | <?php safer_echo($r["balance"]); ?>
      </option>
      <?php endforeach; ?>
    </select>
  </div>
  <?php endif; ?>
    <div class="col-sm">
      <div class="form-group">
        <label for="last_four">Destination Accounts Last 4 Digits</label>
        <input type="number" class="form-control" id="last_four" name="last_four" min="0" max="9999" required placeholder="XXXX">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="deposit">Amount</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>
      <input type="number" class="form-control" id="deposit" min="0.00" name="balance" step="0.01" placeholder="0.00"/>
    </div>
  </div>
  <div class="form-group">
    <label for="memo">Memo</label>
    <textarea class="form-control" id="memo" name="memo" maxlength="250"></textarea>
  </div>
  <button type="submit" name="save" value="Do Transaction" class="btn btn-success">Do Transaction</button>
</form>

<?php require __DIR__ . "/partials/flash.php"; ?>
=======
  //TODO add proper validation/checks
  $account_src = $_POST["account_src"];
  $account_dest = $_POST["account_dest"];
  $transaction_type = $_POST["transaction_type"];
  $balance = $_POST["balance"];
  $memo = $_POST["memo"];
  
  $r = bank_act($account_src, $account_dest, -$balance, $transaction_type, $memo);

  if ($r) {
    flash("Created successfully with id: " . $db->lastInsertId());
  } else {
    $e = $r->errorInfo();
    flash("Error creating: " . var_export($e, true));
  }
}
?>

<form method="POST">
	<label>Account Src ID</label>
<?php if (count($results) > 0): ?>
	<select name="account_src">
    <option value="-1">000000000000 | world</option>
  <?php foreach ($results as $r): ?>
    <option value="<?php safer_echo($r["id"]); ?>">
      <?php safer_echo($r["account_number"]); ?> | <?php safer_echo($r["account_type"]); ?> | <?php safer_echo($r["balance"]); ?>
    </option>
  <?php endforeach; ?>
  </select>
<?php endif; ?>
	<label>Account Dest ID</label>
<?php if (count($results) > 0): ?>
	<select name="account_dest">
    <option value="-1">000000000000 | world</option>
  <?php foreach ($results as $r): ?>
    <option value="<?php safer_echo($r["id"]); ?>">
      <?php safer_echo($r["account_number"]); ?> | <?php safer_echo($r["account_type"]); ?> | <?php safer_echo($r["balance"]); ?>
    </option>
  <?php endforeach; ?>
  </select>
<?php endif; ?>
	<label>Transaction Type</label>
	<select name="transaction_type">
		<option value="deposit">Deposit</option>
		<option value="withdraw">Withdraw</option>
		<option value="transfer">Transfer</option>
	</select>
	<label>Balance Change</label>
	<input type="number" min="0.00" name="balance" step="0.01"/>
	<label>Memo</label>
	<input type="text" name="memo"/>
	<input type="submit" name="save" value="Create"/>
</form>

<?php require(__DIR__ . "/partials/flash.php"); ?>
>>>>>>> dev
