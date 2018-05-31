#include <iostream>
#include <iomanip>
using namespace std;

int main(){
    long long n , m , sum = 0;
    cin >> n >> m;
    while (n >= 1) {
        if ( n%2!=0 ){
            sum += m;
        }
        n /= 2;
        m *= 2;
    }
    cout << sum;
    return 0;
}