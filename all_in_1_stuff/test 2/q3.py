height=float(input("enter your height please-"))
weight=float(input("enter your weight please-"))
def get_bmi(h,w):
    bmi=0
    bmi=w/(h*h)
    print(bmi)


get_bmi(height,weight)



print('''below 18.5 – you are in the underweight range
 between 18.5 and 24.9 – you are in the healthy weight range
 between 25 and 29.9 – you are in the overweight range
 between 30 and 39.9 – you are in the obese range''')