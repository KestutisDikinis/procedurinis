#include <iostream>
#include <iomanip>
int main() {
    long double n , m , suma = 0 , vidurk , count = 0 , a[10][10];
    std::cin >> n;
    std::cin >> m;
    for ( auto i = 0 ; i < n ; i++ ){
        for ( auto j = 0 ; j < m ; j++){
            std::cin >> a[i][j];
        }
    }
    for ( auto i = 0 ; i < n ; i++ ){
        for ( auto j = 0 ; j < m ; j++){
            suma += a[i][j];
            count++;
        }
    }
    vidurk = suma/count;
    std::cout << std::fixed << std::setprecision(2) << vidurk;
    return 0 ;
}