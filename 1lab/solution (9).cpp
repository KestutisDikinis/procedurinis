#include <iostream>
using namespace std;

int main() {
    long long min, max, sum=0;
    cin>>min>>max;
    for (auto i = min ; i <= max ; i++ ){
        sum += i;
    }
    cout<<sum;
    return 0;
}