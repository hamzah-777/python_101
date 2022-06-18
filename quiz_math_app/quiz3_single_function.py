import random

def getquestion(qtype):
    #define variables to be used in function
    answer=0
    correct_answer=0

    if qtype=='sum':
        min=50
        max=100
        num1=random.randint(min, max)
        num2=random.randint(min, max)

        correct_answer = num1 + num2
        print(num1," + ", num2," = ?")

    elif qtype=='sub':
        min=50
        max=100
        num1=random.randint(min, max)
        num2=random.randint(min, max)

        correct_answer = num1 - num2
        print(num1," - ", num2," = ?")

    elif qtype=='multi':
        min=1
        max=12
        num1=random.randint(min, max)
        num2=random.randint(min, max)
        
        correct_answer = num1 * num2
        print(num1," * ", num2," = ?")

    elif qtype=='div':
        min=1
        max=10
        num1=random.randint(min, max)
        num2=random.randint(min, max)
        
        temp = num1 * num2
        correct_answer = num2
        print(temp," / ", num1," = ?")
    else:
        print("Something went Wrong!!")

    #get user input
    answer=(input())
    if answer.isnumeric():
        answer=int(answer) #convert to integer if a numeric value
    print("you entered:", answer)

    if(answer==correct_answer):
        print("your answer is correct")
    else:
        print("sorry, correct answer is:", correct_answer)

    #end of function : getquestion

def main():
    print("------ Welcome to my Quiz App!! ------")
    for i in range(10):
        print("____ Question Number: ", i+1, "____")
        qwerty=random.randint(0,3)
    
        if qwerty == 0:
            #getsum();
            getquestion('sum');
        elif qwerty == 1:
            # getsub();
            getquestion('sub');
        elif qwerty == 2:
            # getmulti();
            getquestion('multi');
        else:
            # getdiv();
            getquestion('div');
    #end of function : main

#default run main function
if __name__ == "__main__":
    main()