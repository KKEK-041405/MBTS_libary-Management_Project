sum = 0
for s in input():
    if s=="X":
        sum +=  10 
    if s=="L":
        sum +=  50 
    if s=="C":
        sum +=  100 
    if s=="D":
        sum +=  500 
    if s=="M": 
        sum +=  1000
    if s=="V":  
        sum +=  5 
    if s=="I": 
        sum +=  1
print(sum)