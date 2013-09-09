<?php
session_start();

if (isset($_POST['login']) && isset($_POST['password'])){
    $username = strtolower($_POST['login']);
    $user = preg_replace( '/dir(\/|\\\\)/', '', $username );
    $user = preg_replace( '/@.*/', '', $user );
    $password = $_POST['password'];
    $xml = simplexml_load_file('SLB.xml');
    $counter = 0;


    foreach ($xml as $key => $value) {
        if(strtolower((string)$value->login) == $user)
        {
            $counter++;
        }
    }


    if($counter >= 1)
    {
        $ldaphost = "136.250.9.56";
        $ldapport = "389";
        $ldapstart = "c=an";

        if(!ldap_connect($ldaphost,$ldapport)){
            exit("Could not connect to LDAP server");
        }

        $ad = ldap_connect($ldaphost,$ldapport) or die("Could not connect to LDAP server.");
        ldap_set_option( $ad, LDAP_OPT_PROTOCOL_VERSION, 3 );
        ldap_set_option( $ad, LDAP_OPT_REFERRALS, 0 );


        if (preg_match( '/[а-яА-Я]/', $user.$password )) {
            exit("error preg_match");
        }

        if (!$password || $password == '') {
            exit("error password blank");
        }

        if (!ldap_bind( $ad )){
            exit("error login password blank");
        }


        $result = ldap_search( $ad, $ldapstart, "(alias=$user)", array("dn","activedirectorydn") );
        if(!$result) {
            exit("error ldap_search");
        }

        $entries = ldap_get_entries($ad, $result);
        if ($entries["count"] != 1) {
            exit("error ldap_get_entries");
        }

        $dn = $entries[0]["dn"];
        try {
            $bind = @ldap_bind( $ad, $dn, $password );

            if($bind){

                    $_SESSION['login'] = 1;
                    $_SESSION['user_id'] = $user;
                    echo 999;
                    exit();
                    //echo '<script type="text/javascript">window.location.href="home.php"</script>';
                    //echo "hello " . $_SESSION['user_id'];

            }
                else{
                    echo 1;
                    exit();
                    //exit("error try ldap_bind");
            }
            ldap_unbind( $ad );
        } catch (Exception $e) {
            exit("error Exception");
        }
    } else {
        echo 0;
        exit();
    }
}

?>
