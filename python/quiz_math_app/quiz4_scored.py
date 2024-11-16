import random

def getquestion(qtype):
    if qtype=='sum':
        min=50
        max=100
        num1=random.randint(min, max)
        num2=random.randint(min, max)
    
        correct_answer=num1+num2
        print(num1," + ", num2," = ?")

    elif qtype=='sub':
        min=50
        max=100
        num1=random.randint(min, max)
        num2=random.randint(min, max)
    
        correct_answer=num1-num2
        print(num1," - ", num2," = ?")

    elif qtype=='multi':
        min=1
        max=12
        num1=random.randint(min, max)
        num2=random.randint(min, max)
    
        correct_answer=num1*num2
        print(num1," * ", num2," = ?")

    elif qtype=='div':
        min=1
        max=10
        num1=random.randint(min, max)
        num2=random.randint(min, max)
        multi=num1*num2
        print(multi," / ", num2," = ?")
        correct_answer=num1

    answer=(input())
    if answer.isnumeric():
        answer=int(answer)

    print("you entered", answer)

    if(answer==correct_answer):
        print("your answer is correct")
        return "correct"
    else:
        print("sorry, correct answer is", correct_answer)
        return "wrong"

score=0
for i in range(10):
    print("___ question number: ",i+1)
    qwerty=random.randint(0,3)

    if qwerty == 0:
        result = getquestion('sum');
    elif qwerty == 1:
        result = getquestion('sub');
    elif qwerty == 2:
        result = getquestion('multi');
    else:
        result = getquestion('div');



    if result== "correct":
        score=score+1

print("\nyou scored", score,"out of ten")