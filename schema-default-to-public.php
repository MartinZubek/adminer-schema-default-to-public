<?php

class AdminerSchemaDefaultToPublic {

	function database() {
		if (connection()) {
			// PostgreSQL only
			if (!in_array(strtolower(connection()->extension), ['pgsql', 'pdo_pgsql'])) {
				return;
			}

			if (get_schema() !== 'public') {
				queries("SET search_path = " . get_schema() . ", public;");
			}
		}
		return DB;
	}
}
