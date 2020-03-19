<?

define('DB_HOST', 'localhost');
define('DB_NAME', 'notes');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHAR', 'utf8');

class DB{
	public static $N=0;
	
    protected static $instance = null;

    public function __construct() {}
    public function __clone() {}

    public static function instance(){
        if (self::$instance === null){
            $opt  = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => TRUE,
            );
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
            self::$instance = new PDO($dsn, DB_USER, DB_PASS, $opt);
        }
        return self::$instance;
    }
    
    public static function __callStatic($method, $args){
        return call_user_func_array(array(self::instance(), $method), $args);
    }

    public static function run($sql, $args = []){
        $stmt = self::instance()->prepare($sql);
        $stmt->execute($args);
		self::$N++;
        return $stmt;
    }
	
	public static function update($table, $args){
		$key_id=key($args);
		$keys=''; $n=0;
		foreach ($args as $key=>$value) {
			if ($n>1) $keys.=', ';
			if ($n!=0) $keys.='`'.$key.'`=:'.$key;
			$n++;
		}
		$query = DB::run("UPDATE $table SET $keys WHERE `$key_id`=:$key_id LIMIT 1", $args);
		return $query;
    }	
	
	public static function insert($table, $args){
		$keys=''; $n=0;
		foreach ($args as $key=>$value) {
			if ($n!=0) $keys.=', ';
			$keys.=$key.'=:'.$key;
			$n++;
		}
		$query = DB::run("INSERT INTO $table SET $keys", $args);
		return $query;
    }
}