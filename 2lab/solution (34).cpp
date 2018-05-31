#include <iostream>
using namespace std;
int main() {
    int a[10] = {};
    int n , ats = 0;
    cin >> n;
    if ( n > 0){
    for ( int i = 0 ; i < n ; i++ ){
        cin >> a[i];
    }
    for ( int j = 0 ; j < n ; j++ ){
        ats += a[j];
    }
    cout << ats;
    }
    else {
        cout << ats;
    }
    return 0 ;
}