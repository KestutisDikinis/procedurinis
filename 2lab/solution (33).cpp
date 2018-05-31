#include <iostream>
#include <iomanip>
using namespace std;
int main() {
    double a[10] = {};
    double n , ats = 0.0 , count = 0.0;
    cin >> n;
    if ( ( n > 0 ) && ( n <= 10 ) ){
        for ( int i = 0 ; i < n ; i++ ){
            cin >> a[i];
            if ( a[i] < 0){
                ats +=a[i];
                count++;
            }
        }
        if ( ats < 0 ){
        cout << fixed << setprecision(2) << ats/count;
        }
        else {
            cout << "NO";
        }
    }
    else {
        cout << "NO";
    }
    return 0 ;
}