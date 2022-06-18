
import random 
def getsum():
    num1=random.randint(50, 100)
    num2=random.randint(50, 100)
    print(num1," + ", num2," = ?")
    #answer=int(input())
    answer=(input())
    if answer.isnumeric():
        answer=int(answer)
    sum=num1+num2
    print("you entered", answer)

    if(answer==sum):
        print("your answer is correct")
    else:
        print("sorry, correct answer is", sum)

#getsum()

def getsub():
    num1=random.randint(50, 100)
    num2=random.randint(50, 100)
    print(num1," - ", num2," = ?")
    #answer=int(input())
    answer=(input())
    if answer.isnumeric():
        answer=int(answer)
    sub=num1-num2
    print("you entered", answer)

    if(answer==sub):
        print("your answer is correct")
    else:
        print("sorry, correct answer is", sub)

#getsub()
def getmulti():
    num1=random.randint(1, 12)
    num2=random.randint(1, 12)
    print(num1," * ", num2," = ?")
    #answer=int(input())
    answer=(input())
    if answer.isnumeric():
        answer=int(answer)
    multi=num1*num2
    print("you entered", answer)

    if(answer==multi):
        print("your answer is correct")
    else:
        print("sorry, correct answer is", multi)

#getmulti()

def getdiv():
    num1=random.randint(1, 10)
    num2=random.randint(1, 10)
    multi=num1*num2
    print(multi," / ", num2," = ?")
    #answer=int(input())
    answer=(input())
    if answer.isnumeric():
        answer=int(answer)
 
    print("you entered", answer)

    if(answer==num1):
        print("your answer is correct")
    else:
        print("sorry, correct answer is", num1)

#getdiv()
for i in range(10):
    print("question number: ",i+1)
    qwerty=random.randint(0,4)

    if qwerty == 0:
        getsum();
    elif qwerty == 1:
        getsub();
    elif qwerty == 2:
        getmulti();
    elif qwerty == 3:
        getdiv();