<?php
require_once __DIR__ . "/partials/nav.php";

$query = "";
$results = [];
if (isset($_POST["query"]) && isset($_POST["account_type"])) {
  $query = $_POST["query"];
  $account_type = $_POST["account_type"];
}
if (isset($_POST["search"]) && !empty($query) && !empty($account_type)) {
  $db = getDB();
  $column = $account_type == 'dest' ? 'act_dest_id' : 'act_src_id';
  $stmt = $db->prepare(
    "SELECT * from Transactions WHERE " . $column . " = :q LIMIT 10"
  );
  $r = $stmt->execute([":q" => $query]);
  if ($r) {
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
    flash("There was a problem fetching the results");
  }
}
?>
<form method="POST">
    <select name="account_type">
        <option value="src">Account Source ID</option>
        <option value="dest">Account Dest ID</option>
    </select>
    <input name="query" placeholder="Account ID" value="<?php safer_echo($query); ?>"/>
    <input type="submit" value="Search" name="search"/>
</form>
<div class="results">
<?php if (count($results) > 0): ?>
    <div class="list-group">
        <?php foreach ($results as $r): ?>
            <div class="list-group-item">
                <div>
                    <div>Account Src ID:</div>
                    <div><?php safer_echo($r["act_src_id"]); ?></div>
                </div>
                <div>
                    <div>Account Dest ID:</div>
                    <div><?php safer_echo($r["act_dest_id"]); ?></div>
                </div>
                <div>
                    <div>Amount:</div>
                    <div>$<?php safer_echo($r["amount"]); ?></div>
                </div>
                <div>
                    <div>Type:</div>
                    <div><?php safer_echo($r["action_type"]); ?></div>
                </div>
                <div>
                    <div>Memo:</div>
                    <div><?php safer_echo($r["memo"]); ?></div>
                </div>
                <div>
                    <div>Expected Total:</div>
                    <div>$<?php safer_echo($r["expected_total"]); ?></div>
                </div>
                <div>
                    <div>Created:</div>
                    <div><?php safer_echo($r["created"]); ?></div>
                </div>
                <div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No results</p>
<?php endif; ?>
</div>

<?php require (__DIR__ . "/partials/flash.php"); ?>