USE db;

CREATE TABLE IF NOT EXISTS Accounts (
    id INT AUTO_INCREMENT,
    user VARCHAR(32) NOT NULL,
    pass VARCHAR(32) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS Characters (
    id INT AUTO_INCREMENT,
    user VARCHAR(32) NOT NULL,
    lvl TINYINT UNSIGNED,
    stat_agi TINYINT UNSIGNED,
    stat_int TINYINT UNSIGNED,
    stat_sta TINYINT UNSIGNED,
    stat_str TINYINT UNSIGNED,
    PRIMARY KEY (id)
);

GRANT SELECT ON *.* TO 'client@localhost';
GRANT INSERT ON *.* TO 'client@localhost';
GRANT UPDATE ON *.* TO 'client@localhost';