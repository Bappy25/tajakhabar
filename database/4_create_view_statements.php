<?php

return [

		// Create menu view

	'create_menu_view' => 	"CREATE VIEW `menu_view` AS SELECT m.id AS id, m.title AS title, m.tags AS tags, m.price AS price, m.details AS details, m.image_path AS image_path, m.order_link AS order_link, m.type_id AS type_id, ft.type AS type, m.created_at AS created_at, m.updated_at AS updated_at, m.deleted_at AS deleted_at FROM menu m, food_types ft WHERE m.type_id = ft.id",

		// Create news view

	'create_news_view' => 	"CREATE VIEW `news_view` AS SELECT n.id AS id, n.title AS title, n.tags AS tags, n.details AS details, n.broadcast AS broadcast, n.expiration AS expiration, n.user_id AS user_id, u.username AS username, u.name AS name, n.created_at AS created_at, n.updated_at AS updated_at, n.deleted_at AS deleted_at FROM news n, users u WHERE n.user_id = u.id",

		// Create reset password link view

	'create_reset_password_links_view' => 	"CREATE VIEW `reset_password_links_view` AS SELECT r.id AS id, r.user_id AS user_id, u.name AS name, r.token AS token, r.validity AS validity, r.created_at AS created_at, u.updated_at AS updated_at, u.deleted_at AS deleted_at FROM users u, reset_password_links r WHERE r.user_id = u.id",

];