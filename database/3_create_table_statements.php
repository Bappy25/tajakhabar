<?php

return [

		// Create web contents

	'create_web_contents' => 	"CREATE TABLE `web_contents` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  							`content` longtext COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`)
						)",

		// Create subscribers

	'create_subscribers' => 	"CREATE TABLE `subscribers` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							PRIMARY KEY (`id`),
							UNIQUE KEY `subscribers_email_unique` (`email`)
						)",

		// Create visitors

	'create_visitors' => 	"CREATE TABLE `visitors` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`page_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  							`views` int(11) NOT NULL DEFAULT '1',
							PRIMARY KEY (`id`),
							UNIQUE KEY `visitors_ip_address_unique` (`ip_address`)
						)",

		// Create users

	'create_users' => 	"CREATE TABLE `users` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							`attempts` int(11) DEFAULT NULL,
							`login_token` varchar(255) DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
							UNIQUE KEY `users_username_unique` (`username`),
							UNIQUE KEY `users_email_unique` (`email`)
						)",

		// Create reset password links

	'create_reset_password_links' =>	"CREATE TABLE `reset_password_links` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  							`user_id` int(11) unsigned DEFAULT NULL,
							`validity` tinyint(4) NOT NULL DEFAULT '1',
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
  							KEY `user_id` (`user_id`),
							CONSTRAINT `reset_password_link_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
						)",

		// Create food types

	'create_food_types' => 	"CREATE TABLE `food_types` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
							PRIMARY KEY (`id`)
						)",	

		// Create menu

	'create_menu' => 	"CREATE TABLE `menu` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  							`tags` text COLLATE utf8_unicode_ci NULL DEFAULT NULL,
    						`price` DECIMAL(8,2) NOT NULL,
  							`details` longtext COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`image_path` varchar(255) COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`order_link` varchar(255) COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  							`type_id` int(11) unsigned DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
  							KEY `type_id` (`type_id`),
							CONSTRAINT `menu_type_id` FOREIGN KEY (`type_id`) REFERENCES `food_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
						)",	

		// Create news

	'create_news' => 	"CREATE TABLE `news` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  							`title` text COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  							`tags` text COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  							`details` longtext COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`broadcast` tinyint(4) NOT NULL DEFAULT '1',
  							`expiration` date DEFAULT NULL,
  							`user_id` int(11) unsigned DEFAULT NULL,
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`),
  							KEY `user_id` (`user_id`),
							CONSTRAINT `news_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
						)",	

		// Create gallery

	'create_gallery' => 	"CREATE TABLE `gallery` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  							`title` text COLLATE utf8_unicode_ci NULL DEFAULT NULL,
							`media_path` varchar(255) COLLATE utf8_unicode_ci NULL DEFAULT NULL,
    						`type` enum('Image', 'Video') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Image',
							`created_at` timestamp NULL DEFAULT NULL,
							`updated_at` timestamp NULL DEFAULT NULL,
							`deleted_at` timestamp NULL DEFAULT NULL,
							PRIMARY KEY (`id`)
						)",
];