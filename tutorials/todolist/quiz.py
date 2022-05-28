import random 
def quiz():
    num1=random.randint(50, 100)
    num2=random.randint(50, 100)
    print("enter the sum of",num1,"and", num2)
    answer=int(input())
    sum=num1+num2
    print("you entered", answer)

    if(answer==sum):
        print("you answer is correct")
    else:
        print("sorry, correct answer is", sum)


quiz()
quiz()
quiz()
quiz()
quiz()

#val=random.random()
#print(val)
#val=random.randint(10, 20)
#print(val)