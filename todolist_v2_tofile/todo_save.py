# create read update delete (CRUD)
from ctypes.wintypes import INT
from tkinter import N


print("welcome to the todo list")
Todos=["go to school","come home"]

file = open("todolist", "a+")

def read():
    file.seek(0)
    print("___*Your todo list*___")
    for index, Todo in enumerate(file):
        print(index+1, Todo)

def create():
    todo = input(" -please add a task here- ")
    file.write("\n"+todo)


def delete():
    position = input("- choose which number on the todo you want to delete - ")
    index=int(position)-1
    todo = Todos[index]
    Todos.remove(todo)

def update():
    position = input("- choose which number on the todo you want to update - ")
    index=int(position)-1
    todo = input(" -please update the task- ")
    Todos[index]= todo

def markASdone():
    position = input("- choose which number to mark as done - ")
    index=int(position)-1
    Todos[index]= Todos[index]+" - Done"


while True:
    option = input("""
    1 -> read the list
    2 -> create todo list
    3 -> update to do list
    4 -> delete to do list
    5 -> Mark todo list as done
    6 -> exit todo list
    """)
    if option=="1":
        read()
        print(1)
    elif option=="2":
        create()
        print(2)
    elif option=="3":
        print(3)
        update()
    elif option=="4":
        delete()
        print(4)
    elif option=="5":
        markASdone()
    elif option=="6":
        quit()
    else:
        print("you have typed something wrong")        