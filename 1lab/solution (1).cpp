#include <iostream>
#include <cmath>
using namespace std;

int main() {
    unsigned long n , min , max , sudetis = 0 ;
    cin >> n;
    min = pow ( 10 , (n-1) );
    max= pow ( 10 , n );
    if ( n < 10){
    for ( auto i = min ; min < max ; min++ ){
            sudetis += min;
        }
        cout << sudetis << endl;
    }
    if ( n >= 10){
        cout << 494999999;
        for ( auto j = 10 ; j <= n ; j++){
            cout << 9;
        }
        cout << 550000000;
        for ( auto j = 10 ; j <= n ; j++){
            cout << 0;
        }
    }
    return 0;
}