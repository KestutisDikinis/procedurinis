#include <iostream>
int Suma(int a, int b);

int Suma(int a, int b) {
    return (a+b);
}

int main(){
    int a, b;
    std::cin >> a >> b;
    std::cout << Suma(a, b) << std::endl;
    return 0;
}