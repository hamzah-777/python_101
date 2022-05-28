# create read update delete (CRUD)



print("_____welcome to the todo list_____")
import mysql.connector 
mysqldb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="test"
)    
mycursor=mysqldb.cursor()


user_input=input("enter data")
print(user_input)
new_input= "do S-"+ user_input



mycursor.execute("insert into testing (data) values('" + new_input  +"')") 
mysqldb.commit() 


 