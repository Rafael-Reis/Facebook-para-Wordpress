<?php

if(!class_exists('RR_Option')) {

    class RR_Option {
        
        private $data;
        private static $instance;
        
        private function __construct() {
            $this->data = json_decode(get_option(RR_PREFIX), true);
        }
        
        public static function get_instance() {
            if(is_null(self::$instance)) {
               self::$instance = new RR_Option();
            }              
            return self::$instance;
        }
        
        public function get_values() {
            return $this->data;
        }
        
        public function set_values(array $data) {
            foreach ($data as $key => $value) {
                if(array_key_exists($key, $this->data)) {
                    $this->data[$key] = $value;
                }
            }
            
            update_option(RR_PREFIX, json_encode($this->data));
        }

    }

}