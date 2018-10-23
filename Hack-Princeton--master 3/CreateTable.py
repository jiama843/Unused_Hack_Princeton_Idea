import sqlite3
# Creates the Database
conn = sqlite3.connect('Accounts.db')
# Creates the Table!
conn.execute('''CREATE TABLE Registered
       (USERNAME      TEXT    NOT NULL,
       PASSWORD       TEXT    NOT NULL);''')


conn.close()