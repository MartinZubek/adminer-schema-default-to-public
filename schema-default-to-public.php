<?php

class AdminerSchemaDefaultToPublic {

	function database() {
		if (connection()) {
			// PostgreSQL only
			if (!in_array(strtolower(connection()->extension), ['pgsql', 'pdo_pgsql'])) {
				return;
			}

			queries("SET search_path = " . get_schema() . ", public;");
		}
		return DB;
	}
}
