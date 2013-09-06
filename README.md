Interchange Bangkok 2013

Install SLB DB File
- Create DB
- Import file ( db/slb_2013-09-06.sql )

DB Config
IPHostMysql = IP ของ Myssql Server
DBName = ชื่อ Database
DBUser = user mysql
DBPass = pass mysql
- see_registers.php ( $pdo = new PDO('mysql:host=IPHostMysql;dbname=DBName', 'DBUser', 'DBPass');
- pages/register.php  ( $pdo = new PDO('mysql:host=IPHostMysql;dbname=DBName', 'DBUser', 'DBPass');

File Path
- Login ( index.php )
- Home ( pages/home.php )
- Meeting Info ( pages/meeting_info.php )
- Ageda ( pages/agenda.php )
- Explore Thailand ( pages/explore_thailand.php )
- Who coming ( pages/who_is_coming.php )
- gallery ( pages/gallery.php )