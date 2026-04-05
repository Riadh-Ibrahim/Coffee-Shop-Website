-- Use this file to update an existing ooplogin database to support 10-digit phone values.
ALTER TABLE ooplogin.users MODIFY users_tel VARCHAR(20) NOT NULL;
