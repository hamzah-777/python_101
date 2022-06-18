
print("Welcome to simple SQL - Python app")

# MAKE A CONNECTION TO DATABASE. only then we can access DATA from TABLES there
import mysql.connector 
mysqldb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="root",
    database="test"
)
# cursor is like a PEN or POINTER. we need to use this to DO THINGS in database.
mycursor=mysqldb.cursor()


def read():
    print('---- Your Todo List ----')
    # SELECT QUERY we use to FIND DATA from table. ("SELECT * FROM `table_name_here`")
    mycursor.execute("SELECT id, todo, is_done, created_at FROM `tb_todos`")
    # fetchall() return all the matching records from table
    result=mycursor.fetchall()
    if(mycursor.rowcount == 0):
        print("No tasks in list")
    else:
        print("Total tasks found:",mycursor.rowcount)
    for i in result:
        d_id=i[0]
        d_todo=i[1]
        d_is_done=i[2]
        d_created_at=i[3]
        print(d_id,d_todo,'-',d_is_done)
        # print("Created at:", created_at)


def create():
    todo_input = input("Please add the task here - ")
    # we want to insert record to table. so we use "INSERT INTO `table_name` (columns_array) VALUES (data_to_to_insert)"
    mycursor.execute("INSERT INTO `tb_todos` (todo) VALUES('" + todo_input + "')") 
    mysqldb.commit()


def update():
    print("update")
    position = input("Please give the number to update todo - ")

    index = int(position)
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE id='{index}'")
    result=mycursor.fetchone()
    #fetchone() return first record found
    if result is None:
        # checking for None to avoid error
        print("Item not found!")
    else:
        print("current todo - ", result[1])
        new_todo = input("Please add the updated task here - ")
        mycursor.execute(f"UPDATE `tb_todos` SET todo='{new_todo}' is_done='pending' WHERE id='{index}'")
        mysqldb.commit()


def delete():
    print("delete")
    position = input("Please give the number to delete todo - ")

    index = int(position)
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE id='{index}'")
    result=mycursor.fetchone()
    #fetchone() return first record found
    if result is None:
        # checking for None to avoid error
        print("Item not found!")
    else:
        todo = result[1]
        mycursor.execute(f"DELETE FROM `tb_todos` WHERE id='{index}'")
        mysqldb.commit()
        print(todo, " - deleted")
    

def markAsDone():
    position = input("Please give the number to mark as done - ")

    index = int(position)
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE id='{index}'")
    result=mycursor.fetchone()
    #fetchone() return first record found
    if result is None:
        # checking for None to avoid error
        print("Item not found!")
    else:
        current_todo = result[1]
        mycursor.execute(f"UPDATE `tb_todos` SET is_done='done' WHERE id='{index}'")
        mysqldb.commit()
        print(index,current_todo,'- done')


def search():
    search_key = input("Please give keyword to search in todo list - ")
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE `todo` LIKE '%{search_key}%'")
    result=mycursor.fetchall()
    
    if(mycursor.rowcount == 0):
        print("No search results")
    else:
        print("Found",mycursor.rowcount,"tasks containing keyword:", search_key)
    for i in result:
        d_id=i[0]
        d_todo=i[1]
        d_is_done=i[2]
        d_created_at=i[3]
        print(d_id,d_todo,'-',d_is_done)
        # print("Created at:", created_at)

def get_completed():
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE `is_done` = 'done'")
    result=mycursor.fetchall()
    
    if(mycursor.rowcount == 0):
        print("No completed tasks")
    else:
        print("Found",mycursor.rowcount," completed tasks")
    for i in result:
        d_id=i[0]
        d_todo=i[1]
        d_is_done=i[2]
        d_created_at=i[3]
        print(d_id,d_todo,'-',d_is_done)
        # print("Created at:", created_at)

def get_pending():
    mycursor.execute(f"SELECT id, todo, is_done, created_at FROM `tb_todos` WHERE `is_done` = 'pending'")
    result=mycursor.fetchall()
    
    if(mycursor.rowcount == 0):
        print("No pending tasks")
    else:
        print("Found",mycursor.rowcount," pending tasks")
    for i in result:
        d_id=i[0]
        d_todo=i[1]
        d_is_done=i[2]
        d_created_at=i[3]
        print(d_id,d_todo,'-',d_is_done)
        # print("Created at:", created_at)

def get_sum():
    mycursor.execute(f"SELECT SUM(id) FROM `tb_todos` ")
    result=mycursor.fetchone()
    print(result[0])



while True:
    option = input("""----------------------------------
Type:\t1\t2\t3\t4\t5\t\texit()
To:\tRead\tCreate\tUpdate\tDelete\tMark-Done\tExit
Type:\t6\t7\t\t8\t\t
To:\tSearch\tGet-Completed\tGet-Pending\t
""")

    if option == "1":
        read()
    elif option == "2":
        create()
    elif option == "3":
        update()
    elif option == "4":
        delete()
    elif option == "5":
        markAsDone()
    elif option == "6":
        search()
    elif option == "7":
        get_completed()
    elif option == "8":
        get_pending()
    elif option == "9":
        get_sum()
    elif option == "exit()":
        print("Bye")
        mysqldb.close()
        quit()
    else:
        print("you typed a wrong option")

