#include <iostream>
int Suma(int a, int b);

int Suma(int a, int b) {
    return (a+b);
}

int main(){
    int a, b , suma = 0;
    for ( auto i = 0 ; i <= 1 ; i++ ){
        std::cin >> a >> b;
        suma += Suma(a, b);
    }
    std::cout<< suma;
}