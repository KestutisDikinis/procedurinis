#include <iostream>
using namespace std;
int main(){
    long long n, sk=1;
    cin >> n;
    for ( auto i = 1; i <= n ; i++ ){
        sk = sk * 2;
        if( sk >= 1000 ){
            sk -= 1000;
        }
    }
    if( n > 6 ){
        if( sk >= 100 ){
            cout << sk;
        }
        if(( sk >= 10 ) && ( sk < 100 )){
            cout << 0 << sk;
        }
        if(( sk>0 ) && ( sk < 10 )){
            cout << 0 << 0 << sk;
        }
        if( sk == 0 ){
            cout << 000;
        }
    }
    if ( n <= 6){
        cout << sk;
    }
    return 0;
}