import mysql.connector
from argon2 import PasswordHasher
  
# create connection object
con = mysql.connector.connect(
  host="localhost", user="root",
  password="", database="passwordvault")
print("--------------------------------------------------MYSQL Database Testing -------------------------------------")
print("--------------------------------------------------Testing the connection to the database -------------------------------------")
try : 
    if (con) : 
        print("--------------------------------------------------Connection to the database successful -------------------------------------") 
except : 
    print("--------------------------------------------------Connection to the database not successful-------------------------------------")
    print("Possible Solutions : 1. Check Whether Apache - MYSQL - FileZilla is running on XAMPP \n 2. Check whether the database name is correct on the code \n 3. Check whether the given database name on the code is available on PHPMYADMIN")
ph = PasswordHasher()
# create cursor object
cursor = con.cursor()

username = "sgomez"
user_id = 10

# assign data query
query1 = "SELECT websitename FROM passwords where id = '" + str(user_id) + "'"
  
# executing cursor
cursor.execute(query1)
  
# display all records
table = cursor.fetchall()
  
# describe table
print("--------------------------------------------------Test 1 : Print Website Names in vault for the Username \"sgomez\" -------------------------------------")
print("Username", end="\n")
for row in table:
    print(row[0], end="\n")
# assign data query
password = "Firefox!2021"
query2 = "select * from accounts where username='" + username + "'"
  
# executing cursor
cursor.execute(query2)
  
# display all records
table = cursor.fetchall()
  
hashedPassword = ""
print("--------------------------------------------------Test 2 : Verify whether the password Firefox!2021 is valid for the Username \"sgomez\" -------------------------------------")
# fetch all columns
for row in table:
    hashedPassword = row[5]
      
try : 
    print("--------------------------------------------------Test 2 : Password is correct for the username \"sgomez\" -------------------------------------")
    print(ph.verify(hashedPassword, password))    
except :
    print("--------------------------------------------------Test 2 : Password Invalid for the Username \"sgomez\" -------------------------------------")

passwordWrong = "Firefox!2023"
query3 = "select * from accounts where username='" + username + "'"
  
# executing cursor
cursor.execute(query3)
  
# display all records
table = cursor.fetchall() 

print("--------------------------------------------------Test 3 : Verify whether the password Firefox!2023 is valid for the Username \"sgomez\" -------------------------------------")
# fetch all columns
for row in table:
    hashedPassword = row[5]
      
try : 
    print("--------------------------------------------------Test 3 : Password is correct for the username \"sgomez\" -------------------------------------")
    print(ph.verify(hashedPassword, passwordWrong))
except :
    print("--------------------------------------------------Test 3 : Password Invalid for the Username \"sgomez\" -------------------------------------")





# closing cursor connection
cursor.close()
  
# closing connection object
con.close()