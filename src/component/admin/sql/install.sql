CREATE TABLE IF NOT EXISTS `#__aiwfc_souhaits` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `titre` VARCHAR(255) NULL,
    `etat` TINYINT(1) NOT NULL DEFAULT 0,
    `description` TEXT NOT NULL DEFAULT "",
    `cree_le` DATETIME NULL,
    `cree_par` INT(11) NULL,
    PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8mb4_unicode_ci