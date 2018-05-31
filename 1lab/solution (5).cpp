#include <iostream>
#include <cmath>
using namespace std;

int main() {
    long long n, sum = 0, count = 0, average;
    cin>>n;
    if (n > 1) {
    for (auto i = 1; i <= n; i++) {
        if (i % 2 == 0) {
            sum += i;
            count++;
            }
        }
        average = sum/count;
        cout << average;
    }
    if(n<=1){
        cout<<0;
    }
 return 0;
}