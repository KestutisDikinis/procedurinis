#include <iostream>
int main() {
    long long n , a[10][10] , suma = 0 , k = 0;
    std::cin >> n;
    if ( n > 1 ){
    for ( auto i = 0 ; i < n ; i++ ){
        for ( auto j = 0 ; j < n ; j++ ){
            std::cin >> a[i][j];
        }
    }
        for ( auto i = 1 ; i < n ; i++ ){
            for ( auto j = 0 ; j <= k ; j++ ){
                suma += a[i][j];
            }
            k++;
        }
        std::cout << suma;
    }
    else {
        std::cout << "No";
    }
    return 0 ;
}