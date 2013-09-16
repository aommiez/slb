Interchange Bangkok 2013

Install SLB DB File
- Create DB
- Import file ( db/slb_galleries.sql )
- Import file ( db/slb_registers.sql )
- Import file ( db/slb_whos.sql )

DB Config
IPHostMysql = IP ของ Myssql Server
DBName = ชื่อ Database
DBUser = user mysql
DBPass = pass mysql
- see_registers.php ( $pdo = new PDO('mysql:host=IPHostMysql;dbname=DBName', 'DBUser', 'DBPass');
- pdo.php ( $pdo = new PDO('mysql:host=IPHostMysql;dbname=DBName', 'DBUser', 'DBPass');

Admin Pages
- admin.php ( user : admim  , password : 123456 )
- edit user pass => admin_pages/lohin.php ( if($_POST['username']=='admin' && $_POST['password']=='123456'){ )

See user register
- see_registers.php