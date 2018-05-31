#include <iostream>
int main() {
    long long n , m , a[10][10] , suma = 0 , k;
    std::cin >> n;
    std::cin >> m;
    std::cin >> k;
    if ( ( n >= 1 ) && ( m >= 2 ) && ( k < m ) ){
        for ( auto i = 0 ; i < n ; i++ ){
            for ( auto j = 0 ; j < m ; j++){
                std::cin >> a[i][j];
            }
        }
        for ( auto i = 0 ; i < n ; i++){
            for ( auto j = k ; j < m ; j++ ){
            suma += a[i][j];
            }
        }
        std::cout << suma;
    }
    else {
        std::cout << "NO";
    }
    return 0 ;
}