<?php

class AdminerSchemaDefaultToPublic {

	function database() {
		if (Adminer\connection()) {
			// PostgreSQL only
			if (!in_array(strtolower(Adminer\connection()->extension), ['pgsql', 'pdo_pgsql'])) {
				return Adminer\DB;
			}

			if (Adminer\get_schema() !== 'public') {
				Adminer\queries("SET search_path = " . Adminer\get_schema() . ", public;");
			}
		}
		return Adminer\DB;
	}
}
