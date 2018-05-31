#include <iostream>
#include <cmath>
using std::cin;
using std::cout;
using std::endl;
//Apskaičiuokite visų n-ženklių skaičių sumą
int main()
{
    unsigned long long skaicius, min, max, sudetis = 0 ;
    cin >> skaicius;
    min = pow(10, (skaicius-1));
    max= pow(10, skaicius);
    if (skaicius < 10){
        for ( auto i = min ; min < max ; i++ )
        {
            sudetis += i;
        }
        cout << sudetis << endl;
    }
    if ( skaicius >= 10){
        cout << 494999999;
        for ( auto j = 10 ; j <= skaicius ; j++)
        {
            cout << 9;
        }
        cout << 550000000;
        for ( auto j = 10 ; j <= skaicius ; j++)
        {
            cout << 0;
        }
    }
    return 0;
}
