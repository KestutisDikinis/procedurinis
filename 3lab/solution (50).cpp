#include<iostream>

unsigned long long power(int a,int n)
{
    unsigned long long bottom_up[100];
    bottom_up[1]=a;
    bottom_up[0]=1;
    for(auto i = 2; i <= n; i++)
    {
        bottom_up[i] = bottom_up[i-1]*a;
    }
    return bottom_up[n];
}
int main()
{
    int n,a;
    std::cin >>n >>a;
    std::cout <<power(n, a);
    return 0;
}