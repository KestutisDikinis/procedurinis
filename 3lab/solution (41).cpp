#include <iostream>
void Keisti(int *a,int *b);
int main()
{
    int a , b;
    std::cin >> a >> b;
    Keisti(&a, &b);
    std::cout << a << " " << b;
}
void Keisti(int *a,int *b)
{
    int temp = *a;
    *a = *b;
    *b = temp;
}