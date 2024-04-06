ALTER TABLE `sked` ADD `dvoa_event` CHAR( 1 ) NOT NULL DEFAULT 'Y' AFTER `ev_date` ;
ALTER TABLE `sked` ADD `hc_notes` VARCHAR( 80 ) NOT NULL AFTER `notes` ;
UPDATE sked SET hc_notes=notes;
