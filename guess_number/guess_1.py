from multiprocessing import Condition
import random


xter=random.randint(1,100)
print(xter)

guess=int(input("guess a number"))
if xter==guess:
    print("you are correct")
elif xter>guess:
    print("______The Answers Bigger______")
elif xter<guess:
    print("______The Answers Smaller______")
else:
    print("you are wrong")

    