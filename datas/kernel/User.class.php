<?php

class User extends Table
{

	public static function add($data)
	{
		try {
			$user = [
				'_id' => $data['_id'],
				'username' => $data['username'],
				'password' => $data['password'],
				'email' => $data['email'],
				'date_creation' => [date('j-m-y'), date('H:i:s')],
				"last_connect" => [date('j-m-y'), date('H:i:s')],
				"last_deconnect" => [date('j-m-y'), date('H:i:s')],
				"photo_profile" => $data['photo_profile'],
				"connected" => false,
				"autorisation" => true,
				"physique" => false,
			];
			Table::query('insert', $user, 'user');
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public static function delete($id)
	{
		$post = ['_id' => new MongoDB\BSON\ObjectId($id)];
		Table::query('delete', $post, 'user');
	}

	public static function update($id, $data)
	{
		try {
			$post1 = ['_id' => new MongoDB\BSON\ObjectId($id)];
			$post2 = ['$set' => $data];
			Table::query('update', $post2, 'user', $post1);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public static function updateLastConnect($id)
	{
		$id_ = ['_id' => new MongoDB\BSON\ObjectId($id)];
		$data_ = ['$set' => ["last_connect" => [date('j-m-y'), date('H:i:s')], 'connected' => true, 'physique' => User::getUserIpAddr()]];
		Table::query('update', $data_, 'user', $id_);
	}

	public static function updateLastDeconnect($id)
	{
		$id_ = ['_id' => new MongoDB\BSON\ObjectId($id)];
		$data_ = ['$set' => ["last_deconnect" => [date('j-m-y'), date('H:i:s')], 'connected' => false, 'physique' => false]];
		Table::query('update', $data_, 'user', $id_);
	}

	public static function getUser()
	{
		return Table::all('user');
	}

	public static function search($data)
	{
		return Table::filter($data, 'user');
	}

	public static function getUserIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			//ip from share internet
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			//ip pass from proxy
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	/*public static function getServerMacl{
    ob_start();
    system("ipconfig/all");
    $mycom=ob_get_contents();
    ob_clean();
    $findme = "physique";
    $pmac = strpos($mycom, $findme);
    $mac=substr($mycom,($pmac+36),17);
    return $mac;

    // code fonctionne sous Debian 7.0, pour d'autre version et distribution de Linux tu peux changer la commande "cut" pour récupérer le champ
    // echo $mac=system("/usr/sbin/arp -a|grep ".$_SERVER['REMOTE_ADDR']."\)|cut -f4 -d\" \"").'lkjhg';
  }*/
}
