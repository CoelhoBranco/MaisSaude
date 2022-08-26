tam = {'l':1440,
       'a':1024,
       'b':360,
       'c':800
       }
aw = tam['a']
lw = tam['l']
lm = tam['b']
am = tam['c']

def calcular_por(value):
    print("digite o tamanho")
    tam = input()
    return (100*int(tam))/value

while True:
    print(f'\n{calcular_por(lw)}%\n')
