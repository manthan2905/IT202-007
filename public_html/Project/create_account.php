<?php require_once(__DIR__ . "/partials/nav.php"); ?>

<form method="POST">
  <label> Account Number </label>
  <input type="number" name="account_number" disabled value="<?php $randNumber = rand(100000000000,1000000000000); echo $randNumber;?>" />
  <label>Account Type</label>
  <select name="account_type">
    <option value = "checking">checking</option>
    <option value =  "saving">saving</option>
    <option value = "loan">loan</option>
   
  </select>
  <label>Balance</label>
  <input type="number" min="10.00" name="balance" value="<?php echo $result["balance"];?>" />
	<input type="submit" name="save" value="Create"/>
</form>

<?php 

if(isset($_POST["save"])){
        $account_type = $_POST["account_type"]; 
    $user= get_user_id();
    $balance = $_POST["balance"];
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Accounts (account_number, account_type, user_id, balance) VALUES(:account_number, :account_type, :user, :balance)");
    $r = $stmt->execute([
        ":account_number" => $randNumber,
        ":account_type"=> $account_type,
        ":user" => $user,
        ":balance" => $balance
    ]);

    if($r){
      flash("Created successfully with id: " . $db->lastInsertId());
    }
    else{
      $e = $stmt->errorInfo();
      flash("Error creating: " . var_export($e, true));
    }

}   

?> 
<?php require(__DIR__ . "/partials/flash.php");