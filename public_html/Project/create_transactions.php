<?php
require_once __DIR__ . "/partials/nav.php";

// init db
$user = get_user_id();
$db = getDB();

// Get user accounts
$stmt = $db->prepare('SELECT * FROM Accounts WHERE user_id = :id ORDER BY id ASC');
$stmt->execute([':id' => $user]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["save"])) {
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