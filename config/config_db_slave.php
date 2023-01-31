<?php
class DBSlave extends DBmysql {
   public $slave = true;
   public $dbhost = 'localhost';
   public $dbuser = 'glpi';
   public $dbpassword = '';
   public $dbdefault = 'glpi';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
