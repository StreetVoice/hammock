<?php
	# this is the abstract class for data storage.
	# actual implementations will override it.

	class SlackData {

		function get($table, $key){
			return array();
		}

		function get_all($table){
			return array();
		}

		function set($table, $key, $value){
			return true;
		}

		function del($table, $key){
			return true;
		}

		function clear($table){
			return true;
		}
	}

