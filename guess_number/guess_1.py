import random

min=1
max=100
text="guess a number between "+str(min)+", "+str(max)+": "
xter=random.randint(min,max)
# print(xter)
counter=0
# if while loop runs +1 to counter
while True:
    
    if counter==15:  
        print("ran out of goes")
        print("you are correct the answer was", xter)
        break
    guess=int(input(text))
    if 0 == guess: 
        print("correct answer was", xter)
        break
    elif xter==guess:
        print("you are correct the answer was", xter)
        break
    elif xter>guess:
        print("______The Answers Bigger______")
    elif xter<guess:
        print("______The Answers Smaller______")
    else:
        print("you are wrong")
        