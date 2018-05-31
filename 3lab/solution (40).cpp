#include <iostream>
#include <cmath>
bool IsPrime(long long a);
int main()
{
    long long a;
    std::cin >> a;
    if( IsPrime(a) )
    {
        std::cout << "1";
    }else{
        std::cout << "0";
    }
}
bool IsPrime(long long a)
{
    bool prime = true;
    if( a >= 2 ){
        for ( auto i = 2 ; i <= sqrt(a) ; i++ )
        {
            if ( a % i == 0 )
            {
                prime = false;
                break;
            }
        }
    }else{
        prime =false;
    }
    return prime;
}