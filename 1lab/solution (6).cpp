#include <iostream>
#include <cmath>
using namespace std;
int main() {
    long long n,m;
    long long uzdirbo=0;
    cin>>n>>m;
    for (auto i=1;i<=m;i++){
        uzdirbo+=pow(n,i);
    }
    cout<<uzdirbo<<endl;
    return 0;
}