#include <iostream>
int main() {
    long long n , m , a[10][10] ;
    std::cin >> n;
    std::cin >> m;
    if ( ( n >= 2 ) && (m >= 1) ){
        for ( auto i = 0 ; i < n ; i++ ){
            for ( auto j = 0 ; j < m ; j++){
                std::cin >> a[i][j];
            }
        }
        for ( auto i = 1 ; i < m ; i++){
            if ( a[1][0] < a[1][i] ){
            a[1][0] = a[1][i];
            }
        }
        std::cout << a[1][0];
    }
    else {
        std::cout << "No";
    }
    return 0 ;
}