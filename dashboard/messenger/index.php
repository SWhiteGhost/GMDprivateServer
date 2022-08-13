<?php
session_start();
require "../../incl/lib/connection.php";
require "../incl/dashboardLib.php";
$dl = new dashboardLib();
error_reporting(0);
require "../../incl/lib/mainLib.php";
$gs = new mainLib();
require "../../incl/lib/exploitPatch.php";
$ep = new exploitPatch();
require "../incl/XOR.php";
$xor = new XORCipher();
include "../../incl/lib/connection.php";
global $msgEnabled;
if($msgEnabled == 1) {
if(isset($_SESSION["accountID"]) AND $_SESSION["accountID"] != 0){
	$accid = $_SESSION["accountID"];
	$notyou = ExploitPatch::number($_POST["accountID"]);
  	if(empty($notyou)) {
		if(is_numeric($_POST["receiver"])) $notyou = ExploitPatch::number($_POST["receiver"]);
      	else $notyou = $gs->getAccountIDFromName(ExploitPatch::remove($_POST["receiver"]));
    } 
	if(!empty($notyou) AND is_numeric($notyou) AND $notyou != 0 AND $notyou != $accid) {
		if(!empty($_POST["subject"]) AND !empty($_POST["msg"])) {
			$sendsub = base64_encode(ExploitPatch::remove($_POST["subject"]));
          	$query = $db->prepare("SELECT timestamp FROM messages WHERE accID=:accid AND toAccountID=:toaccid ORDER BY timestamp DESC LIMIT 1");
          	$query->execute([':accid' => $accid, ':toaccid' => $notyou]);
          	$res = $query->fetch();
          	$time = time() - 30;
          	if($res["timestamp"] > $time) {
     			   $dl->printSong('<div class="form">
            	        <h1>'.$dl->getLocalizedString("errorGeneric").'</h1>
           	 	        <form class="form__inner" method="post" action="">
          		          <p>'.$dl->getLocalizedString("tooFast").'</p>
          		          <button type="submit" class="btn-primary" name="accountID" value="'.$notyou.'">'.$dl->getLocalizedString("tryAgainBTN").'</button>
  						  </form>
					</div>');
              die();
            }
			$sendmsg = base64_encode($xor->cipher($_POST["msg"], 14251));
			$query = $db->prepare("INSERT INTO messages (userID, userName, body, subject, accID, toAccountID, timestamp, secret, isNew)
			VALUES (:uid, :nick, :body, :subject, :accid, :notyou, :time, 'Wmfd2893gb7', '1')");
			$query->execute([':uid' => $gs->getUserID($accid), ':nick' => $gs->getAccountName($accid), ':body' => $sendmsg, ':subject' => $sendsub, ':accid' => $accid, ':notyou' => $notyou, 'time' => time()]);
		}
		$query = $db->prepare("SELECT * FROM messages WHERE accID=:you AND toAccountID=:notyou OR accID=:notyou AND toAccountID=:you ORDER BY messageID ASC");
		$query->execute([':you' => $accid, ':notyou' => $notyou]);
		$res = $query->fetchAll();
		$msgs = '';
		foreach($res as $i => $msg) {
			if($msg["accID"] == $accid) $div = 'you';
			else $div = 'notyou';
			$subject = base64_decode($msg["subject"]);
			$body = $xor->plaintext(base64_decode($msg["body"]), 14251);
			$msgs .= '<div class="messenger'.$div.'"><h2 class="subject'.$div.'">'.$subject.'</h2>
			<h3 class="message'.$div.'">'.$body.'</h3>
			<h3 id="comments">'.$dl->convertToDate($msg["timestamp"]).'<h3></div>';
			$_POST["subject"] = '';
			$_POST["msg"] = '';
		}
		if(count($res) == 0) {
			$msgs .= '<div class="messenger"><p>'.$dl->getLocalizedString("noMsgs").'</p></div>';
		}
		$dl->printSong('<div class="form">
			<a class="a" href="messenger/"><h1>'.$gs->getAccountName($notyou).'</h1></a>
			<form class="form__inner dmbox" method="post" action="">'.$msgs.'</form>
			<form class="form__inner dmbox" method="post" action="">
				<div class="field"><input type="text" name="subject" placeholder="'.$dl->getLocalizedString("subject").'"></input></div>
				<div class="field"><input type="text" name="msg" placeholder="'.$dl->getLocalizedString("msg").'"></input></div>
			<button type="submit" name="accountID" value="'.$notyou.'" class="btn-primary">'.$dl->getLocalizedString("send").'</button></form></div>');
	} else {
		$query = $db->prepare("SELECT * FROM friendships WHERE person1=:acc OR person2=:acc");
		$query->execute([':acc' => $accid]);
		$result = $query->fetchAll();
		$options = '';
		foreach ($result as $i => $row) {
			if($row["person1"] == $accid) {
				$receiver = $gs->getAccountName($row["person2"]);
				$recid = $row["person2"];
			}
			else {
				$receiver = $gs->getAccountName($row["person1"]);
				$recid = $row["person1"];
			}
			$options .= '<div class="messenger"><text class="receiver">'.$receiver.'</text><br>
			<button type="submit" class="btn-rendel" name="accountID" value='.$recid.' style="margin-top:5px">'.$dl->getLocalizedString("write").'</button></div>';
		}
		$dl->printSong('<div class="form">
			<h1>'.$dl->getLocalizedString("messenger").'</h1>
			<form class="form__inner" method="post" action="messenger/">
			<div class="msgbox" style="width:100%">'.$options.'</div></form>
            <form class="field" method="post" action="messenger/">
            <div class="messenger" style="width:100%"><input class="field" type="text" name="receiver" placeholder="'.$dl->getLocalizedString("banUserID").'"></input>
            <button type="submit" class="btn-rendel" style="margin-top:5px">'.$dl->getLocalizedString("write").'</button></div></form>');
		}
} else {
	$dl->printSong('<div class="form">
    <h1>'.$dl->getLocalizedString("errorGeneric").'</h1>
    <form class="form__inner" method="post" action="../dashboard/login/login.php">
	<p>'.$dl->getLocalizedString("noLogin?").'</p>
	        <button type="submit" class="btn-primary">'.$dl->getLocalizedString("LoginBtn").'</button>
    </form>
</div>');
}
} else {
		$dl->printSong('<div class="form">
			<h1>'.$dl->getLocalizedString("errorGeneric").'</h1>
			<form class="form__inner" method="post" action="../dashboard">
			<p>'.$dl->getLocalizedString("pageDisabled").'</p>
			<button type="submit" class="btn-song">'.$dl->getLocalizedString("dashboard").'</button>
			</form>
		</div>');
}
?>