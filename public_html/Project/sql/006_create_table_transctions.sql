CREATE TABLE IF NOT EXISTS `Transaction`(
	`id`			INT NOT NULL AUTO_INCREMENT,
	`account_source`	INT NOT NULL,
	`account_destination`	INT NOT NULL,
	`balance_change`	INT NOT NULL,
	`transaction_type`	VARCHAR(12),
	`memo`			VARCHAR(150) DEFAULT '',
	`TRANSACTION_time`	TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	`expected_total`	INT NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`account_source`) REFERENCES Accounts (`id`),
	FOREIGN KEY (`account_destination`) REFERENCES Accounts (`id`)
)