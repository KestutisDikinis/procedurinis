#include <iostream>
#include <string>
void keisti(int &a , int &b);
int main(){
    int a ,b;
    std::cin >> a >> b;
    keisti(a, b);
    std::cout<< a << " " << b;
}
void keisti(int &a , int &b)
{
    int apkeisti = a;
    a = b;
    b = apkeisti;
}