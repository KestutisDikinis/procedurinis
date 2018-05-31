#include <iostream>
using namespace std;

int main()
{
    long long n, i, count = 0;
    cin >> n;
    
    for(i = 1; i <= n; ++i)
    {
        if(n % i == 0)
        {
            count++;
        }
    }
    if (count == 2){
    cout << "TAIP";
    }
        else{
    cout << "NE";
    }
    return 0;
}