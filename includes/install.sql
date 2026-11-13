-- VitrineBTP - Installation base de donnees
-- Compatible MySQL 5.5 / 5.6 / 5.7 / 8.0
-- Executer via phpMyAdmin : onglet SQL, copier-coller et cliquer Executer

CREATE DATABASE IF NOT EXISTS vitrinebtp
  CHARACTER SET utf8
  COLLATE utf8_unicode_ci;

USE vitrinebtp;

CREATE TABLE IF NOT EXISTS contacts (
  id         INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nom        VARCHAR(120) NOT NULL,
  email      VARCHAR(191) NOT NULL,
  telephone  VARCHAR(30) DEFAULT NULL,
  sujet      VARCHAR(255) NOT NULL,
  service    VARCHAR(100) DEFAULT NULL,
  message    TEXT NOT NULL,
  lu         TINYINT(1) NOT NULL DEFAULT 0,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  INDEX idx_email (email),
  INDEX idx_created_at (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS newsletter (
  id         INT UNSIGNED NOT NULL AUTO_INCREMENT,
  email      VARCHAR(191) NOT NULL,
  actif      TINYINT(1) NOT NULL DEFAULT 1,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY uq_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
